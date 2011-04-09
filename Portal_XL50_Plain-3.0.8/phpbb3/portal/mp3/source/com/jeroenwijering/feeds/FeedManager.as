/**
* Parses RSS, ATOM and XSPF lists and returns them as a numerical array.
*
* @author	Jeroen Wijering
* @version	1.4
**/


import com.jeroenwijering.feeds.*;


class com.jeroenwijering.feeds.FeedManager {


	/** The array the XML is parsed into. **/
	public var feed:Array;
	/** XML file **/
	private var feedXML:XML;
	/** Flag for captions. **/
	public var captions:Boolean = false;
	/** Flag for extra audiotrack. **/
	public var audio:Boolean = false;
	/** Flag for all items in mp3 **/
	public var onlymp3s:Boolean = false;
	/** Flag for chapter index **/
	public var ischapters:Boolean = true;
	/** Flag for advertisements **/
	public var numads:Number = 0;
	/** Flag for overlays **/
	public var overlays:Boolean = false;
	/** Flag for enclosures **/
	private var enclosures:Boolean;
	/** Reference to the parser object **/
	private var parser:AbstractParser;
	/** Array with all file elements **/
	private var elements:Object = {
		file:"",
		title:"",
		link:"",
		id:"",
		image:"",
		author:"",
		captions:"",
		audio:"",
		category:"",
		start:"",
		type:""
	};
	private var filetypes:Array = Array(
		"flv","mp3","rbs","jpg","gif","png","rtmp","swf"
	);
	/** An array with objects listening to feed updates **/
	private var listeners:Array;
	/** A prefix string for all files **/
	private var prefix:String = "";


	/** Constructor. **/
	function FeedManager(enc:Boolean,jvs:String,pre:String) {
		enc == true ? enclosures = true: enclosures = false;
		jvs == "true" ? enableJavascript(): null;
		pre == undefined ? null: prefix = pre;
		listeners = new Array();
	};


	/** Enable javascript access to loadFile command.  **/
	private function enableJavascript() {
		if(flash.external.ExternalInterface.available) {
			flash.external.ExternalInterface.addCallback(
				"loadFile",this,loadFile);
			flash.external.ExternalInterface.addCallback(
				"addItem",this,addItem);
			flash.external.ExternalInterface.addCallback(
				"removeItem",this,removeItem);
			flash.external.ExternalInterface.addCallback(
				"itemData",this,itemData);
		}
	};


	/** Load an XML playlist or single media file. **/
	public function loadFile(obj:Object) {
		feed = new Array();
		for (var itm in elements) {
			if(obj[itm] != undefined) { _root[itm] = obj[itm]; }
		}
		var ftp = "xml";
		for(var i = filetypes.length; --i >= 0;) {
			if(obj['file'].substr(0,4).toLowerCase() == "rtmp") {
				ftp = "rtmp";
			} else if(_root.type == filetypes[i] ||
				obj['file'].substr(-3).toLowerCase() == filetypes[i]) {
				ftp = filetypes[i]; 
			}
		}
		if (ftp == "xml") {
			loadXML(obj['file']);
		} else {
			feed[0] = new Object();
			feed[0]['type'] = ftp;
			ftp == "mp3" ? onlymp3s = true: null;
			for(var cfv in elements) {
				if(_root[cfv] != undefined) {
					feed[0][cfv] = unescape(_root[cfv]); 
				}
			}	
			if(prefix != undefined) {
				feed[0]["file"] = prefix + feed[0]["file"];
			}
			if(_root.captions != undefined) { captions = true; }
			if(_root.audio != undefined) { audio = true; }
			if(_root.link == undefined) { feed[0]["link"] = feed[0]["file"]; }
			updateListeners();
		}
	};


	/** Parse an XML file, return the array when done. **/
	private function loadXML(url:String) {
		var ref = this;
		feedXML = new XML();
		feedXML.ignoreWhite = true;
		feedXML.onLoad = function(scs:Boolean) {
			if(scs) {
				var fmt = this.firstChild.nodeName.toLowerCase();
				if( fmt == 'rss') {
					ref.parser = new RSSParser(ref.enclosures,ref.prefix);
					ref.feed = ref.parser.parse(this);
				} else if (fmt == 'feed') { 
					ref.parser = new ATOMParser(ref.enclosures,ref.prefix);
					ref.feed = ref.parser.parse(this);
				} else if (fmt == 'playlist') { 
					ref.parser = new XSPFParser(ref.enclosures,ref.prefix);
					ref.feed = ref.parser.parse(this);
				}
				ref.onlymp3s = true;
				ref.ischapters = true;
				ref.captions = false;
				ref.audio = false;
				for(var i=0; i<ref.feed.length; i++) {
					if(ref.feed[i]["type"] != "mp3") {
						ref.onlymp3s = false;
					}
					if(ref.feed[i]['file'] != ref.feed[0]['file']) {
						ref.ischapters = false;
					}
					if(ref.feed[i]["captions"] != undefined) {
						ref.captions = true;
					}
					if(ref.feed[i]["audio"] != undefined) {
						ref.audio = true;
					}
					if(ref.feed[i]['category'] == "preroll" || 
						ref.feed[i]['category'] == "postroll") {
						ref.numads++;
						if(ref.feed[i]['category'] == "preroll") {
							ref.feed[i]['image'] = ref.feed[i+1]['image'];
						}
					}
				}
				ref.filterOverlays();
				if(_root.audio != undefined) {
					ref.audio = true;
					ref.feed[0]["audio"] = unescape(_root.audio);
				}
				ref.updateListeners();
			}
		};
		if(_root._url.indexOf("file://") > -1) { feedXML.load(url); } 
		else if(url.indexOf('?') > -1) { feedXML.load(url+'&'+random(999)); }
		else { feedXML.load(url+'?'+random(999)); }
	};


	/** Filter overlay ads out of the feeds **/
	private function filterOverlays() {
		var j = 0;
		while(j < feed.length) {
			if(feed[j]['category'] == 'overlay') {
				feed[j+1]['overlayfile'] = feed[j]['file'];
				feed[j+1]['overlaylink'] = feed[j]['link'];
				feed.splice(j,1);
				overlays = true;
			}
			j++;
		}
	};


	/** Add an item to the feed **/
	public function addItem(obj:Object,idx:Number) {
		if(obj['title']==undefined) { obj['title'] = obj['file']; }
		if(obj['type']==undefined) { obj['type'] = obj['file'].substr(-3); }
		if(arguments.length == 1 || idx >= feed.length) {
			feed.push(obj);
		} else {
			var arr1 = feed.slice(0,idx);
			var arr2 = feed.slice(idx);
			arr1.push(obj);
			feed = arr1.concat(arr2);
		}
		updateListeners();
	};


	/** Remove an item from the feed **/
	public function removeItem(idx:Number) {
		if(feed.length == 1) {
			return;
		} else  if(arguments.length == 0 || idx >= feed.length) {
			feed.pop();
		} else {
			feed.splice(idx,1);
		}
		updateListeners();
	};


	/** Retrieve playlist data for a specific item **/
	public function itemData(idx:Number):Object {
		return feed[idx];
	};


	/** Add a feed update listener. **/
	public function addListener(lst:Object) {
		listeners.push(lst);
	};


	/** Remove a feed update listener. **/
	public function removeListener(lst:Object) {
		for(var i = listeners.length; --i >= 0; ) {
			if(listeners[i] == lst) {
				listeners.splice(i,1);
				return;
			}
		}
	};


	/** Notify all listeners of a feed update **/
	private function updateListeners() {
		for(var i = listeners.length; --i >= 0; ) {
			listeners[i].onFeedUpdate();
		}
	};


}
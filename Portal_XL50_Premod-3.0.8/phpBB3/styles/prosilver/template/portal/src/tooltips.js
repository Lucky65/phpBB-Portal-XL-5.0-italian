// -----------------------------------------------
// Tooltip control (c) H.M. Pragt  2006
// Show the title attribute in a tooltip popup div
// Internet explorer and mozilla compatible
// Just insert this script into the page and all 
// titles on img and a tags will show a tooltip.
// Adjust the layout of the toolkit with the css file.
// -----------------------------------------------


// ------------------------------------
// Find the absolute position in the window
// ------------------------------------

function findPosX(obj) {
var curleft = 0;

	if (obj.offsetParent)	{
		while (obj.offsetParent) {
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft;
}

function findPosY(obj) {
var curtop = 0;

	if (obj.offsetParent)	{
		while (obj.offsetParent) {
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}


// ------------------------------------
// Define a eventcache object
// ------------------------------------

function EventCacheObj() {
 this.listEvents = [];

  // ------------------------------------
  // Define an add methode to the eventcache object
  // ------------------------------------
  this.add = function(node, sEventName, fHandler){
	  this.listEvents.push(arguments);
  }

  // ------------------------------------
  // Define a flush methode to the eventcache object
  // ------------------------------------

  this.flush = function () {
  var i, item;

	  for (i = this.listEvents.length - 1; i >= 0; i--) {
		  item = this.listEvents[i];
		  if (item[0].removeEventListener){
	 	    item[0].removeEventListener(item[1], item[2], item[3]);
		  }
		  if (item[1].substring(0, 2) != "on") {
			  item[1] = "on" + item[1];
		  }
		  if (item[0].detachEvent) {
			  item[0].detachEvent(item[1], item[2]);
		  }
  	  item[0][item[1]] = null;
	  }
  }
}


	

// ------------------------------------
// Add any event to any object.
// ------------------------------------

function addEvent( obj, type, fn ) {
	if (obj.addEventListener) {		 // Mozilla
		obj.addEventListener( type, fn, false );
		EventCache.add(obj, type, fn);
	}
	else if (obj.attachEvent) { // IE
		obj["e"+type+fn] = fn;
		obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
		obj.attachEvent( "on"+type, obj[type+fn] );
		EventCache.add(obj, type, fn);
	}
	else {
		obj["on"+type] = obj["e"+type+fn];
	}
}

// ------------------------------------
// The tooltip object.
// ------------------------------------

function ToolTipObj() { 
	this.tipElements = ['a','img','acronym'];	// Array of allowable elements for toolTips
	this.obj = Object;							// Current element that youre hovering over
	this.tip = Object;							// The actual toolTip DIV itself
 
  this.init = function () {
  	if (!document.getElementById || !document.createElement || !document.getElementsByTagName ) {
	  	return;
	  }
	  var i,j;
	  this.tip = document.createElement('div');
	  this.tip.id = 'toolTip';
	  document.getElementsByTagName('body')[0].appendChild(this.tip);
	  this.tip.style.top = '0';
	  this.tip.style.visibility = 'hidden';
	  var tipLen = this.tipElements.length;
	  for ( i=0; i<tipLen; i++ ) {
		  var current = document.getElementsByTagName(this.tipElements[i]);
		  var curLen = current.length;
		  for ( j=0; j<curLen; j++ ) {
		  	addEvent(current[j],'mouseover',this.tipOver);
			  addEvent(current[j],'mouseout',this.tipOut);
			  current[j].setAttribute('tip',current[j].title);
			  if (current[j].getAttribute('alt') != null) {
				  if (current[j].getAttribute('alt').length != 0 && current[j].title.length == 0) {
			      current[j].setAttribute('tip',current[j].getAttribute('alt'));
			      }
			  current[j].removeAttribute('alt');
			  }
			  current[j].removeAttribute('title');
		  }
	  }
  }

  this. tipOut = function () {
  	ToolTip.tip.style.visibility = 'hidden';
  }

  this.tipOver = function (e) {
  	ToolTip.obj = this;
	  ToolTip.ShowTip();
  }
	
	
  this.ShowTip = function () {
	  var Ttop,Tleft,ClientWidth,ClientHeight,ScrollTop;
    var TipWidth,TipHeight;

	  if (this.obj.getAttribute('tip').length == 0) {
	    return;
	  }	
	  Tleft = findPosX(this.obj);  // offsetLeft;
	  Ttop = findPosY(this.obj);  //offsetTop;
    TipWidth = this.tip.offsetWidth;
    TipHeight = this.tip.offsetHeight;
	  if (self.innerHeight) { // all except Explorer
  	  ClientWidth = self.innerWidth;
	    ClientHeight = self.innerHeight;
		  ScrollTop = self.scrollTop;
    }
    else if (document.documentElement && document.documentElement.clientHeight) {	// Explorer 6 Strict Mode
  	  ClientWidth = document.documentElement.clientWidth;
	    ClientHeight = document.documentElement.clientHeight;
		  ScrollTop = document.documentElement.scrollTop;
    }
    else if (document.body) { // other Explorers
  	  ClientWidth = document.body.clientWidth;
	    ClientHeight = document.body.clientHeight;
		  ScrollTop = document.body.scrollTop;
    }
	  this.tip.innerHTML = '<div>'+this.obj.getAttribute('tip')+'</div>'; 
    Ttop = Ttop - (TipHeight + 5);	
    if ((Tleft + TipWidth) > ClientWidth) Tleft = ClientWidth - TipWidth;
    if (Tleft < 1) Tleft = 1;
	  if (Ttop < 1) Ttop = 1;
    if (Ttop < ScrollTop) Ttop = ScrollTop + (TipHeight + 5);
	  this.tip.style.left = Tleft+'px';
	  this.tip.style.top = Ttop+'px';
	  this.tip.style.visibility = 'visible';
  }
}


// ------------------------------------
// Create wrapper functions
// ------------------------------------

function pageLoader() {
	ToolTip.init();
}
function pageFlusher() {
	EventCache.flush();
}

// ------------------------------------
// Create the objects
// ------------------------------------
var EventCache = new EventCacheObj();
var ToolTip = new ToolTipObj();

addEvent(window,'load',pageLoader);
addEvent(window,'unload',pageFlusher);
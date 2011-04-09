import com.flashlib.util.Delegate;

import de.marcreichelt.emff.EMFF;
import de.marcreichelt.emff.Track;

import de.marcreichelt.emff.configuration.ConfigurationFlashVars;



class Skin {
	
	private static var skin : Skin = null;
	
	private var emff : EMFF = null;
	
	private var previousMC : MovieClip = null;
	private var playMC : MovieClip = null;
	private var pauseMC : MovieClip = null;
	private var stopMC : MovieClip = null;
	private var nextMC : MovieClip = null;
	private var loadprogressMC : MovieClip = null;
	private var playprogressMC : MovieClip = null;
	private var volumeMC : MovieClip = null;
	private var textField : TextField = null;
	
	private var draggingPosition : Boolean = false;
	private var draggingVolume : Boolean = false;
	
	
	/**
	 * Main method that simply creates a new skin.
	 */
	public static function main() : Void {
		skin = new Skin();
	}
	
	/**
	 * Initialization of this skin.
	 */
	private function Skin() {
		// read configuration and create new player
		emff = new EMFF( new ConfigurationFlashVars() );
		
		// save
		previousMC = _root.previousMC;
		playMC = _root.playMC;
		pauseMC = _root.pauseMC;
		stopMC = _root.stopMC;
		nextMC = _root.nextMC;
		loadprogressMC = _root.loadprogressMC;
		playprogressMC = _root.playprogressMC;
		volumeMC = _root.volumeMC;
		
		// create text field
		_root.createTextField("textField", _root.foregroundMC.getDepth() - 1, 5, -1, 0, 0);
		textField = _root.textField;
		textField.autoSize = true;
		textField.selectable = false;
		
		var textFormat : TextFormat = new TextFormat();
		textFormat.color = 0xffffff;
		textFormat.font = "emffFont";
		textFormat.size = 10;
		textField.setNewTextFormat(textFormat);
		
		var emff : EMFF = this.emff;
		var textField : TextField = this.textField;
		
		// set actions
		previousMC.onRelease = function() {
			textField.text = "";
			textField._x = 0;
			emff.previous();
		};
		playMC.onRelease = Delegate.create(emff, emff.play);
		pauseMC.onRelease = Delegate.create(emff, emff.pause);
		stopMC.onRelease = Delegate.create(emff, emff.stop);
		nextMC.onRelease = function() {
			textField.text = "";
			textField._x = 0;
			emff.next();
		};
		
		// init width of progress bars and draggers
		volumeMC._x = 129 + Math.round(emff.getVolume() / 100 * 47);
		playprogressMC._x = 10;
		playprogressMC._visible = false;
		
		playprogressMC.onPress = Delegate.create(this, pressPlayprogressMC);
		playprogressMC.onRelease = Delegate.create(this, releasePlayprogressMC);
		playprogressMC.onReleaseOutside = playprogressMC.onRelease;
		volumeMC.onPress = Delegate.create(this, pressVolumeMC);
		volumeMC.onRelease = Delegate.create(this, releaseVolumeMC);
		
		_root.onEnterFrame = Delegate.create(this, enterFrame);
	}
	
	
	
	private function pressPlayprogressMC() : Void {
		draggingPosition = true;
		emff.pause();
		playprogressMC.startDrag(false, 10, 21, 161, 21);
	}
	
	private function releasePlayprogressMC() : Void {
		draggingPosition = false;
		playprogressMC.stopDrag();
		var selected : Number = (playprogressMC._x - 10) / 151;
		if (selected > emff.getLoadingProgress()) {
			// we can not select more than what is loaded yet
			selected = emff.getLoadingProgress();
		}
		emff.setRelativePosition(selected);
		emff.play();
	}
	
	private function pressVolumeMC() : Void {
		draggingVolume = true;
		volumeMC.startDrag(false, 129, 37, 176, 37);
	}
	
	private function releaseVolumeMC() : Void {
		draggingVolume = false;
		volumeMC.stopDrag();
	}
	
	/**
	 * Method that is activated every frame and will refresh the visualisation.
	 */
	private function enterFrame() : Void {
		if (emff.getStatus() == EMFF.STOPPED) {
			playprogressMC._visible = false;
		} else {
			playprogressMC._visible = true;
		}
		
		loadprogressMC._width = (1 - emff.getLoadingProgress()) * 178;
		loadprogressMC._x = 11 + 178 - loadprogressMC._width;
		
		if (!draggingPosition) {
			playprogressMC._x = Math.round(10 + emff.getPlayingProgress() * 151);
		}
		
		if (draggingVolume) {
			emff.setVolume(Math.round((volumeMC._x - 129) / 47 * 100));
		}
		
		var track : Track = emff.getActiveTrack();
		textField._width = 0;
		
		if (track != null) {
			if (track.getCreator() == "" && track.getTitle() == "") {
				textField.text = "";
			} else if (track.getCreator() != "" && track.getTitle() == "") {
				textField.text = track.getCreator();
			} else if (track.getCreator() == "" && track.getTitle() != "") {
				textField.text = track.getTitle();
			} else {
				textField.text = track.getCreator() + " - " + track.getTitle();
			}
		} else {
			textField.text = "";
		}
		
		if (textField._width < 180) {
			// static title
			
			textField._x = 5;
		} else {
			// dynamic title
			
			textField._x--;
			
			// left side
			if (textField._x + textField._width < 3) {
				textField._x = 200;
			}
		}
	}
	
}

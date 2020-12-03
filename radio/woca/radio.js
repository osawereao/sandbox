function TogglePlayer() {
	$("#WOCARadioPlayer").toggle(500);
	var Img = document.getElementById("MediaControlToggle");
	var Icon = Img.getAttribute("src");
	if(Icon == 'woca/radio-close.png'){Img.setAttribute("src", "woca/radio-open.png");}
	if(Icon == 'woca/radio-open.png'){Img.setAttribute("src", "woca/radio-close.png");}
	return false;
}

function PlayerControl(action){
	var MediaPlayer = document.getElementById("RadioPlayer");
	var PlayPauseBtn = document.getElementById("PlayPauseBtn");
	var StopBtn = document.getElementById("StopBtn");
	var WaveBtn = document.getElementById("WaveBtn");
	var MediaPlayerStatus = document.getElementById("MediaPlayerStatus");
	var MediaPlayerStatusPrev = document.getElementById("MediaPlayerStatusPrev");

	var PlayPauseImg = PlayPauseBtn.getAttribute("src");
	var WaveImg = WaveBtn.getAttribute("src");

	if(action == 'mute'){
		// mute music
		if(MediaPlayerStatus.value == 'playing'){
			WaveBtn.setAttribute("src", "woca/wave-mute.png");
			MediaPlayer.volume = 0;
			MediaPlayerStatus.value = "pause";
			MediaPlayerStatusPrev.value = "playing";
			// MediaPlayer.pause();
		}
		else {
			if(MediaPlayerStatusPrev.value == 'playing'){
				WaveBtn.setAttribute("src", "woca/wave-mute.png");
				MediaPlayer.volume = 1;
			}

		}
	}

		// if(MediaPlayerStatus.value == 'playing'){
		// }



		return false;
	}
function PlayerControl(action){
	var AOPlayer = document.getElementById("player");

	var PlayPause = document.getElementById("PlayPauseIcon");
	var PlayPauseIcon = PlayPause.getAttribute("src");

	var WaveImg = document.getElementById("WaveIcon");
	var WaveIcon = WaveImg.getAttribute("src");

	if(action == 'playpause'){
		if(PlayPauseIcon == 'radioplay.png'){
			AOPlayer.play();
			PlayPause.setAttribute("src", "radiopause.png");
			WaveImg.setAttribute("src", "radiowave.gif");
			AOPlayer.volume = 1;
		}
		else if(PlayPauseIcon == 'radiopause.png'){
			AOPlayer.pause();
			PlayPause.setAttribute("src", "radioplay.png");
			WaveImg.setAttribute("src", "radiowave.png");
		}
	}

	if(action == 'stop'){
		AOPlayer.pause();
		AOPlayer.currentTime = 0;
		AOPlayer.volume = 1;
		PlayPause.setAttribute("src", "radioplay.png");
		WaveImg.setAttribute("src", "radiowave.png");
	}


	if(action == 'mute'){
		if(WaveIcon != 'wavemute.png'){
			AOPlayer.volume = 0;
			WaveImg.setAttribute("src", "wavemute.png");
		}
		else {
			AOPlayer.volume = 1;
			if(PlayPauseIcon == 'radioplay.png'){
				WaveImg.setAttribute("src", "radiowave.png");
			}
			else {
				WaveImg.setAttribute("src", "radiowave.gif");
			}
		}
	}
	return false;
}
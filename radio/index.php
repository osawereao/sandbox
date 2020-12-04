<?php $ver = mt_rand();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>WOCA Radio</title>
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>
	<style>body {margin: 0; background: #000;}</style>
	<link href="woca/radio.css?version=<?php echo $ver;?>" type="text/css" rel="stylesheet">
	<script src="woca/jquery.js?version=<?php echo $ver;?>"></script>
</head>
<body>
	<div id="WOCARadio">
		<div id="WOCARadioPlayer">
			<span id="RadioStatus">Playing...</span>
			<video preload="auto" autoplay id="RadioPlayer" data-playlist="https://api.radioking.io/radio/379069/listen.m3u"></video>
			<div id="MediaControlBar">
				<img src="woca/pause.png" class="MediaControlBtn" id="PlayPauseBtn" onclick="PlayerControl('playpause'); return false;">
				<img src="woca/stop.png" class="MediaControlBtn" id="StopBtn" onclick="PlayerControl('stop'); return false;">
				<img src="woca/wave.gif" class="MediaControlIndicator" id="WaveBtn" onclick="PlayerControl('mute'); return false;">
			</div>
		</div>
		<img src="woca/radio-close.png" id="MediaControlToggle" onclick="TogglePlayer(); return false;">
		<!-- <input name="MediaPlayerStatusPrev" id="MediaPlayerStatusPrev" value="playing" type="hidden"> -->
		<input name="MediaPlayerStatus" id="MediaPlayerStatus" value="play" type="hidden">
		<input name="MediaPlayerControlPlayPauseStop" id="MediaPlayerControlPlayPauseStop" value="play" type="hidden">
		<input name="MediaPlayerControlMute" id="MediaPlayerControlMute" value="off" type="hidden">
		<input name="MediaPlayerControlVolume" id="MediaPlayerControlVolume" value="1" type="hidden">
	</div>

	<script src="woca/stream.js?version=<?php echo $ver;?>"></script>
	<script>m3uStreamPlayer.init({selector: '#RadioPlayer', debug: true});</script>
	<script src="woca/radio.js?version=<?php echo $ver;?>"></script>
</body>
</html>
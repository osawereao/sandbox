<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Radio</title>
	<link href="" type="text/css" rel="stylesheet" media="all">
	<style>
		body {background: #000; color:#FFF;}
		#AOMediaPlayer {
			background-color: #FFF;
			background-image: url('radiobg.png');
			/*background-image: url('radiobanner.jpg');*/
			background-position: top center;
			background-repeat: no-repeat;
			background-size: 114px;
			min-height: 200px;
			max-width: 144px;
			overflow: hidden;
			border: 1px solid #FFF;
			position: relative;
		}

		#AOMediaPlayer #PlayerControl {
			position: absolute;
			bottom: 0;
			background: #000;
			/*background: gold;*/
			width: 100%;
			padding: 5px 5px 1px 2px;
			font-size: 0.9em;
		}

		#AOMediaPlayer #PlayerControl img {
			cursor: pointer;
		}

		.radiocontrolbtn {
			height: 24px;
			width: 24px;
			padding: 2px 4px;
		}
		.radiocontrolwave {
			height: 24px;
			width: 90px;
			padding: 2px;
			margin-right: -40px;
		}
	</style>
</head>
<body>

	<div id="AOMediaPlayer">
		<video id="player" data-playlist="https://api.radioking.io/radio/379069/listen.m3u"></video>
		<div id="PlayerControl">
			<img src="radioplay.png" class="radiocontrolbtn" id="PlayPauseIcon" onclick="PlayerControl('playpause'); return false;">
			<img src="radiostop.png" class="radiocontrolbtn" onclick="PlayerControl('stop'); return false;">
			<img src="radiowave.png" class="radiocontrolwave" id="WaveIcon" onclick="PlayerControl('mute'); return false;">
		</div>
	</div>

	<script src="m3uStreamPlayer.js"></script>
	<script>m3uStreamPlayer.init({selector: '#player', debug: true});</script>
	<script src="aoplayer.js"></script>
</body>
</html>
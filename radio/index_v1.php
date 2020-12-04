<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Radio</title>
	<link href="aoplayer.css" type="text/css" rel="stylesheet" media="all">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>




	<div id="AOMediaBox">
		<img src="radioicon.png" class="radiobtn" id="radiobtn">
		<div id="AOMediaPlayer">
			<video autoplay id="player" data-playlist="https://api.radioking.io/radio/379069/listen.m3u"></video>
			<div id="PlayerControl">
				<img src="radiopause.png" class="radiocontrolbtn" id="PlayPauseIcon" onclick="PlayerControl('playpause'); return false;">
				<img src="radiostop.png" class="radiocontrolbtn" onclick="PlayerControl('stop'); return false;">
				<img src="radiowave.gif" class="radiocontrolwave" id="WaveIcon" onclick="PlayerControl('mute'); return false;">
			</div>
		</div>
	</div>

	<script src="m3uStreamPlayer.js"></script>
	<script>m3uStreamPlayer.init({selector: '#player', debug: true});</script>
	<script src="aoplayer.js"></script>
	<script>
		$(document).ready(function(){
			$("#AOMediaPlayer").hide();
			$("#radiobtn").click(function(){
				$("#AOMediaPlayer").toggle(300);
			});
		});
	</script>
</body>
</html>
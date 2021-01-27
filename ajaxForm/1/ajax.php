	<?php
// echo '<pre>'.var_export($_REQUEST, true).'</pre>'; // http_response_code(404);
	http_response_code(200);
	echo "Thank You! Your message has been sent.";
	?>
	<script>
		jsHideReligionAO();
		setTimeout(function(){
			window.location.replace("./");
		}, 3000);
	</script>

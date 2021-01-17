<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>AO Form</title>
	<style>
		#error {color: red; font-size: 0.9em;}
	</style>
	<script src="jquery.js"></script>
</head>
<body>
	<form action="" name="signup" id="signup">
		<!-- <p>No Space: <input type="text" id="nospace" name="nospace" onkeypress="validate_nospace('#nospace', '#errornospace');"></p> -->
		<input type="text" id="input1" onKeyPress="validate_nospace();" />
		<p>Error: <span id="error"></span></p>
	</form>
	<script>
	 // 	function validate_nospace(element_id_class, error_id_class, error_msg='No space allowed'){
		// 	$(element_id_class).on('keypress', function(e){
		// 		if (e.which == 32){
		// 			$(error_id_class).text(error_msg);
		// 			return false;
		// 		}
		// 	});
		// }
		// $(function() {
		// 	$('#input1').on('keypress', function(e) {
		// 		if (e.which == 32){
		// 			$('#error').text('Space Detected');
		// 			return false;
		// 		}
		// 	});
		// });
		function validate_nospace(event){
			// $('#error').fadeIn(10);
			// $('#error').text('');
			// $('#input1').on('keypress', function(e){

			// 	if(isCapsLock(e)){
			// 		$('#error').text('No uppercase allowed');
			// 		$('#error').fadeOut(3000);
			// 		return false;
			// 	}
			// 	else if (e.which == 32){
				$('#error').text('No space allowed');
				var source = this.attr('value');
				alert(source);
			// 		$('#error').fadeOut(3000);
			// 		return false;
			// 	}

			// 	return true;
			// });
		}
		function isCapsLock(e){
			e = (e) ? e : window.event;
			var charCode = false;
			if (e.which) {
				charCode = e.which;
			} else if (e.keyCode) {
				charCode = e.keyCode;
			}
			var shifton = false;
			if (e.shiftKey) {
				shifton = e.shiftKey;
			} else if (e.modifiers) {
				shifton = !!(e.modifiers & 4);
			}
			if (charCode >= 97 && charCode <= 122 && shifton) {
				return true;
			}
			if (charCode >= 65 && charCode <= 90 && !shifton) {
				return true;
			}
			return false;
		}
	</script>
</body>
</html>
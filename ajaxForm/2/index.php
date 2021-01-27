<!doctype html>
<html>
<head>
	<script src="jquery.js"></script>
</head>
<body>
	<form id="loginform" method="post">
		<div>
			Username:
			<input type="text" name="username" id="username" />
			Password:
			<input type="password" name="password" id="password" />
			<input type="submit" name="loginBtn" id="loginBtn" value="Login" />
		</div>
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#loginform').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: 'login.php',
					data: $(this).serialize(),
					success: function(response)
					{
						var respData = JSON.parse(response);

                // // user is logged in successfully in the back-end
                // // let's redirect
                if (respData.success == "1")
                {
                	// location.href = 'my_profile.php';
                	alert(respData.username);

                }
                else
                {
                	alert('Invalid Credentials!');
                }

                // alert(response);
              },

              error: function() {
              	alert('There was some error performing the AJAX call!');
              }
            });
			});
		});
	</script>
</body>
</html>
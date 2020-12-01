<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Infinite Scroll</title>
	<link href="ui.css" type="text/css" rel="stylesheet" media="all">
	<script src="jquery.js" type="text/javascript"></script>
	<script>
		//Infinite scroll
		$(window).on("scroll", function() {
			var scrollHeight = $(document).height();
			var scrollPos = $(window).height() + $(window).scrollTop();
			// if ((scrollHeight - scrollPos) / scrollHeight == 0) {
				if(((scrollHeight - 100) >= scrollPos) / scrollHeight == 0) {
				// $('.load-more-days-button').click();
				alert('Bottom Gotten');
				console.log("bottom!");
			}
		});
	</script>
</head>
<body>

	<div class="first">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet diam sed elit suscipit bibendum. Cras commodo finibus magna quis cursus. Sed dui risus, condimentum sit amet metus eget, sagittis bibendum est. Vestibulum dignissim lacus nisl, eget faucibus dui dapibus quis. Morbi ultrices porttitor enim eget convallis. Integer elementum odio sit amet augue tincidunt pellentesque sed vel risus. Aliquam tincidunt, mauris ac placerat egestas, orci metus auctor metus, ut pulvinar orci odio id elit. Aliquam erat volutpat. Nulla vehicula tincidunt odio. Nam ut malesuada tortor, ac pulvinar magna. Mauris nunc sem, congue quis pellentesque a, tempus eget ante.</p>

		<p>Praesent et purus laoreet, dapibus mauris quis, tincidunt urna. Donec ornare ligula id porta porttitor. Sed ac condimentum tellus. Praesent placerat, erat vitae mattis dapibus, purus ligula volutpat sem, quis sagittis massa arcu in nulla. Vivamus at neque non urna porta laoreet at sit amet sapien. Nullam viverra sagittis congue. Vivamus vitae lacus non risus cursus congue. Nunc volutpat, lacus id malesuada euismod, quam nisl scelerisque nisl, vel gravida dolor eros eget turpis. Vestibulum iaculis, nibh pretium mattis viverra, tellus magna ultrices velit, id posuere arcu ipsum sed lorem. Phasellus eu libero vel orci volutpat euismod. Etiam suscipit ante sed libero dapibus, at vehicula purus finibus. Mauris turpis libero, eleifend ut libero sed, maximus condimentum ipsum. Ut in facilisis odio. Aenean malesuada sapien imperdiet lacus sagittis maximus. Nulla libero lectus, mattis vitae iaculis non, malesuada ac neque. Duis dignissim nec diam a imperdiet.</p>

		<p>Morbi tincidunt aliquet tortor eget condimentum. Proin vitae efficitur tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id vulputate massa. In ante quam, bibendum non lorem et, laoreet pellentesque nunc. Vestibulum eget tincidunt lacus. Donec dictum convallis tortor nec finibus. Sed rutrum tempor sapien, eget congue massa varius ac. Pellentesque leo ipsum, gravida ut consectetur non, sollicitudin ac dolor. Nulla auctor, ligula et egestas tristique, libero urna rutrum risus, id commodo neque erat quis ex. Ut tristique metus ac sapien sollicitudin, vel cursus metus venenatis. Quisque vel auctor lorem.</p>

		<p>Aenean mattis imperdiet odio a accumsan. Sed id purus varius, placerat tortor id, venenatis tortor. Quisque risus nulla, placerat sed orci non, tempor efficitur sem. Nunc ac augue placerat, feugiat sem sit amet, semper risus. Duis rutrum purus in velit mattis, et fermentum nisi hendrerit. Aenean ut facilisis massa, in laoreet urna. Nulla viverra, felis sed lacinia sagittis, sem sapien interdum lorem, ac consectetur velit ipsum id augue. Vivamus hendrerit sagittis euismod. Fusce nec aliquet dolor. Etiam imperdiet feugiat elit, vitae imperdiet quam pharetra in. Curabitur tincidunt semper sapien, quis suscipit ante vulputate in. Curabitur nunc turpis, rhoncus venenatis ligula id, ultrices fermentum mi. Duis nulla lacus, feugiat ac tortor vulputate, posuere pulvinar erat. Vivamus eu ultrices odio. Phasellus luctus cursus ante quis aliquam.</p>

		<p>Cras egestas ornare tempus. Suspendisse vehicula efficitur quam, et bibendum leo malesuada eget. Cras eget iaculis nunc, tristique suscipit nunc. Praesent lacus augue, sagittis vitae tempor in, eleifend et sapien. Nunc et scelerisque ex. Morbi sed diam eleifend, fringilla dolor sit amet, interdum lacus. Nulla vel felis id arcu bibendum consectetur. Ut iaculis, purus vel fringilla venenatis, diam urna suscipit massa, eu dignissim augue diam non mauris. Aenean pellentesque, sapien sed congue ultricies, nisl dui rutrum metus, eget laoreet augue turpis a tortor. Cras in ex vulputate velit dapibus rhoncus vitae quis est.</p>
	</div>

	<div class="second">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet diam sed elit suscipit bibendum. Cras commodo finibus magna quis cursus. Sed dui risus, condimentum sit amet metus eget, sagittis bibendum est. Vestibulum dignissim lacus nisl, eget faucibus dui dapibus quis. Morbi ultrices porttitor enim eget convallis. Integer elementum odio sit amet augue tincidunt pellentesque sed vel risus. Aliquam tincidunt, mauris ac placerat egestas, orci metus auctor metus, ut pulvinar orci odio id elit. Aliquam erat volutpat. Nulla vehicula tincidunt odio. Nam ut malesuada tortor, ac pulvinar magna. Mauris nunc sem, congue quis pellentesque a, tempus eget ante.</p>

		<p>Praesent et purus laoreet, dapibus mauris quis, tincidunt urna. Donec ornare ligula id porta porttitor. Sed ac condimentum tellus. Praesent placerat, erat vitae mattis dapibus, purus ligula volutpat sem, quis sagittis massa arcu in nulla. Vivamus at neque non urna porta laoreet at sit amet sapien. Nullam viverra sagittis congue. Vivamus vitae lacus non risus cursus congue. Nunc volutpat, lacus id malesuada euismod, quam nisl scelerisque nisl, vel gravida dolor eros eget turpis. Vestibulum iaculis, nibh pretium mattis viverra, tellus magna ultrices velit, id posuere arcu ipsum sed lorem. Phasellus eu libero vel orci volutpat euismod. Etiam suscipit ante sed libero dapibus, at vehicula purus finibus. Mauris turpis libero, eleifend ut libero sed, maximus condimentum ipsum. Ut in facilisis odio. Aenean malesuada sapien imperdiet lacus sagittis maximus. Nulla libero lectus, mattis vitae iaculis non, malesuada ac neque. Duis dignissim nec diam a imperdiet.</p>

		<p>Morbi tincidunt aliquet tortor eget condimentum. Proin vitae efficitur tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id vulputate massa. In ante quam, bibendum non lorem et, laoreet pellentesque nunc. Vestibulum eget tincidunt lacus. Donec dictum convallis tortor nec finibus. Sed rutrum tempor sapien, eget congue massa varius ac. Pellentesque leo ipsum, gravida ut consectetur non, sollicitudin ac dolor. Nulla auctor, ligula et egestas tristique, libero urna rutrum risus, id commodo neque erat quis ex. Ut tristique metus ac sapien sollicitudin, vel cursus metus venenatis. Quisque vel auctor lorem.</p>

		<p>Aenean mattis imperdiet odio a accumsan. Sed id purus varius, placerat tortor id, venenatis tortor. Quisque risus nulla, placerat sed orci non, tempor efficitur sem. Nunc ac augue placerat, feugiat sem sit amet, semper risus. Duis rutrum purus in velit mattis, et fermentum nisi hendrerit. Aenean ut facilisis massa, in laoreet urna. Nulla viverra, felis sed lacinia sagittis, sem sapien interdum lorem, ac consectetur velit ipsum id augue. Vivamus hendrerit sagittis euismod. Fusce nec aliquet dolor. Etiam imperdiet feugiat elit, vitae imperdiet quam pharetra in. Curabitur tincidunt semper sapien, quis suscipit ante vulputate in. Curabitur nunc turpis, rhoncus venenatis ligula id, ultrices fermentum mi. Duis nulla lacus, feugiat ac tortor vulputate, posuere pulvinar erat. Vivamus eu ultrices odio. Phasellus luctus cursus ante quis aliquam.</p>

		<p>	Cras egestas ornare tempus. Suspendisse vehicula efficitur quam, et bibendum leo malesuada eget. Cras eget iaculis nunc, tristique suscipit nunc. Praesent lacus augue, sagittis vitae tempor in, eleifend et sapien. Nunc et scelerisque ex. Morbi sed diam eleifend, fringilla dolor sit amet, interdum lacus. Nulla vel felis id arcu bibendum consectetur. Ut iaculis, purus vel fringilla venenatis, diam urna suscipit massa, eu dignissim augue diam non mauris. Aenean pellentesque, sapien sed congue ultricies, nisl dui rutrum metus, eget laoreet augue turpis a tortor. Cras in ex vulputate velit dapibus rhoncus vitae quis est.</p>
	</div>


</body>
</html>
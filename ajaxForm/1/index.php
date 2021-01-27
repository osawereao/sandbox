<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>AJAX Form</title>
	<link rel="stylesheet" href="form.css">
	<script src="jquery.js"></script>
</head>
<body>



	<div class="container">
		<div class="row">
			<p>
				<a href="./">HOME</a> <br>
				I am ...
				<a href="javascript:void(0)" onclick="jsShowReligionAO('catholic');">Catholic</a> •
				<a href="javascript:void(0)" onclick="jsShowReligionAO('pentecostal');">Pentecostal</a> •
				<a href="javascript:void(0)" onclick="jsShowReligionAO('muslim');">Muslim</a> •
				<a href="javascript:void(0)" onclick="jsShowReligionAO('other');">Other</a>
			</p>
		</div>


		<div class="row results">
			<strong>RESULT: </strong>&nbsp;
			<span id="results"></span>
		</div>

















		<div id="OtherReligionDiv" class="formSection">
			<form id="OtherReligion" action="./" method="get">
				<input id="other_religion" name="other_religion" type="text" class="form-control">
				<br><span>Enter the name of your religion</span>
				<div class="text-center">
					<button type="submit" class="btn btn-main btn-mat btn-mat-raised disable_btn" id="update_other_religion" onclick="jsUpdateReligionAO('OtherReligion', 'other');">Save</button>

					<!-- <a href="javascript:void(0)" onclick="jsUpdateReligionAO('OtherReligion', 'other');">SEND FORM</a> -->
				</div>
			</form>
		</div>















		<div id="MuslimReligionDiv">
			<form id="MuslimReligion" action="">

				<label class="ao-form-label">What sect of Islam do you belong to?</label>
				<div class="row mb-15">
					<div class="col-md-3">
						<div class="round-check">
							<input type="radio" name="religion_muslim" id="religion_muslim_sunni" value="MUSL_SUNN">
							<label for="religion_muslim_sunni">Sunni</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="round-check">
							<input type="radio" name="religion_muslim" id="religion_muslim_shia" value="MUSL_SHIA">
							<label for="religion_muslim_shia">Shia</label>
						</div>
					</div>
				</div>

			</form>
		</div>



	</div>


	<script src="form.js"></script>
	<script>
		jsHideReligionAO();

	</script>
</body>
</html>
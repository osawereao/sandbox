<?php
function SplitCash($income, $project){
	#setup & computation
	$earning = ($income - $project);
	$o['income'] = $income;
	$o['project'] = $project;
	$o['earning'] = $earning;
	$o['savings'] = ($earning * 0.60);
	$o['utility'] = ($earning * 0.25);
	$o['expense'] = ($earning * 0.10);
	$o['miscellaneous'] = ($earning * 0.05);

	#format
	$i = array();
	foreach($o as $label => $value){
		$i[$label] = '₦'.number_format($value);
	}
	$num = (object)$i;
	return $num;
}


$income = 55000;
$project = 5000;
$disburse = SplitCash($income, $project);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>SplitCash</title>
	<style>
		.heading{display: inline-block; margin: 5px 0; text-transform: uppercase; font-weight: bold; font-size: 0.85em; border-bottom: 1px solid #000; text-decoration: underline;}
	</style>
</head>
<body>

	<p>
		Income: <?php echo $disburse->income;?> (<small><strong><?php echo $disburse->project;?></strong></small>)<br>
		Earning: <?php echo $disburse->earning;?><br><br>
		<span class="heading">Disburse</span><br>
		<?php echo $disburse->savings;?> — Savings • <small>KUDA</small><br>
		<?php echo $disburse->utility;?> — Utility • <small>ZENITH</small><br>
		<?php echo $disburse->expense;?> — Expense • <small>FIRST</small><br>
		<?php echo $disburse->miscellaneous;?> — Miscellaneous • <small>GTB</small><br>
	</p>

	<?php
	// foreach($disburse as $key => $value){
	// 	echo ucfirst($key).': '.$value.'<br>';
	// }
	?>

	<script src="" type="text/javascript"></script>
</body>
</html>
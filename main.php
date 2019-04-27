<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP7 Calendar & Date classes</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="icon" href="https://cdn3.iconfinder.com/data/icons/back-to-the-future/512/tower-256.png">
</head>
<body>
	
	<div>
		<p align="center"><img src="https://cdn3.iconfinder.com/data/icons/back-to-the-future/512/tower-128.png" alt="clock" title="The property of iconfinder.com"></p>
	</div>
	
	<div id="flex-container">
		<fieldset>
		<legend align='center'>Time measuring</legend>
			<form method="post">
				<p><input type="number" required="required" min="1" max="31" placeholder="Day" style="width: 100%;" name='form[day]'></p>
				<p><input type="number" required="required" min="1" max="12" placeholder="Month (01-12)" style="width: 100%;" name="form[month]"></p>
				<p><input type="number" required="required" min="1" max="3000" placeholder="Year" style="width:100%;" name="form[year]"></p>
				<p align="center"><button type="submit" name="form[submit]" id="get-result-button">Get a result</button></p>
			</form>
		</fieldset>
	</div>
	<?php 
	
	if(!empty($_POST)){
 	if(isset($_POST['form']['submit'])){
		
 		$d = $_REQUEST['form']['day']; 
 		$m = $_REQUEST['form']['month'];
 		$y = $_REQUEST['form']['year'];

 		$diff_date  = new DateTime($y."-".$m."-".$d." 00:00:00");
 		$now_date 	= new DateTime();
 		$difference = $now_date->diff($diff_date);

 		$summary = (($difference->format('%Y')*365)+($difference->format('%m')*31)+($difference->format('%d')));
 		$years   = round($summary/365);

		echo "<div style='display: flex; justify-content: center;padding: 10px;'><fieldset style='padding: 10px;'><legend align='center'>Information</legend>";
		echo "<p>It has already passed <span style='color: red;'><b>$summary </b></span> days or ≈<span style='color: red;'><b> $years</b></span> years. (Since ".$diff_date->format('d.m.Y').")</p>";
		echo "</fieldset></div>";
	}
	}
	?>	
</body>
</html>
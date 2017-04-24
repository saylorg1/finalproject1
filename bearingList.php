<?php

?>

<!DOCTYPE html>
<html lang = "en">
<link rel = "stylesheet" type = "text/css" href = "css/mystyle1.css">
<head>
<h2>How about some bearings!</h2>
<meta charset="utf-8">
<title>Bearing List</title>
</head>

<body>
<form action="shop.php" method="get">
	<p>Tell us some more information about the specifics of your needed bearing</p>
	<select name="System of Measurements">
		<option value="Standard">Standard</option>
		<option value="Metric">Metric</option>
	</select>
	<select>
		<option value=".3750">.3750</option>
		<option value=".5000">.5000</option>
		<option value=".4375">.4375</option>
		<option value=".5625">.5625</option>
		<option value=".6250">.6250</option>
		<option value="8.0000">8.0000</option>
		<option value="10.0000">10.0000</option>
		<option value="12.0000">12.0000</option>
		<option value="14.0000">14.0000</option>
		<option value="16.0000">16.0000</option>
	</select>
<input type="submit" value="Submit">
</form>

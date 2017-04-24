<?php
<form action="insert.php" method="post">
$username=$_POST['Username'];
$password=$_POST['Password'];
$email=$_POST['Email'];

 
//Execute the query
 
mysqli_query($connect(INSERT INTO login(Username,Password)
				VALUES('$username','$password')));
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<h1>Create a new login</h1>
</head> 
<body>
<form method = "post">
	<p><b>Please enter a username:</b><input type="text" name="username"/><br></p>
	<p><b>Please enter a password:</b><input type="password" name="password"/><br></p>
	<p><b>Please enter your email:</b><input type="text" name="email"/></p> 
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
</form>
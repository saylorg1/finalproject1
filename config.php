<?php

// Connecting to the MySQL database
$user = 'saylorg1';
$password = 'WrGfjvYa';

$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_spring17_saylorg1', $user, $password);
function my_autoloader($class){
include '/classes/class.' . $class . '.php';
}
include ('functions.php') ;
spl_autoload_register('my_autoloader');

session_start();

$current_url = basename($_SERVER['REQUEST_URI']);

if (!isset($_SESSION["customerID"]) && $current_url != 'login.php'){
	header("Location: login.php");
}

elseif(isset($_SESSION["customerID"])){
	$customer = new Customer($_SESSION["customerID"], $database);

}

	if (isset($_SESSION["cart"])){
		$cart = $_SESSION["cart"];
	}
	elseif (!isset($_SESSION["cart"])){
		$_SESSION["cart"] = new ShoppingCart();}
?>
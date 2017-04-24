<?php
class Customer {
	public $customerID;
	public $name;
	public $database;
		function __construct($customerID, $database){
			$sql = file_get_contents('sql/getCustomer.sql');
			$params = array(
				'customerid' => $_SESSION["customerID"]
		);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$customers = $statement->fetchAll(PDO::FETCH_ASSOC);
	$customer = $customers[0];
		$this->customerid = $customer['customerid'];
		$this->name = $customer['name'];
}
function get($key){
	return $this->$key;
}
}
?>
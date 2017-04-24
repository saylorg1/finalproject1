<?php

function searchBearings($term, $database) {
	// Get list of bearings
	$term = $term . '%';
	$sql = file_get_contents('sql/getBearing.sql');
	$params = array(
		'term' => $term
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$bearings = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $bearings;
}


function get($var){
	if (isset($_GET[$var])){
		return $_GET[$var];
	}
	else{ 
		return '';
	}
}
?>
	

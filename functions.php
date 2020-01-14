<?php 
include_once  "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}
function generateStatus($statusCode=0){
	$status = [
		'0' => "", 
		'1' => "Email or Password Empty", 
		'2' => "User doesn't exists" ,
		'3' => "Email and Password didn't match", 
		'4' => "User created successfully", 
		'5' => "Duplicate Email or Roll Number", 
		'6' => "1 column is updated successfully"  
	];	
	return $status[$statusCode];
}

function getStatusIdForAction($sessionId){
	global $connection;
	$query = "SELECT status FROM myclass where id='{$sessionId}' LIMIT 1";
	$val = mysqli_query($connection,$query);
	$value = '';
	while($data = mysqli_fetch_assoc($val)){
		$value = $data['status'];
	}
	return $value;

}

function getStatusIdForStatusField($id){
	global $connection;
	$query = "SELECT status FROM myclass where id='{$id}' LIMIT 1";
	$val = mysqli_query($connection,$query);
	while($data = mysqli_fetch_assoc($val)){
		$value = $data['status'];
	}
	return $value;
}



?>
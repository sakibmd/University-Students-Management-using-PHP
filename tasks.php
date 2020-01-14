<?php 
session_start();
$sessionActive = $_SESSION['id'] ?? '';
include_once "config.php";
$status = 0;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}
else{
	$action = $_POST['action'] ?? '';
	if(!$action){
		header('Location: index.php');
		die();
	}
	elseif ('register' == $action) {
		$name = $_POST['name'] ?? '';
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		$roll = $_POST['roll'] ?? '';
		$cgpa = $_POST['cgpa'] ?? '';
		$gender = $_POST['gender'] ?? '';
		if($email && $password){
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$query = "INSERT INTO myclass(name,email,password,roll,cgpa,gender) VALUES ('{$name}','{$email}','{$hash}','{$roll}','{$cgpa}','{$gender}')";
				mysqli_query($connection, $query);
				if(mysqli_error($connection)){
					$status = 5; //Duplicate Email
				}
				else{
					$status = 4; //created successfully
				}
		}
		else{
			$status =  1;  //username or password empty
		}
		header("Location: index.php?status={$status}");
	}
	else if('login' == $action){
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		if($email && $password){
			$query = "SELECT id,password FROM myclass WHERE email='{$email}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result)>0){
				$data = mysqli_fetch_assoc($result);
				$_password = $data['password'];
				$_userId = $data['id'];
				if(password_verify($password, $_password)){
					$_SESSION['id'] = $_userId;
					header("Location: home.php");
					die();
				}
				else{
					$status = 3; //userid & pass didn't match
				}
			}
			else{
				$status = 2;  //User doesn't exists
			}
		}
		else{
			$status =  1;  //username or password empty
		}
		header("Location: index.php?status={$status}");
	}

	elseif ( 'adminRequest' == $action ) {
			$adminReqId = $_POST['taskid'];
			//echo $adminReqId;
			if ( $adminReqId ) {
				$query = "UPDATE myclass SET status=2 WHERE id={$adminReqId} LIMIT 1";
				mysqli_query( $connection, $query );
			}
			header( 'Location: home.php' );
	}
	

	elseif ( 'memberRequest' == $action ) {
			$memberReqId = $_POST['taskid'];
			//echo $adminReqId;
			if ( $memberReqId ) {
				$query = "UPDATE myclass SET status=3 WHERE id={$memberReqId} LIMIT 1";
				mysqli_query( $connection, $query );
			}
			header( 'Location: home.php' );
	}

	elseif ( 'deleteRequest' == $action ) {
			$deleteId = $_POST['taskid'];
			//echo $adminReqId;
			if ( $deleteId ) {
				$query = "DELETE FROM myclass WHERE id={$deleteId} LIMIT 1";
				mysqli_query( $connection, $query );
			}
			header( 'Location: home.php' );
	}
	elseif ( 'editByAdmin' == $action ){
			$name = $_POST['name'] ?? '';
			$email = $_POST['email'] ?? '';
			$roll = $_POST['roll'] ?? '';
			$cgpa = $_POST['cgpa'] ?? '';
			$editReqId = $_POST['user-id'] ?? '';
			if ( $name && $email && $roll && $cgpa ) {
				$query = "UPDATE myclass SET name='$name', email='$email', roll='$roll', cgpa='$cgpa' WHERE id={$editReqId}";
				mysqli_query($connection, $query);
				if(mysqli_error($connection)){
					$status = 5; //Duplicate Email
					header("Location: edit.php?status={$status}&editid=$editReqId");
				}
				else{
					header("Location: home.php");
				}
			}
			//header("Location: home.php");
			
	}
}

 ?>
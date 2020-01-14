<?php 
session_start();
$sessionActive = $_SESSION['id'] ?? '';
if($sessionActive){
	header('Location: home.php');
	die();
}
include_once  "config.php";
include_once  "functions.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/design.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Student Management</title>
    <style type="text/css">
    	.card{
          background: black;
          background-color: rgba(0,0,0,.7);
          margin-top: 20px;
         
        }
        .radio-btn{
        	margin-left: 25px;
        }
    </style>
  </head>
  <body style="background-image: url('assets/img/img3.jpg');background-attachment: fixed;
	background-size: cover;">
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="about.php">About</a>
	  <a href="#" id="registration" >Registrarion</a>
	  <a href="#" id="login">Sign In</a>
	  <a href="#">Contact</a>
	</div>

	<br>
	<h2 style="text-align: center;font-weight: bold;color:#fff;font-family: 'Inconsolata';">This is a simple Student Management System</h2>
	<p style="text-align: center;color:#fff;">Click on the element below to open the side navigation menu.</p>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;color:#fff;" onclick="openNav()">&#9776; Menu</span>

	



	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-lg-4 col-sm-2 col-xs-2">
		
		</div>
		<div class="col-md-6 col-lg-4  col-sm-8 col-xs-8">
			<div class="card">
			  <!-- <div class="card-header">
			  	
			  </div> -->
			  <div class="card-body">
			  	<p style="font-weight: bold;text-align: center; font-size: 22px;color: white;">
							<?php
							 
								$status = $_GET['status'] ?? '';
								if($status){
									echo generateStatus($status);
								}
							
							 ?>
				</p>
				<form action="tasks.php" method="post" id="form01">
					<h2 style="color: white;font-weight: bold;">Login </h2>
					<hr style="background: #fff">

				  
				  <div class="input-group mb-3 hidden" style="display: none;">
				    <div class="input-group-prepend">
				    </div>
				    <input type="text" class="form-control" placeholder="Enter your name (lettersOnly)" name="name" onkeyup="lettersOnly(this)">
				  </div>

				  <div class="input-group mb-3">
				    <div class="input-group-prepend">
				    </div>
				    <input type="email" class="form-control" placeholder="Enter email"  name="email">
				  </div>

				  <div class="input-group mb-3">
					    <div class="input-group-prepend">
					    </div>
					    <input type="password" id="password" class="form-control" placeholder="Enter a Password"  name="password"> 
				  </div>

				  <div class="input-group mb-3 hidden" style="display: none;">
					    <div class="input-group-prepend">
					    </div>
					    <input type="number" class="form-control" placeholder="Enter your roll/id" name="roll" >
				  </div>

				  <div class="input-group mb-3 hidden" style="display: none;">
					    <div class="input-group-prepend">
					    </div>
					    <input type="number" step=0.01 class="form-control" placeholder="Enter your cgpa"  name="cgpa" >
				  </div>

				  <div class="form-group radio-btn hidden" style="display: none;">
			            <label class="form-check-label" for="radio1" style="color: white;display: inline-block;">
					        <input type="radio" class="form-check-input"  name="gender" value="Male"  >Male <br>
					        <input type="radio" class="form-check-input"  name="gender" value="Female"  >Female <br>
				      </label>
			     </div>

			     <input type="checkbox" onclick="passwordShowHideFunction()"> <p style="color: white;display: inline;"> Show Password</p>
				  >

			     <input type="submit" style="margin-top: 6px;"  name="submit"  value="Submit" class="btn btn-primary btn-block">
			     <input type="hidden" name="action" value="login" id="action">
				</form>


			  </div>
			  
			</div>
		</div>
		<div class="col-md-3 col-lg-4  col-sm-2 col-xs-2">
			
		</div>
	</div>
</div>


		

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}

		function lettersOnly(input) {
		    var regex = /[^a-z""]/gi;
		    input.value = input.value.replace(regex, "");
		}

		function passwordShowHideFunction() {
		  var x = document.getElementById("password");
		  if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
		} 
	</script>
  </body>
</html>
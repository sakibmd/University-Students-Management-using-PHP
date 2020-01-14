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
  </head>
  <body style="background-image: url('assets/img/img1.jpg');">
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="#">Contact</a>
	</div>

	<br>
	<h2 style="text-align: center;font-weight: bold;">This is a simple Student Management System</h2>
	<p style="text-align: center;">Click on the element below to open the side navigation menu.</p>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>

	<div class="container">
		<br>
  		<div class="row">
  			<div class="col-md-2"></div>
  			<div class="col-md-8" style="background: white;padding: 5px 25px 5px 25px;border-color: grey; border-radius: 45px 5px 45px 5px;box-shadow: 5px 5px 5px grey;">
  				<br>
  				<h2 style="text-align: center;">About Us</h2>
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  				<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  				<br>
  			</div>
  			<div class="col-md-2"></div>
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
	</script>
  </body>
</html>
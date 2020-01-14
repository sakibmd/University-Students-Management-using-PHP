<?php 
session_start();
$sessionActive = $_SESSION['id'] ?? '';
if(!$sessionActive){
	header('Location: index.php');
	die();
}
include_once  "config.php";
include_once  "functions.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}

$top5Cgpa = "SELECT name,cgpa,gender FROM myclass  ORDER BY cgpa DESC LIMIT 5";
$top5CgpaQuery = mysqli_query($connection, $top5Cgpa);

$maleList = "SELECT name,roll,cgpa,gender FROM myclass WHERE gender LIKE 'Male' ORDER BY roll";
$maleListQuery = mysqli_query($connection, $maleList);

$femaleList = "SELECT name,roll,cgpa,gender FROM myclass WHERE gender LIKE 'Female' ORDER BY roll";
$femaleListQuery = mysqli_query($connection, $femaleList);

$top5maleList = "SELECT name,roll,cgpa,gender FROM myclass WHERE gender LIKE 'Male' ORDER BY cgpa DESC LIMIT 5 ";
$top5maleListQuery = mysqli_query($connection, $top5maleList);

$top3femaleList = "SELECT name,roll,cgpa,gender FROM myclass WHERE gender LIKE 'Female' ORDER BY cgpa DESC LIMIT 3";
$top3femaleListQuery = mysqli_query($connection, $top3femaleList);
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

    <title>Student Management | Home</title>
    <style>
    	.record ul li {
			background: #000;
		}
		.record ul li:hover {
			background: grey;
		}
		.record ul li a {
			color: white;
			font-weight: bold;
			text-decoration: none;
		}
		.disabled {
		    pointer-events:none; //This makes it not clickable
		    opacity:0.6;         //This grays it out to look disabled
		}
    </style>
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="record.php">Records</a>
	  <a href="contact.php">Contact</a>
	  <a href="logout.php">Logout</a>
	</div>

	<br>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>
	
	<div class="container">
		<div class="row">
			<h1 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Some Information about out students</h1> 
		</div>
	</div>


	<div class="container" style="padding-bottom: 60px;">
		
	    <div class="row"> 
	 		<div class="col-md-8">
	 			<?php if(mysqli_num_rows($top5CgpaQuery)>0){ ?>
	 			<form class="helement" id="top5CgpaHolder">
	 				<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Top 5 CGPA holder</h2>
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Cgpa</th>
			        <th>Gender</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($data = mysqli_fetch_assoc($top5CgpaQuery)){ ?>
			      <tr>
			      		<td><?php echo $data['name']; ?></td>
			      		<td><?php echo $data['cgpa']; ?></td>
			      		<td><?php echo $data['gender']; ?></td>
			      </tr>
			  <?php } ?>
			    </tbody>
			  </table>
	 			</form>
	 		<?php } ?>



	 		


	 		<!-------------Start Male Student List------------------>
	 		<?php if(mysqli_num_rows($maleListQuery)>0){ ?>
	 			<form class="helement" id="maleList" style="display: none;">
	 				<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Male Student List</h2>
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Roll</th>
			        <th>Cgpa</th>
			        <th>Gender</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($mdata = mysqli_fetch_assoc($maleListQuery)){ ?>
			      <tr>
			      		<td><?php echo $mdata['name']; ?></td>
			      		<td><?php echo $mdata['roll']; ?></td>
			      		<td><?php echo $mdata['cgpa']; ?></td>
			      		<td><?php echo $mdata['gender']; ?></td>
			      </tr>
			  <?php } ?>
			    </tbody>
			  </table>
	 			</form>
	 		<?php } ?>
	 		<!---------------End Male Student List------------->

	 		

	 		<!-------------Start Female Student List------------------>
	 		<?php if(mysqli_num_rows($femaleListQuery)>0){ ?>
	 			<form class="helement" id="femaleList" style="display: none;">
	 				<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Female Student List</h2>
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Roll</th>
			        <th>Cgpa</th>
			        <th>Gender</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($data = mysqli_fetch_assoc($femaleListQuery)){ ?>
			      <tr>
			      		<td><?php echo $data['name']; ?></td>
			      		<td><?php echo $data['roll']; ?></td>
			      		<td><?php echo $data['cgpa']; ?></td>
			      		<td><?php echo $data['gender']; ?></td>
			      </tr>
			  <?php } ?>
			    </tbody>
			  </table>
	 			</form>
	 		<?php } ?>
	 		<!---------------End Female Student List------------->




	 		<!-------------Start Top 5 Male Student List------------------>
	 		<?php if(mysqli_num_rows($top5maleListQuery)>0){ ?>
	 			<form class="helement" id="top5Male" style="display: none;">
	 				<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Top 5 Male Student List</h2>
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Roll</th>
			        <th>Cgpa</th>
			        <th>Gender</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($data = mysqli_fetch_assoc($top5maleListQuery)){ ?>
			      <tr>
			      		<td><?php echo $data['name']; ?></td>
			      		<td><?php echo $data['roll']; ?></td>
			      		<td><?php echo $data['cgpa']; ?></td>
			      		<td><?php echo $data['gender']; ?></td>
			      </tr>
			  <?php } ?>
			    </tbody>
			  </table>
	 			</form>
	 		<?php } ?>
	 		<!---------------Start Top 5 Male Student List------------->



	 		

	 		<!-------------Start Top 3 Female Student List------------------>
	 		<?php if(mysqli_num_rows($top3femaleListQuery)>0){ ?>
	 			<form class="helement" id="top5Female" style="display: none;">
	 				<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Top 3 female Student List</h2>
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Roll</th>
			        <th>Cgpa</th>
			        <th>Gender</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($data = mysqli_fetch_assoc($top3femaleListQuery)){ ?>
			      <tr>
			      		<td><?php echo $data['name']; ?></td>
			      		<td><?php echo $data['roll']; ?></td>
			      		<td><?php echo $data['cgpa']; ?></td>
			      		<td><?php echo $data['gender']; ?></td>
			      </tr>
			  <?php } ?>
			    </tbody>
			  </table>
	 			</form>
	 		<?php } ?>
	 		<!---------------Start Top 3 Female Student List------------->


	 		</div>
	 		<div class="col-md-4 record">
			    		<ul class="list-group list-hover" style="margin-top: 100px;">
			    		<li  class="list-group-item disabled" style="background:  grey;color: white; "><a>Check Some records</a> </li>

    						<li data-target="top5CgpaHolder" class="list-group-item filter-items"><a href="#" class="" >Top 5 CGPA Holder</a> </li>

    						<li data-target="maleList" class="list-group-item filter-items"><a  href="#">Male Students List</a> </li>

    						<li data-target="femaleList" class="list-group-item filter-items"><a  href="#">Female Students List</a> </li>

    						<li data-target="top5Male" class="list-group-item filter-items"><a  href="#">Top 5 male students</a> </li>

    						<li data-target="top5Female" class="list-group-item filter-items"><a  href="#">Top 3 female students</a> </li>

 				 		</ul>
	 		 </div>
	    </div>	
	</div>	




<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="head">Contact</h3>
					<p><i class="fas fa-check"></i>House No 90, Housing Estate</p>
					<p><i class="fas fa-check"></i>+8801670605075</p>
					<p><i class="fas fa-check"></i>sakibmd.cse@gmail.com</p>
					<p><i class="fas fa-check"></i>github.com/sakibmd</p>

					</div>
			<div class="col-md-4">
				<h3 class="head">Recent News</h3>
				<p class="para">
					Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration. 
				</p>
				<p class="para">
					Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration. 
				</p>
			</div>
			<div class="col-md-4">
				<h3 class="head">Subscribe</h3>
				<p class="para">Get monthly updates and free resources.</p>
				<div class="text-center">
					<input type="text" class="form-control py-2 px-4" placeholder="Email">
				<button class="btn btn-default text-center">Subscribe</button>
				</div>
				
			</div>
		</div>
		<hr>
		<p class="credit text-center">Credit Goes To <strong>Shakib Mohammed</strong></p>
	</div>
</section>


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

		$(".filter-items").on('click', function () {
            $(".helement").hide();
            var target = "#"+ $(this).data("target");
            $(target).show();
        });
	</script>
  </body>
</html>
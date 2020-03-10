<!DOCTYPE html>
<?php 
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
			}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.sidenav {
		  width: 16%;
		  float:left;
		  margin-left:2%;
		  margin-top:2%;
		  margin-bottom:50px;
		  padding-bottom:20px;
		  background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);
		}
		.sidenav a {
		  padding-left: 15px;
		  padding-top:20px;
		  text-decoration: none;
		  font-size: 18px;
		  color: darkred;
		  display: block;
		}
		.sidenav a:hover {
		  color: green;
		  font-size: 20px;
		}
		.main {
		  margin-left:20%;
		  margin-top:2%;
		  margin-bottom:50px;
		  margin-right:5%;
		  background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%); 
		  width:75%;
		  height:100%;
		  padding:2%;
		}
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		h3, h2{
			color:darkred;
		}
	</style>
</head>
<body>
	<?php include("commonHeader.php"); ?>
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);height: 500px;">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px; margin:0;font-size:20px;padding-top:5px;">
			<span style="display: block;float:left;width:30%;margin-left:25px;color:maroon;">Main Menu</span>
		</div>
		<div		
			<div class="sidenav">
				<a href="mainmenu.php"  style="font-size:22px;font-weight: bold; color:red;">Main Menu</a>
				<a href="personal.php">Personal Details</a>
				<a href="reg_course.php">Register Courses</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php">Settings</a>
				<a href="help.php">Help</a>
				<a href="logout.php">Logout</a>

			</div>
			<div class="main">
				<div>
					<?php 
						$uname = $_POST['uname'];
						echo "<h2> Hello " .$uname. ",</h2>"
					?>
					<h3>Welcome to the Course Registration Portal of College University.</h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
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
		p, h2, a, h4 {
			color:darkred;
		}
	</style>
</head>
<body>
	<?php include("commonHeader.php"); ?>
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px; margin:0;font-size:20px;padding-top:5px;">
			<span style="display: block;float:left;width:30%;margin-left:25px;color:maroon;">Settings</span>
		</div>
		<div		
			<div class="sidenav">
				<a href="mainmenu.php">Main Menu</a>
				<a href="personal.php">Personal Details</a>
				<a href="reg_course.php">Register Courses</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php" style="font-size:22px;font-weight: bold; color:red;">Settings</a>
				<a href="help.php">Help</a>
				<a href="logout.php">Logout</a>

			</div>
			<div class="main">
				<div>
					<?php 
						$uname = $_POST['uname'];
						echo "<h2> Hello " .$uname. ",</h2><h4>You can update following settings:</h4>"
					?>
					<p>
						<form action="change_personal.php" method="POST">
							<button type="submit" class="btn" style="width:30%;height:30px;font-size:17px">Update Personal Details</button>
						</form>                        
					</p>
					<p>
						<form action="change_password.php" method="POST">
							<button type="submit" class="btn" style="width:30%;height:30px;font-size:17px">Reset Password</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
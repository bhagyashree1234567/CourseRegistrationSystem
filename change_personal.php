<!DOCTYPE html>
<?php 
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
			}
			if(isset($_SESSION["count"]))
			{
				$_POST["count"] = $_SESSION["count"];
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
		  padding-left: 10px;
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
		td, th, table{
			color:darkred;
		}
	</style>
</head>
<body>
	<?php include("commonHeader.php"); ?>
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:25px; margin:0;font-size:20px;padding-top:5px;">
			<span style="display: block;float:left;width:30%;margin-left:25px;color:maroon;"><a href="settings.php" style="text-decoration:none">Setting</a>&nbsp;&nbsp;>>&nbsp;&nbsp;<a style="text-decoration:none" href="change_personal.php">Update Personal Details</a></span>
		</div>
		<div		
			<div class="sidenav">
				<a>Quick Links</a>
				<a href="personal.php">Personal Details</a>
				<a href="course.html">Course Registration</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php" style="font-size:22px;font-weight: bold;">Settings</a>
				<a href="help.php">Help</a>
				<a href="logout.php">Logout</a>

			</div>
			<div class="main">
				<div class="container">
					<form method= "POST" action="personal_change_php.php"><!--php here-->
					  <table>
						<tr>
						<td>Phone Number: </td>
						<td></td>
						<td><input type="text" id="phonenumber" name="phonenumber">
						<td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
						<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
						<tr>
						  <td>Address Line 1: </td>
						  <td></td>
						  <td><input type="text" id="addressline1" name="addressline1">
						  <td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
						<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
						<tr>
						  <td>Address Line 2: </td>
						  <td></td>
						  <td><input type="text" id="addressline2" name="addressline2">
						  <td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>  
						<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
						<tr>
						  <td>City: </td>
						  <td></td>
						  <td><input type="text" id="city" name="city">
						  <td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
						<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
						<tr>
						  <td>Country: </td>
						  <td></td>
						  <td><input type="text" id="country" name="country">
						  <td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
						<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
						<tr>
						  <td>ZipCode: </td>
						  <td></td>
						  <td><input type="text" id="zipcode" name="zipcode">
						  <td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
					  </table>
					  <br><br>
					  <input type="submit" value="Update" style="width:130px;height:30px;font-size:17px">
					</form>  
				</div>
				<?php
					if(isset($_SESSION["count"]))
					{
					if($_POST["count"] == 1)
					{
						echo "<br><span style='color:darkgreen;'><b>Successfully updated.</b></span>";
						$_SESSION["count"] = 0;
					}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
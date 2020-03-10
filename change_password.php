<!DOCTYPE html>
<?php 
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
			}
			if(isset($_SESSION["msg1"]))
			{
				$_POST["msg1"]=$_SESSION["msg1"];
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
		p, h2,a ,h3,td{
			color:darkred;
		}
	</style>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</head>
<body>
	<?php include("commonHeader.php"); ?>
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px; margin:0;font-size:20px;padding-top:5px;">
			<span style="display: block;float:left;width:30%;margin-left:25px;color:maroon;"><a href="settings.php" style="text-decoration:none">Setting</a>&nbsp;&nbsp;>>&nbsp;&nbsp;<a style="text-decoration:none" href="change_password.php">Change Password</a></span>
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
				<div class="change_pass" id="myPass">
					<form action="reset_pw.php" method="POST">
					<h2>Change Password</h2><br>
					<table>
					  <tr>
						<td>Current Password: </td>
						<td><input type="password" placeholder="Enter Password" name="currentPassword" required id="un" size="15">
						<td><b style="color:red;font-size:14px;" id="un_error"></b></td>
					  </tr>
					  <tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
					  <tr><td></td><td></td><td></td></tr>
					  <tr>
						<td>New Password: </td>
						<td><input type="password" placeholder="Enter New Password" name="newPassword" required id="un" size="15">
						<td><b style="color:red;font-size:14px;" id="un_error"></b></td>
					  </tr>
					  <tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
					  <tr>
						<td>Repeat New Password: </td>
						<td><input type="password" placeholder="Enter New Password" name="confirmPassword" required id="un" size="15">
						<td><b style="color:red;font-size:14px;" id="un_error"></b></td>
					  </tr>
					  <tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
					</table>
					<br>
					<button type="submit" class="btn" style="width:130px;height:35px;font-size:15px">Change</button>
				  </form>
				  <?php
					if(isset($_SESSION["msg1"]))
					{
						echo $_POST["msg1"];
						$_SESSION["msg1"] = "";
					}
				  ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
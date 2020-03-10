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
		
</head>
<body>
	
	<?php include("commonHeader.php"); ?>
	
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);height: 500px;padding-top:0;">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:50px;">
			<h2 style="margin-left:25px;color:maroon;padding-top:10px;">Login Falied!!!</h2>
		</div>			
		
		<div >
			<?php

			$uname = $_POST["user"];
			$pwd = $_POST["passwd"];
			$_SESSION["uname"] = $uname;
			$con=mysqli_connect('localhost','root','','users');

			$selectquery="select * from Student_login where Username='$uname' and Password='$pwd'";
			$ResourceID = mysqli_query($con,$selectquery);

			if(mysqli_num_rows($ResourceID)){
				echo "Successful";
				header("location:mainmenu.php");
			}
			else {
				echo "<h4 style='margin:30px;color:white;'>The Entered Username or Password does not match</h4>";
				echo "<h4 style='margin:30px;color:white;'>Please Login again or Contact University administration department.</h4>";
				echo "<h4 style='margin:30px;color:white;'><a href='student_login.php'>Click Here To Login again</a></h4>";

			}
			?>
		</div>
	</div>
</body>
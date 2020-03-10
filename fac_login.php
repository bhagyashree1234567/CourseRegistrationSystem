<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		
		
	<style>
		td{
			width:150px;
			height:15px;
			padding-bottom:10px;
			margin-bottom:15px;
		}
		div#my{
			background:linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);
			height: 20px;
			color: darkred;
			margin: 0;
			font-family: verdana;
			font-size: 15px;
		}
		.fr1{
			border: 2px solid black;
			margin-top: 3%;
			margin-left:2%;
			display:inline-block;
			width: 43%;
			height:350px;
			padding: 15px;
			color: darkred;
			background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);
			vertical-align:top;
		} 
		.tr{
			margin-bottom:15px;
			
		}
	</style>
	<script>
		function validation()
		{
			if((document.getElementById("un").value=="") )
				{
					document.getElementById("un_error").innerHTML="Please enter a Username";
					document.getElementById("un").focus();
					return false;
				}	
				else
				{
					document.getElementById("un_error").innerHTML="";
				}	
			if((document.getElementById("pwd").value=="") )
				{
					document.getElementById("pwd_error").innerHTML="Please enter a password";
					document.getElementById("pwd").focus();
					return false;
				}	
				else if(document.getElementById("pwd").value.length<6)
				{
					document.getElementById("pwd_error").innerHTML="Enter valid password";
					document.getElementById("pwd").focus();
					return false;
				}
				else
				{
					document.getElementById("pwd_error").innerHTML="";
				}	
		}
		
	</script>
</head>
<body>
	
	<?php include("commonHeader.php"); ?>
	
	<div style="background-color: maroon;">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px;">
			<marquee style="padding:7px;">
				<b style="color:darkred;">Welcome to College University's Course Registration Portal. &nbsp;&nbsp; Important Fee Payment Deadline is 18 December 2019.</b>
			</marquee>
		</div>
	
		<center style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);height: 500px;">
		<div id="welcome_head" >
		
			
			<div id="main" class="fr1">
			<h1 class="title_text" >Faculty Account Authentication</h1></br>
				<form method="POST" action="login_faculty.php" onSubmit="return validation();">
					<table>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="user" id="un" size="15">
							<td><b style="color:red;font-size:14px;" id="un_error"></b></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="passwd" id="pwd" size="15"></td>
							<td><b style="color:red;" id="pwd_error"font-size:14px;"></b></td>
						</tr>
					</table>
					</br>
					<center><input style="width:130px;height:40px;font-size:20px" type="submit" value="Login" class="button"></center></br></br>
					<table style"margin-top:40px;">
						<tr>
							<td><a href="file:///C:/Users/RACHANA%20RAMESH/Desktop/SDSU/software%20engineering/se%20project/se%20implementation/forgot_pwd.html"> Can't Login??  </a></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><a href="./student_login.php">Are you a Student?</a></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
    </div>
</center>
	
</body>
</html>

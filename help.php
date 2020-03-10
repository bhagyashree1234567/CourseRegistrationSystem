<!DOCTYPE html>
<?php 
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
			}
?>
<?php
	$con=mysqli_connect('localhost','root','','users');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	table {
	  width:100%;

	}
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	  	  

	}
	th, td {
	  padding: 15px;
	  text-align: left;
	}
	table#t01 tr:nth-child(even) {
	  background-color: #eee;
	}
	table#t01 tr:nth-child(odd) {
	 background-color: #fff;
	}
	table#t01 th {
		background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);
		border:1px solid black;
		color: white;
	}
		h2{
		  color: darkred;
		}
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
		h4, p, h3{
			color:darkred;
			border:0px solid black;
		}
</style>
</head>
</head>
<body>
		<?php include("commonHeader.php"); ?>

	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px; margin:0;font-size:20px;padding-top:5px;">
			<span id="s1" style="display: block;float:left;width:30%;margin-left:25px;color:maroon;">Help</span>
		</div>
		<div		
			<div class="sidenav">
				<a href="mainmenu.php">Main Menu</a>
				<a href="personal.php" >Personal Details</a>
				<a href="reg_course.php" >Register Courses</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php">Settings</a>
				<a href="help.php" style="font-size:22px;font-weight: bold; color:red;">Help</a>
				<a href="logout.php">Logout</a>
			</div>
			
			
			<div class="main">
			
			
				  <table class="help">
						<h2>Personal Details</h2>
						<table id="t01">
    						<tr>
						<th>Questions</th>
						<th>Answers</th>
						</tr>
	<?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'Personal Details'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
	</table>
				<hr>
				  <table class="help" id="t01">
						<h2>Course Registration</h2>
						<tr>
						
						 
						<th>Questions</th>
						<th>Answers</th>
					  </tr>
	<?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'Course Registration'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
					  
					</table></br></br></br>
				<hr>
				  <table class="help" id="t01">
						<h2>Major Details</h2>
						<tr>
						
						 
						<th>Questions</th>
						<th>Answers</th>
					  </tr>
<?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'Major Details'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
					  
					</table></br></br></br>
				<hr>
				  <table class="help" id="t01">
						<h2>Faculty Details</h2>
						<tr>
						
						 
						<th>Questions</th>
						<th>Answers</th>
					  </tr>
					  <?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'Faculty Details'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
					</table></br></br></br>
				<hr>
				  <table class="help" id="t01">
						<h2>View Grades</h2>
						<tr>
						
						 
						<th>Questions</th>
						<th>Answers</th>
					  </tr>
<?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'View Grades'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
					  
					</table></br></br></br>
				<hr>
					<table class="help" id="t01">
						<h2>Settings</h2>
						<tr>
						
						 
						<th>Questions</th>
						<th>Answers</th>
					  </tr>
					  <?php
	
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select questions,answers from help where title_name= 'Settings'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["questions"]."</td>";
		echo "<td>".$result["answers"]."</td>";
		
		}
	}
	?>
					</table></br></br></br>
				
			</div>
</body>
</html> 


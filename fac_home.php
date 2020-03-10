<!DOCTYPE html>

<html>
<?php 
	session_start();
		if(isset($_SESSION["uname"]))
		{
			$_POST["uname"]=$_SESSION["uname"];
		}

?>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.sidenav {
		  height: 100%;
		  width: 16%;
		  float:left;
		  margin-left:2%;
		  margin-right:5%;
		  margin-top:2%;
		  margin-bottom:50px;
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
		  margin-left:5%;
		  margin-top:2%;
		  margin-bottom:50px;
		  margin-right:5%;
		  background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%); 
		  width:88%;
		  height:100%;
		  padding:2%;
		}
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		h4, p,h2, h3{
			color:darkred;
			border:0px solid black;
		}
		table,td,tr{
		border:1px solid black;
		color:darkred;
		height:30px;
		}
	</style>
</head>
<body>
	<?php include("commonHeader.php"); ?>
	
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);height:600px;">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px;">
			<marquee style="padding:7px;">
				<b style="color:darkred;">Welcome to College University's Faculty Portal. &nbsp;&nbsp;</b>
			</marquee>
		</div>
	<div class="main">
	<div>	
	
	<?php 
		$uname = $_POST['uname'];
		echo "<h2>Welcome &nbsp;Mr. " .$uname. ",</h2>";
	?>	
	
	<form method="POST" action="add_grade.php">

	<?php
		$_SESSION["temp"] = " ";

		$con=mysqli_connect('localhost','root','','users');
		$query = "select Course_name, Course_id from course_registration where Faculty_name='$uname'";
		$Resource = mysqli_query($con,$query);
		echo " <p style='font-size:23px'>Following are your subjects: </p>";
		if(mysqli_num_rows($Resource) > 0) {
			echo "<table style='width:25%;border:1px solid black;'>";
		while ($results = mysqli_fetch_assoc($Resource)){
			$subjectID = $results["Course_id"];
			$Subject = $results["Course_name"];
			echo "<tr><td>".$Subject."</td>";
			echo "<td>".$subjectID."</td></tr> </p>";
			
		}
		echo "</table>";
		}
	?>
	<p>  Please enter Subject Name you wish to grade:</p>
	<input type="text" name="Sub" id="subject"> &nbsp; &nbsp;
	<br>  <br> <input type="submit" value="Submit" class="button" action ="add_grade.php" method="POST"> &nbsp;
	
	</form>
	<form  style="float:right;" method="POST" action ="fac_login.php">
	<br> 
	<input type="submit" value="Logout" class="button" action="fac_login.php" method="POST"> 
	</form>
	</div>
	</div>
</body>	
</html>
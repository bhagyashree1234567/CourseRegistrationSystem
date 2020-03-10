<!DOCTYPE html>
<?php 
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
			}
			if(isset($_SESSION["msg"]))
			{
				$_POST["msg"]=$_SESSION["msg"];
			}
			
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
		  color: lightgreen;
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
			<span id="s1" style="display: block;float:left;width:30%;margin-left:25px;color:maroon;">Register Courses</span>
		</div>
		<div		
			<div class="sidenav">
				<a href="mainmenu.php">Main Menu</a>
				<a href="personal.php" >Personal Details</a>
				<a href="reg_course.php" style="font-size:22px;font-weight: bold; color:red;">Register Courses</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php">Settings</a>
				<a href="help.php">Help</a>
				<a href="logout.php">Logout</a>
			</div>
			
			
			<div class="main">
				<div>
	<form name= "Coursename" method= "POST" action="action.php">

	<h4> Enter Course IDs to enroll for the courses. Maximum 3 courses are allowed per semister. </h4>
	<p>&nbsp;&nbsp;&nbsp;Course 1 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cid1" placeholder="Enter course-id"></p>
	<p>&nbsp;&nbsp;&nbsp;Course 2 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cid2" placeholder="Enter course-id"></p>
	<p>&nbsp;&nbsp;&nbsp;Course 3 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cid3" placeholder="Enter course-id"></p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Add Courses" class="button">
	</form>
	<br>
	<?php
		if(isset($_SESSION["msg"]))
			{
				echo $_POST["msg"];
				$_SESSION["msg"] = "";
			}
	?>
	<hr>
	<form name= "Dropname" method= "POST" action="drop.php">
	
	<h4> Enter Course ID to drop the courses. </h4>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Course :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cid4" placeholder="Enter course-id"></p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Drop Course" class="button">
	</form><br>
	<hr>
  </div>
			  
<div style="float:left;margin-left:2%;width:30%;">
	<h3>Enrolled Course List:</h3>
	</div>
	<div style="float:left;margin-left:58%;"
	  <form method="POST" action="print_avail_course.php">
		<input style="height:35px;width:100px;font-size:20px;" type="submit" value="Print">
	  </form>
	</div>
			  <table id="t01">
    <tr>
		<th>Department Name</th>
		<th>Course Id</th>
		<th>Course Name</th>
		<th>Course Hours</th>
		<th>Faculty_name</th>
		<th>Units</th>
	</tr>


	<?php
		$Name = $_POST["uname"];
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select course_id,course_name from courses_info where Name= '$Name'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID) > 0){
			while($result = mysqli_fetch_assoc($ResourceID)) {
				$idss = $result["course_id"];
				$other = "select Dept_id,Dept_name,Course_hours,Faculty_name,Units from course_registration where course_id='$idss'";
				$otherResource = mysqli_query($con,$other);
				$results = mysqli_fetch_assoc($otherResource);
				echo "<tr>";
				echo "<td>".$results["Dept_name"]."</td>";
				echo "<td>".$result["course_id"]."</td>";
				echo "<td>".$result["course_name"]."</td>";
				echo "<td>".$results["Course_hours"]."</td>";
				echo "<td>".$results["Faculty_name"]."</td>";
				echo "<td>".$results["Units"]."</td></tr>";
			}
		}else{
				echo "<tr>";
				echo "<td>-</td>";
				echo "<td>-</td>";
				echo "<td>-</td>";
				echo "<td>-</td>";
				echo "<td>-</td>";
				echo "<td>-</td></tr>";
		}
	?>
	</table>
	<br><hr>


  
  <div style="float:left;margin-left:2%;width:30%;">
	<h3>All Available Course List:</h3>
	</div>
	<div style="float:left;margin-left:58%;"
	  <form method="POST" action="print_avail_course.php">
		<input style="height:35px;width:100px;font-size:20px;" type="submit" value="Print">
	  </form>
	</div>
  <table id="t01">
    <tr>
		<th>Department Name</th>
		<th>Course Id</th> 
		<th>Course Name</th>
		<th>Available Seat</th>
		<th>Course Hourse</th>
		<th>Professor Name</th>
		<th>Units</th>
	</tr>
	
	<?php
		$con=mysqli_connect('localhost','root','','users');
		$selectquery= "select Dept_id,Dept_name,Course_id,Course_name,Avail_seat,Total_seat,Course_hours,Faculty_name,Units from course_registration where Dept_id= 'CS'";
		$ResourceID = mysqli_query($con,$selectquery);
		if(mysqli_num_rows($ResourceID)){
		while($result = mysqli_fetch_assoc($ResourceID)) {
		echo "<tr>";
		echo "<td>".$result["Dept_name"]."</td>";
		echo "<td>".$result["Course_id"]."</td>";
		echo "<td>".$result["Course_name"]."</td>";
		echo "<td>".$result["Avail_seat"]."/".$result["Total_seat"]."</td>";
		echo "<td>".$result["Course_hours"]."</td>";
		echo "<td>".$result["Faculty_name"]."</td>";
		echo "<td>".$result["Units"]."</td></tr>";
		}
	}
	?>
  </table>

			</div>
		</div>  
	</div>
</body>
</html> 


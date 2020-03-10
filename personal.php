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
		b, span, h3, table#t11 td{
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
			<span id="s1" style="display: block;float:left;width:30%;margin-left:25px;color:maroon;">Personal Details</span>
		</div>
		<div		
			<div class="sidenav">
				<a href="mainmenu.php">Main Menu</a>
				<a href="personal.php" style="font-size:22px;font-weight: bold; color:red;">Personal Details</a>
				<a href="reg_course.php">Register Courses</a>
				<a href="major_details.php">Major Details</a>
				<a href="fac_details.php">Faculty Details</a>
				<a href="view_grades.php">View Grades</a>
				<a href="settings.php">Settings</a>
				<a href="help.php">Help</a>
				<a href="logout.php">Logout</a>

			</div>
			<div class="main">
				
				<h3> The details shown below are as per your student resistration records. You can update them from settings. </h3>
				  <br>
				  <?php 
					$uname = $_POST['uname'];
					$con=mysqli_connect('localhost','root','','users');
					$selectquery= "select * from Student_login where Username='$uname'";
					$ResourceID = mysqli_query($con,$selectquery);
					if(mysqli_num_rows($ResourceID)){
						$result = mysqli_fetch_assoc($ResourceID);
						echo "<table id='t11' style='width:50%;'><tr><td><b>Student Id: </b></td><td><span>".$result["ID"]."</span></td></tr>";
						echo " <tr style='width:50%; '><td style='width:30%;'><b>Student Name:</b></td><td style='width:30%;'><span>".$result["Name"]."</span></td></tr>";
						echo "<tr><td><b> Phone Number:</b></td><td><span> ".$result["phone_no"]."</td></tr>";
						echo "<tr><td><b> Date of birth(yyyy-mm-dd):</b></td><td> <span>".$result["DOB"]."</td></tr>";
						echo "<tr><td> <b>Address line-1: </b></td><td><span>".$result["Address line-1"]."</td></tr>";
						echo "<tr><td><b> Address line-2: </b></td><td>".$result["Address line-2"]."</td></tr>";
						echo "<tr><td><b> City: </b></td><td>".$result["City"]."</td></tr>";
						echo "<tr><td><b> Country:</b></td><td> ".$result["Country"]."</td></tr>";
						echo "<tr><td><b>Zipcode:</b></td><td>".$result["Zipcode"]."</td></tr>";
						echo "<tr><td><b>Major:</b></td><td>".$result["Dept_id"]."</td></tr></table>";

					}
				  ?>
				  <br>
				  <h3>Completed Courses:</h3>
				 <table style='width:100%; border:1px solid black;' class="tcourse" id="t01">
					  <tr>
						<th>Couse-id</th>
						<th>Course-name</th> 
						<th>Semester</th>
						<th>Grade</th>
					  </tr>
					  <?php 
					  $query = "select course_id,course_name,Semester,Grade from courses_info where Name='$uname'";
					  $ResourceID = mysqli_query($con,$query);
					  if(mysqli_num_rows($ResourceID)){
					  while($result = mysqli_fetch_assoc($ResourceID))
					  {
						  echo "<tr><td>".$result["course_id"]."</td>";
						  echo "<td>".$result["course_name"]."</td>";
						  echo "<td>".$result["Semester"]."</td>";
						  echo "<td>".$result["Grade"]."</td></td>";
					  }
					  } else
					  {
						  echo "<tr><td>-</td>";
						  echo "<td>-</td>";
						  echo "<td>-</td>";
						  echo "<td>-</td></tr>";
					  }
					  ?>
				</table>
				

			</div>
		</div>
	</div>
</body>
</html>
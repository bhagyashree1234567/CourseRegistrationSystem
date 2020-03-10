<!DOCTYPE html>

<html>
<?php 
	session_start();
		if(isset($_SESSION["uname"]))
		{
			$_POST["uname"]=$_SESSION["uname"];	
		}
		if(isset($_SESSION["temp"]))
		{
			$temp = $_SESSION["temp"];
		}
		if(isset($_SESSION["subject"]))
		{
			$_POST["Sub"]=$_SESSION["subject"];
		}
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table {
		  width:100%;
		}
		table.upper{
			width:20%;
		}
		table, th, td {
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
		body {
		  font-family: "Lato", sans-serif;
		}
		
		.sidenav {
		  height: 100%;
		  width: 16%;
		  float:left;
		  margin-left:2%;
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
		  margin-left:3%;
		  margin-top:2%;
		  margin-bottom:50px;
		  margin-right:2%;
		  background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%); 
		  width:90%;
		  height:100%;
		  padding:2%;
		}
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		h4, p, h3, form{
			color:darkred;
			border:0px solid black;
		}
	</style>
</head>
<body>
<?php include("commonHeader.php"); ?>
	
	<div style="background:linear-gradient(to bottom, #990033 0%, #ff6666 100%);height: 500px;">
		<div style="background: linear-gradient(to bottom, #ffffcc 0%, #ffffff 100%);height:30px; margin:0;font-size:20px;padding-top:5px;">
			<span style="display: block;float:left;width:30%;margin-left:25px;color:maroon;"> Grading Details</span>
		</div>
		<div		
			<div class="main">
			  <form action='action1.php' method= 'POST'>
			  <div class="upper">
					<form method= "POST" action= "action1.php"><!--php here-->
					  <table>
						<tr>
						<td> Student Name &nbsp; &nbsp; &nbsp;&nbsp;
						<input type="text" name="SID" id ="SID">
						<b style="color:red;font-size:14px;" id="SID"></b></td>
						</tr>
							<tr>
						  <td> Grade &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  
						  <input type="text" name="Grade" id="Grade">
						  <b style="color:red;font-size:14px;" id="Grade"></b></td>
						</tr>
						<tr>
						  <td>Special Notes &nbsp;
						  <input type="text" name="SNotes" id="SNotes">
						  <b style="color:red;font-size:14px;" id="SNotes"></b></td>
						</tr>
					  </table>
					  <br>
					  
					  <input type="submit" value="Add Grades" style="width:130px;height:30px;font-size:17px" action = "action1.php">

					  </form>  
					  <form action= "fac_home.php">
					   <br> <input type ="Submit" value =" Faculty Home " style="width:130 px;height:30px;font-size:17px" action="fac_home.php">
					</form>  
				</div>
				
				 
                  </form>					
				  <table class="tcourse">
					  <tr>
						<td> Student Name</td>
						<td> Semester</td>
						<td> Current Course</td>
						<td> Grade </td>
						<td> Specific Notes</td>
					  </tr>
					<?php
                    echo " <h3>".$temp."</h3>";
				    $_SESSION["temp"] = " ";
				
					$con=mysqli_connect('localhost','root','','users');
					$Subject = $_POST["Sub"];
					$_SESSION["subject"] = $Subject;
					echo " <p>Details of Students taken the course: ".$Subject."</p>";
					$selectquery= "SELECT  Name, Semester,Grade,Specific_note FROM courses_info where course_name = '$Subject'";
					$Resource = mysqli_query($con,$selectquery);
					if(mysqli_num_rows($Resource) > 0){
					while($result = mysqli_fetch_assoc($Resource)) 
					{
					echo "<p>";	
					echo "<tr>";
					echo "<td>".$result["Name"]."</td>";
					echo "<td>".$result["Semester"]."</td>";
					echo "<td>".$Subject."</td>";
					echo "<td>".$result["Grade"]."</td>";
					echo "<td>".$result["Specific_note"]."</td>";
					echo "</tr> </p>";
					}
				    }
				    ?>
					</table>
				
			  </form>
			</div>
		</div>
	</div>
</body>
</html
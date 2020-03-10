<?php
		session_start();
			if(isset($_SESSION["uname"]))
			{
				$_POST["uname"]=$_SESSION["uname"];
				$_POST["subject"] = $_SESSION["subject"];
			}
					
	$name = $_POST["uname"];
	$SID = $_POST["SID"];
	$Grade = $_POST["Grade"];
	$SNotes = $_POST["SNotes"];
	$Subject = $_POST["subject"];
	if( $Grade != 'A' and $Grade != 'A-' and $Grade != 'A+' and $Grade != 'B' and $Grade != 'B-' and $Grade != 'B+' and $Grade != 'C' and $Grade != 'C-'){
		$_SESSION["temp"] = "Invalid value of Grade.";
		header("location:add_grade.php");
	}
	else{
		$con = mysqli_connect('localhost','root','','users');
		$check_grade = "SELECT Grade from courses_info WHERE Name= '$SID' and course_name ='$Subject'";
		$ResourceID = mysqli_query($con,$check_grade);
		while($results = mysqli_fetch_assoc($ResourceID)){
		
				$select = "UPDATE courses_info SET Grade = '$Grade', Specific_note = '$SNotes' WHERE Name = '$SID' and course_name ='$Subject'";
				mysqli_query($con,$select);
				$_SESSION["temp"] = "Grade is Sucessfully Added.";
				header("location:add_grade.php");
				
		
			}
			
		
	}	
?>
	
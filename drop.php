<?php
session_start();
	if(isset($_SESSION["uname"]))
	{
		$_POST["uname"]=$_SESSION["uname"];
	}
	$con = mysqli_connect('localhost','root','','users');
	$Name = $_POST["uname"];
	$course = $_POST["cid4"];
	$query = "select Avail_seat,Total_seat from course_registration where Course_id = '$course'";
	$R = mysqli_query($con,$query);
	$result_query = mysqli_fetch_assoc($R);
	$total = $result_query["Total_seat"];
	$avail_seat = $result_query["Avail_seat"] + 1;
	if ($avail_seat <= $total)
	{
		$query_drop = "delete from courses_info where course_id = '$course' and Name = '$Name'";
		mysqli_query($con,$query_drop);
		$seat = "update course_registration set Avail_seat='$avail_seat' where Course_id = '$course'";
		mysqli_query($con,$seat);
		header("location:reg_course.php");
	} else
	{
		header("location:reg_course.php");
	}
?>
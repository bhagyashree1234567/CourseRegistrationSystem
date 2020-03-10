<?php 
	session_start();
	if(isset($_SESSION["uname"]))
	{
	 	$_POST["uname"]=$_SESSION["uname"];
	}
	if(isset($_SESSION["msg"]))
	{
		$_POST["msg"] = $_SESSION["msg"];
	}
	$Name = $_POST["uname"];
	$con = mysqli_connect('localhost','root','','users');
	$course_id1 = $_POST["cid1"];
	$course_id2 = $_POST["cid2"];
	$course_id3 = $_POST["cid3"];
	$message = "";
	$check = "select course_id from courses_info where Name = '$Name'";
	$ResourceIDs = mysqli_query($con,$check);
	$results = mysqli_num_rows($ResourceIDs);
	$selectquery = "select Course_id,Course_name from course_registration where Course_id= '$course_id1' OR Course_id= '$course_id2' OR Course_id= '$course_id3'";
	$ResourceID = mysqli_query($con,$selectquery);
	if(mysqli_num_rows($ResourceID) + $results <= 3)
	{
		if ($results == 0)
		{
			if ($course_id1 != $course_id2 or $course_id1 != $course_id3 or $course_id2 != $course_id3)
			{
			while($result = mysqli_fetch_assoc($ResourceID)) 
				{	
				$cid = $result["Course_id"];
				$cname = $result["Course_name"];
				$query = "insert into courses_info (course_id,course_name,ID,Name,Semester,Grade,General_note,Specific_note) values ('$cid','$cname','$ID','$Name','1','0.00','No Note','No Note')";
				mysqli_query($con,$query);
				$query_seat = "select Avail_seat from course_registration where Course_id = '$cid'";
					$R = mysqli_query($con,$query_seat);
					$result_query = mysqli_fetch_assoc($R);
					$avail_seat = $result_query["Avail_seat"] - 1;
					if ($avail_seat > 0)
					{
						$seat = "update course_registration set Avail_seat='$avail_seat' where Course_id = '$cid'";
						$S = mysqli_query($con,$seat);
					}
				}
				header("location:reg_course.php");
			}else{
				$message = "Error!! Same entries are not allowed";
				$_SESSION["msg"] = $message;
				header("location:reg_course.php");
			}
		}
		else 
		{
			$counter = 0;
			while($ad = mysqli_fetch_assoc($ResourceIDs))
			{
				if ($course_id1 != $course_id2 or $course_id1 != $course_id3 or $course_id2 != $course_id3)
				{
					$xyz = $ad["course_id"];
					if ($course_id1 == $xyz or $course_id2 == $xyz or $course_id3 == $xyz)
					{
						$counter = $counter + 1;
					}
				}
			}
			if ($counter == 0)
			{
				while($result = mysqli_fetch_assoc($ResourceID)) 
				{	
					$cid = $result["Course_id"];
					$cname = $result["Course_name"];
					$query = "insert into courses_info (course_id,course_name,ID,Name,Semester,Grade,General_note,Specific_note) values ('$cid','$cname','$ID','$Name','1','0.00','No Note','No Note')";
					mysqli_query($con,$query);
					$query_seat = "select Avail_seat from course_registration where Course_id = '$cid'";
					$R = mysqli_query($con,$query_seat);
					$result_query = mysqli_fetch_assoc($R);
					$avail_seat = $result_query["Avail_seat"] - 1;
					if ($avail_seat > 0)
					{
						$seat = "update course_registration set Avail_seat='$avail_seat' where Course_id = '$cid'";
						mysqli_query($con,$seat);
					}
				}
				header("location:reg_course.php");
			} else 
			{
				$message = "Error!!! Course already added";
				$_SESSION["msg"] = $message;
				header("location:reg_course.php");
			}
		}
	} else {
		$message = "Error!!! Already three courses are added";
		$_SESSION["msg"] = $message;
		header("location:reg_course.php");
	}
?>	

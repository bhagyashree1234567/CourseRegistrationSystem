<?php
session_start();
if(isset($_SESSION["uname"]))
{
	$_POST["uname"]=$_SESSION["uname"];
}
$_POST["count"] = $_SESSION["count"];
$con = mysqli_connect('localhost','root','','users');
	$name = $_POST["uname"];
	$phone = $_POST["phonenumber"];
	$add1 = $_POST["addressline1"];
	$add2 = $_POST["addressline2"];
	$city = $_POST["city"];
	$country = $_POST["country"];
	$count = 0;
	$_SESSION["count"] = $count;
	$zip = $_POST["zipcode"];
	if($phone == "" && $add1 == "" && $add2 == "" && $city == "" && $country == "" && $zip == "")
	{
		header("location:change_personal.php");
	}
	if($phone != "")
	{
		$select = "update student_login set phone_no='$phone' where Username='$name'";
		
	}
	if($add1 != "")
	{
		$select = "update student_login set Address line-1='$add1' where Username='$name'";
		
	}
	if($add2 != "")
	{
		$select = "update student_login set Address line-2='$add2' where Username='$name'";
		
	}
	if($city != "")
	{
		$select = "update student_login set City='$city' where Username='$name'";
		
	}
	if($country != "")
	{
		$select = "update student_login set Country='$country' where Username='$name'";
		
	}
	if($zip != "")
	{
		$select = "update student_login set Zipcode='$zip' where Username='$name'";
		
	}
	$Resource = mysqli_query($con,$select);
	$count = 1;
	$_SESSION["count"] = $count;
	header("location:change_personal.php");
	
?>
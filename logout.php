<?php
session_start();
if(isset($_SESSION["uname"]))
{
	$_POST["uname"]=$_SESSION["uname"];
}
session_destroy();
header("location:student_login.php");
?>

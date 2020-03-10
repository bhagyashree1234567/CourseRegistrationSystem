
<?php
session_start();
$user=$_SESSION["uname"];
$conn = mysqli_connect("localhost", "root", "", "users") or die("Connection Error: " . mysqli_error($conn));
if(isset($_SESSION["msg1"]))
{
	$_POST["msg1"] = $_SESSION["msg1"];
}
if (count($_POST) > 0) {
	$result = mysqli_query($conn, "SELECT * from student_login WHERE Username='" . $_SESSION["uname"] . "'");
    $row = mysqli_fetch_array($result);
	$message = "";
    if ($_POST["currentPassword"] == $row["Password"]) 
    {
        mysqli_query($conn, "UPDATE student_login set Password='" . $_POST["newPassword"] . "' WHERE Username='" . $_SESSION["uname"] . "'");
        $message = "Password Changed successfully!!!";
		$_SESSION["msg1"] = $message;
		header("location:change_password.php");
    } 
   else{
        $message = "Current Password is not correct";
		$_SESSION["msg1"] = $message;
		header("location:change_password.php");
}
}
?>

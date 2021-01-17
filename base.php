<?php
session_start();
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","eh_project");
echo "amma";
if($conn) 
{
	$email1 = $_POST["email"];
	$password1 = $_POST["password"];
	$_SESSION['email'] = $email1;
	header("Location : sign.php");
}
else
{
	die("error connecting");
}
?>
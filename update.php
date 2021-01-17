<?php require "profile.php";
session_start();
$new_name = $_POST['name'];
$name_up = "UPDATE userdetails SET name = '".$new_name."' WHERE email = '".$_SESSION["email"]."'";
//$res_up = mysqli_query($conn,$name_up);
if (mysqli_query($conn, $name_up))
{
	header("Location : home.php");
}

?>
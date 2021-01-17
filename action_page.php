<?php
session_start();
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","eh_project");
if($conn)
{
	  //echo "WELCOME!  ";
}

if(isset($_POST["submit"])) 
{
$msg = $_POST["msg"];
$email1 = $_SESSION['email'];
$sql1 = "SELECT id from userdetails where email = '$email1'";
$query1 = mysqli_query($conn,$sql1);
$fkey = mysqli_fetch_assoc($query1);
//echo $fkey['id'];
$sql = "INSERT INTO usermsg (id,message) VALUES ('".$fkey['id']."','".$msg."')";

if(mysqli_query($conn, $sql))
{
	header("Location: home.php"); // Redirecting To Other Page	

}
else
{
	echo "Incorrect username or password. Try again!!";
	mysqli_close($conn);
}

}
?>
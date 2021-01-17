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
$email1 = $_POST["email"];
$password1 = $_POST["password"];
$_SESSION['email'] = $email1;
$_SESSION['conn'] = $conn;
$sql = "SELECT paswd FROM userdetails WHERE email='$email1' and paswd='$password1'";

$res = mysqli_query($conn, $sql);

if($res && mysqli_num_rows($res)>0)
{
	while($row = $res->fetch_assoc())
	{
		$_SESSION["email"] = $email1; // Initializing Session Variable
		header("location: home.php"); // Redirecting To Other Page	
	}
}else
{
	echo "Incorrect username or password. Try again!!";
}
}

?>
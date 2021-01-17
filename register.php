<?php 
session_start();
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","eh_project");
if($conn){
}

if(isset($_POST["submit"])) 
{

 // SQL Injection Security
 $name = $_POST['name'];
 $email =  $_POST['email'];
 $password = $_POST['password'];
 $sql4 = "INSERT into userdetails (name,email,paswd) VALUES ('$name','$email','$password')";
 if (mysqli_query($conn, $sql4))
 {
 header('Location: landing.html');
 mysqli_close($conn);
    }
 else 
 {
     echo "Account creation failed !";
     //mysql_error();
 }
}


?>
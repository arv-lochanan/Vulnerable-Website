<html>
<head>
<title>Profile Details</title>
</head>
<body>
<?php require "sign.php";

echo "Username : ";
echo $_SESSION["email"];
echo nl2br("\n\n");
$name_qr = "SELECT name from userdetails where email = '".$_SESSION["email"]."'";
$res_qr = mysqli_query($conn,$name_qr);
$name_res = mysqli_fetch_assoc($res_qr);
echo "Name : ";
echo $name_res['name'];

if (isset($_GET['submit'])){
$new_name = $_GET['newname'];
$name_up = "UPDATE userdetails SET name = '".$new_name."' WHERE email = '".$_SESSION["email"]."'";
//$res_up = mysqli_query($conn,$name_up);
if (mysqli_query($conn, $name_up))
{
	//echo $new_name;
}
}
?>

<form action="" method="GET">
<h3>Update Information :</h3>
<br>
<br>	
Name : <input type="text" name="newname" id="newname">
<br>
<br>

<button type="submit" name= "submit">
Update</button>
</form>


</body>
</html>
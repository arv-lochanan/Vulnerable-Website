<html>
<head>
<title>Search</title>
</head>
<body>
<form action="" method="GET">
<input type="text" name="searchitem">
<br>
<br>
<input type="submit" name="search" value="Go">
</form>
<h4>Search for Name and Username </h4>
<br>

<span>
<?php require "sign.php";
$searchname = $_GET['searchitem'];
$sql_all = "SELECT name,email from userdetails where name = '".$searchname."'";
$allres = mysqli_query($conn,$sql_all);

while($row = mysqli_fetch_assoc($allres))
{
		echo $row['name'];
		echo "\t";
		echo $row['email'];
		echo nl2br("\n");  
}
?>
</span>

</body>
</html>


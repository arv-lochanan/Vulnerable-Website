<!DOCTYPE html>
<html>
<head>
<script>

</script>
</head>
<body onload="displaymessage()">
<?php require "sign.php";
?>
<p id="Intro" >Welcome home, <?php echo $_SESSION["email"] ?>!</p>
<form action="action_page.php" method="post">
<label for="msg">Post</label>
<textarea id="msg" name="msg" rows="4" cols="50"></textarea>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<br>
<br>
<span id="messages">
<?php 
//require "sign.php";
$user_id = "SELECT id from userdetails where email = '".$_SESSION["email"]."'";
$id_n = mysqli_query($conn,$user_id);
$id_num = mysqli_fetch_assoc($id_n);
$sql_msg = "SELECT t, message from usermsg where id = '".$id_num['id']."'";
$msg_res = mysqli_query($conn,$sql_msg);

while($row = mysqli_fetch_assoc($msg_res))
{
		echo $row['t'];
		echo "\t";
		echo $row['message'];
		echo nl2br("\n\n");  
}
?>
</span><br>
<form action="login.html">
<input type="submit" value = "Logout" name="logout">
</form>
<br>
<form action="profile.php">
<input type="submit" value = "Profile" name="profile">
</form>
<br>
<form action="search.php">
<input type="submit" value = "Search" name="search">
</form>
</html>

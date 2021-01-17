<!DOCTYPE>
<html>
<head>
</head>
<body>
<style >
H1
{
 color: black;
 font-weight: bold;
}
body
{
	background-color:lavender;
}
</style>

<!--<?php
//echo "Welcome, " + $email1;
?>-->
<form method="POST" action="image2db.php"> 
	<label for="fileupload"> Select a file to upload</label> 
<br>
<br>
	<input type="file" name="fileupload" value="Upload Image" id="Upload Image"> 
	
	<br>
	<br>
	Enter email id of recipient : <input type="text" name="recipient">
	<br>
	<br>
	Enter key for encryption : <input type="text" name="Key">
	<br>
	<br>
	<br>
	<input type="submit" value="Submit" name="encrypt">
	</div>
	</form>
</body>
</html>
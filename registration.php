<?php include base.php>
<?php

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];

mysql_query(INSERT INTO accounts VALUES ($name,$password,$email,$contact));

if(mysql_affected_rows()) { echo "Account Created Successfully !";
    # code...
}
else {
    echo "Account creation failed !";
    mysql_error();
}

?>
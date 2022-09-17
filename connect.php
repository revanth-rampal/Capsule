<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database','');

$con = mysqli_connect('localhost', 'root', 'r','project','8889');

// get the post records
$txtUsername = $_POST['uname'];
$txtAdharId = $_POST['id'];
$txtPassword = $_POST['password'];
$txtConfirm_password = $_POST['confirm_password'];
$txtContact = $_POST['contact'];

// database insert SQL code
$sql = "INSERT INTO 'registration_form' ('username','adharid','password','confirmpassword','contactno') VALUES ('$txtUsername', '$txtAdharId', '$txtPassword', '$txtConfirm_password', '$txtContact')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
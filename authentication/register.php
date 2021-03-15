<?php
//start session 
session_start();
//create connection to db
$conn = mysqli_connect("localhost","root","","schooldata");
//global variable to check whether username exists 
$_SESSION['userTaken'] = "Username is already taken";
$_SESSION['userRegistered'] = "registration successful";

//set variables
$username = $password = $email = $role = '';

//first check if sign up has been clicked
if (isset($_POST['save'])) {
	# code...
	//get inputs from user 
	$username = $_POST['username'];
    $email = $_POST['emailSignUp'];
	$password = $_POST['passReg'];
	$role=$_POST['role'];

}

//encrypt password 
$encrypted_pass= password_hash($password, PASSWORD_DEFAULT);
// $encrypted_pass = md5($password);
// fetch records from db 
$regsql = "SELECT * FROM schoolaccounts WHERE username='$username'";
$result = mysqli_query($conn,$regsql);
$num = mysqli_num_rows($result);

//checking for username 
 if ($num==1) {
 	# code...
 	$_SESSION['userTaken'];
 	header('location: signup.php');
 } else {
 	$sql = "INSERT INTO schoolaccounts(username,Email,password,role) VALUES ('$username','$email','$encrypted_pass','$role')";

 	mysqli_query($conn,$sql);
 	// echo "registration successful";
 	$_SESSION['userRegistered'];

 	header('location: login.php?registered=true');
 }



?>
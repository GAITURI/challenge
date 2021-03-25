<?php
//start session 
session_start();
//create connection to db
$conn = mysqli_connect("localhost","root","","schooldata");
//global variable to check whether username exists 

$_SESSION['userTaken'] = "Username is already taken";
$_SESSION['userRegistered'] = "registration successful";

//set variables
$username = $password = $email = $activation_code = $role =$uniqid= '';

//first check if sign up has been clicked
if (isset($_POST['save'])) {
	# code...
	//get inputs from user 
	$username = $_POST['username'];
    $email = $_POST['emailSignUp'];
	$password = $_POST['passReg'];
	$role=$_POST['role'];
	$activation_code=$_POST['activation_code'];
	$uniqid = uniqid();
	$emailval=$_POST['email'];
}

//encrypt password 
$encrypted_pass= password_hash($password, PASSWORD_DEFAULT);
// $encrypted_pass = md5($password);
// fetch records from db 

// $stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);

$regsql = "SELECT * FROM schoolaccounts WHERE username='$username'";
$result = mysqli_query($conn,$regsql);
$num = mysqli_num_rows($result);

//checking for username 
 if ($num==1) {
 	# code...
 	$_SESSION['userTaken'];
 	header('location: signup.php');
 } else {
 	$sql = "INSERT INTO schoolaccounts(username,Email,password,role) VALUES ('$username','$email','$encrypted_pass','$role','$activation_code')";

 	mysqli_query($conn,$sql);
 	// echo "registration successful";
 	$_SESSION['userRegistered'];

 	// header('location: login.php?registered=true');
 	$from    = 'gaiturimark@gmail.com';
$subject = 'Account Activation Required';
$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
// Update the activation variable below
$activate_link = 'http://gaiturimark@gmail.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
mail($_POST['email'], $subject, $message, $headers);
echo 'Please check your email to activate your account!';
 }



?>
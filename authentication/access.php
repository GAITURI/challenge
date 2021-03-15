<?php
//list all variables
$passwordlog="";
$result="";
$num="";
$emaillog="";
$roleresult="";
$role="";
$password="";
session_start();
$conn = mysqli_connect('localhost','root','','schooldata');

//capture input
if(isset($_POST['save'])){
	$emaillog=$_POST['emaillog'];
	$passwordlog=$_POST['passlog'];
	$role=$_POST['role'];
}
//create the sql query to fetch data
$sql="SELECT * FROM schoolaccounts WHERE email='$emaillog' && password= '".md5($password)." ' && role='$role'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if ($num==1) {
	  $_SESSION['activeUser']= $username;
	  header("location:./staff.php");
	  exit();
}





	  ?>
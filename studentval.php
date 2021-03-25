<?php

// // use mysqli extension to connect to database
$conn = mysqli_connect("localhost","root","","schooldata");


// $sql="CREATE TABLE studentdata(
// id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// Firstname VARCHAR(30) NOT NULL,
// Lastname VARCHAR(30) NOT NULL,
// email VARCHAR (50),
// Admission_no INT (22),
// reg_date TIMESTAMP DEFAULT 
// CURRENT_TIMESTAMP ON 
// UPDATE CURRENT_TIMESTAMP)";

// if ($conn->query($sql) === TRUE) {
//   # code...
//   echo "table  created";
// }else{
//   echo "table not created:". $conn->error;
 
// }

//  // list all variables
$firstname="";
$lastname="";
$Admission_no="";
$reg_date="";
$gender="";
$genderErr="";
$firstnameErr;
$firstnameErr="";
$lastnameErr;
$lastnameErr="";
$Admission_noErr="";
$reg_dateErr;
$reg_dateErr="";

$email="";
$emailErr="";

if (isset($_POST["save"])){

  // $id=$_POST["id"];
  // $firstname = $_POST["firstName"];
  // $Lastname = $_POST["Lastname"];
  // $email = $_POST["email"];
  // $Admission_number= $_POST["Admission_no"];
  // $Date=$_POST["reg_date"];


  if (empty($_POST["firstName"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname=$_POST["firstName"];
    $firstname=filter_var($firstname, FILTER_SANITIZE_STRING);
  if (!preg_match ("/^[a-zA-z]*$/", $firstname) ) {  
    $firstnameErr = "Only alphabets and whitespace are allowed.";  
      
}   
}
  

  if (empty($_POST["Lastname"])) {
    $lastname = "Name is required";
  } else {
     $lastname = $_POST["Lastname"];
    $lastname=filter_var($lastname, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  
if (empty($_POST["email"])) {
  # code...
  $email ="email is required";

 }else{
      $email=$_POST["email"];
      $email=filter_var($email,FILTER_SANITIZE_EMAIL);
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $email="valid email" ;
    } else {
         $emailErr ="Invalid email format";
        }
}

  if (empty($_POST["Admission_no"])) {
  	# code...
  	$Admission_noErr="integer is required";
  }else{
  	$Admission_no=$_POST["Admission_no"];
  	if (filter_var($Admission_no, FILTER_VALIDATE_INT) ===0 || !filter_var($Admission_no, FILTER_VALIDATE_INT) === false )
  	 {
  		$Admission_no="DATA IS VALID";
		}else
			{$Admission_noErr="integer is not valid";
			}
	}

if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr)&& empty($Admission_noErr) ) 
{
//statement
$stmt=$conn->prepare("INSERT INTO studentdata(Firstname,Lastname,email,Admission_no)VALUES(?,?,?,?)");

$stmt->bind_param("sssi",$firstname,$lastname,$email,$Admission_no); 
$stmt->execute();
echo "new Data Created Successfuly";
$stmt->close();

  }

}


?>
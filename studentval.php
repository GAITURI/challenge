<?php
//list all variables
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

//capture users input

if (isset($_POST['save'])){


  $firstName = $_POST["firstName"];
  $lastname = $_POST["Lastname"];
  $gender = $_POST["gender"];
  $Admission_no= $_POST["Admission_no"];
  $reg_date=$_POST["reg_date"];


  if (empty($_POST['firstName'])) {
    $firstnameErr = "Name is required";
  } else {
    // $firstname = test_input($_POST["firstName"]);
    $firstname=filter_var($firstName, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
  if (!preg_match ("/^[a-zA-z]*$/", $firstName) ) {  
    $firstnameErr = "Only alphabets and whitespace are allowed.";  
      
}   
}
  

  if (empty($_POST["Lastname"])) {
    $lastname = "Name is required";
  } else {
    // $lastname = test_input($_POST["Lastname"]);
    $lastname=filter_var($lastname, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    // $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["Admission_no"])) {
  	# code...
  	$integerErr="integer is required";
  }else{
  	// $Admission_no=test_input($_POST["Admission_no"]);
  	// $integer=filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
  	//filter integer
  		# code...
  	if (filter_var($Admission_no, FILTER_VALIDATE_INT) ===0 || !filter_var($Admission_no, FILTER_VALIDATE_INT) === false )
  	 {
  		$Admission_no="";
		}
		else
			{
				$Admission_noErr="integer is not valid";
			}
	}


}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
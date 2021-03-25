<?php
//create connection with db
$conn = mysqli_connect("localhost","root","","schooldata");

//list variables
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
$a="";
$email="";
$emailErr="";
$id="1";
$result="";
$row="";
 if (isset($_GET['edit'])) {
 	# code...
 	$sql= "SELECT * FROM studentdata WHERE Id =$id";
 	$result=$conn->query($sql) or die($conn->error);
  	$row=$result->fetch_assoc();

      $firstname=$row["Firstname"];
      $lastname=$row["Lastname"];
      $email=$row["email"];
      $Admission_no=$row["Admission_no"];
 }
 if (isset($_POST["save"])){
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
	

	$sql="UPDATE studentdata SET Firstname='$firstname',Lastname='$lastname',email='$email',Admission_no='$Admission_no'WHERE Id='$id'";
	  $a=$conn->query($sql) or die($conn->error);
       if ($a===TRUE) {
        # code...
         echo "update successful";
        header('Location:liststudent.php');
         }
     } else{echo "Please input valid details";}

}
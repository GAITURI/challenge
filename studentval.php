<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="schooldata";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);



// $sql="CREATE TABLE studentsdata(
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
//   echo "table not created";
// }else{
//   echo "table created:". $conn->error;
 
// }

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
$stmt;
$stmt="";
$email="";
$emailErr="";

if (isset($_POST['save'])){

  $id=$_POST["id"];
  $firstname = $_POST["firstName"];
  $Lastname = $_POST["Lastname"];
  $email = $_POST["email"];
  $Admission_number= $_POST["Admission_no"];
  $Date=$_POST["reg_date"];


  if (empty($_POST['firstName'])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname=filter_var($firstName, FILTER_SANITIZE_STRING);
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
  
if (empty($_POST["email"])) {
  # code...
  $email ="email is required";

 }else{

 } $email=$_POST["email"];
  $email=filter_var($email,FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $email="valid email" ;
    } else {
         $emailErr ="Invalid email format";
        }


  
  if (empty($_POST["Admission_no"])) {
  	# code...
  	$integerErr="integer is required";
  }else{
  	
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



if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr)&& empty($Admission_noErr)) 
  # code...

 
{
//statement
// $stmt=$conn->prepare("Insert INTO studentsdata(Firstname ,Lastname,email,Admission_no,reg_date)VALUES(?,?,?,?,?)");
// $stmt->bind_param("sssii",$firstname,$Lastname,$email,$Admission_number,$Date); 
// $stmt->execute();
 # code...

echo "new Data Created Successfuly";

  }else{
  echo  "something went wrong";
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}  
?>
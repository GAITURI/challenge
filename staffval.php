<?php
// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schoolData";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);



//Define Empty Varibales
  $id="";
  $firstName="";
  $Lastname="";
  $employeeid = "";
  $gender = "";
  $admission_number="";
  $salary="";
  $date="";
  $firstnameErr="";
  $lastnameErr="";
  $employeeiderr="";
  $gendererr="";
  $admission_numbererr="";
  $salaryerr="";
  $iderr="";
  $integerErr="";
  $stmt="";
  $update="";


  
if (isset($_POST['save'])){
  // /capture users input
   
  $id=$_POST['id'];
  $firstName = $_POST['firstname'];
  $Lastname = $_POST['Lastname'];
  $employeeid = $_POST['employeeid'];
  $gender = $_POST['gender'];
  $admission_number= $_POST['admission_number'];
  $salary=$_POST['salary'];
  $date=$_POST['reg_date'];

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    // $firstname = test_input($_POST["firstname"]);
    $firstName=filter_var($firstName, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  

  if (empty($_POST["Lastname"])) {
    $lastnameErr = "Name is required";
  } else {
    // $lastname = test_input($_POST["Lastname"]);
    $Lastname=filter_var($Lastname, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Lastname)) {
      $LastnameErr = "Only letters and white space allowed";
    }
  }
  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  //   $email=filter_var($email, FILTER_SANITIZE_EMAIL);
  //   // check if e-mail address is well-formed
  //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //     $emailErr = "Invalid email format";
  //   }
  // }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    // $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["id"])) {
    # code...
    $integerErr="integer is required";
  }else{
    // $id=test_input($_POST["id"]);
    // $integer=filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
    //filter integer
      # code...
    if (filter_var($id, FILTER_VALIDATE_INT) ===0 || !filter_var($id, FILTER_VALIDATE_INT) === false )
     {
      $iderr="";
    }
    else
      {
        $iderr="integer is not valid";
      }
  }
if (empty($_POST["admission_number"])) {
    # code...
    $integerErr="integer is required";
  }else{
    // $admission_number=test_input($_POST["admission_number"]);
    // $integer=filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
    // filter integer
      // code...

    if (filter_var($admission_number, FILTER_VALIDATE_INT) ===0 || !filter_var($admission_number, FILTER_VALIDATE_INT) === false )
     {
      $admission_numbererr="";
    }
    else
      {
        $admission_numbererr="integer is not valid";
      }
  }
if (empty($_POST["employeeid"])) {
    # code...
    $integerErr="integer is required";
  }else{
    // $employeeid=test_input($_POST["employeeid"]);
    // $integer=filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
    //filter integer
      # code...
    if (filter_var($employeeid, FILTER_VALIDATE_INT) ===0 || !filter_var($employeeid, FILTER_VALIDATE_INT) === false )
     {
      $employeeiderr="";
    }
    else
      {
        $employeeiderr="integer is not valid";
      }
  






}
}
if (empty($firstnameErr) && empty($lastnameErr) &&empty($employeeiderr)&&empty($genderErr)&& empty($salaryerr) &&empty($admission_numbererr)) 
  # code...

 
{
// prepare and bind
$stmt=$conn->prepare("Insert INTO staffdata(id, Lastname,Firstname, Employeeid,Gender,Admission_number,Salary,reg_date)VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("issisiii",$id,$Lastname,$firstName,$employeeid,$gender,$admission_number,
$salary,$date);
 
 // $firstName=$firstName;
 // $lastname=$lastname;
 // $id=$id;
 // $Employeeid=$Employeeid;
 // $Gender=$Gender;
 // $Admission_number=$Admission_number;
$stmt->execute();
echo "new Data Created Successfuly";
$stmt->close();
  }






?>
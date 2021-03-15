<?php
if (isset($_POST['update'])) {}
  # code...
  $id =$_POST['id'];

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstName=$_POST["firstname"];

    // $firstname = test_input($_POST["firstname"]);
    $firstName=filter_var($firstName, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  

  if (empty($_POST["Lastname"])) {
    $LastnameErr = "Name is required";
  } else {
    $Lastname=$_POST["Lastname"];
    // $lastname = test_input($_POST["Lastname"]);
    $Lastname=filter_var($Lastname, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Lastname)) {
      $LastnameErr = "Only letters and white space allowed";
    }
  }
  


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {

    $gender = $_POST["gender"];
  }

  if (empty($_POST["id"])) {
    # code...
    $integerErr="integer is required";
  }else{
     $id=$_POST["id"];
    
     $id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    //filter integer
      # code...
    if (filter_var($id, FILTER_VALIDATE_INT) ===0 || !filter_var($id, FILTER_VALIDATE_INT) === false )
     {
      $id="id is valid";
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
    $admission_number=$_POST["admission_number"];
    $admission_number=filter_var($admission_number, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($admission_number, FILTER_VALIDATE_INT) ===0 || !filter_var($admission_number, FILTER_VALIDATE_INT) === false )
     {
      $admission_number="valid admission_number";
    }
    else
      {
        $admission_numbererr="integer is not valid";
      }
  }
if (empty($_POST["Employeeid"])) {
    # code...
    $integerErr="integer is required";
  }else{
    $employeeid=$_POST["Employeeid"];
    $employeeid=filter_var($employeeid, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($employeeid, FILTER_VALIDATE_INT) ===0 || !filter_var($employeeid, FILTER_VALIDATE_INT) === false )
     {
      $employeeiderr="";
    }
    else
      {
        $employeeiderr="integer is not valid";
      }

if (empty($_POST['salary'])) {
  # code...
  $salaryerr="NO DATA ENTERED";

}else{
  $salary=$_POST["salary"];
$salary=filter_var($salary, FILTER_SANITIZE_NUMBER_INT);
    // validate integers
    
    if (filter_var($salary, FILTER_VALIDATE_INT) ===0 || !filter_var($salary, FILTER_VALIDATE_INT) === false )
     {
      $salary="Salary is valid";
    }
    else
      {
        $salaryerr="integer is not valid";
      }
}
}


if (empty($firstnameErr) && empty($lastnameErr) &&empty($employeeiderr)&&empty($genderErr)&& empty($salaryerr) &&empty($admission_numbererr)){}
  # code...<?php
// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schooldata";

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
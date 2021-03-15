<?php
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
   $LastnameErr="";
  $employeeiderr="";
  $gendererr="";
  $admission_numbererr="";
  $salaryerr="";
  $iderr="";
  $integerErr="";
  $stmt="";
  $update="";
$empid="";
$id=5;
$passport="";
$a="";



if (isset($_GET['edit'])) {
  $id=$_GET['edit'];


  $sql ="SELECT* FROM staffdata WHERE id=$id";
  $result=$conn->query($sql) or  die($conn->error);
  $row=$result->fetch_assoc();
  $firstName = $row["Firstname"];
  $Lastname = $row['Lastname'];
  $employeeid = $row['Employeeid'];
  $gender = $row['Gender'];
  $admission_number= $row['Admission_number'];
  $salary=$row['Salary'];
  $date=$row['reg_date'];

}
if (isset($_POST['update'])) {
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


if (empty($firstnameErr) && empty($lastnameErr) &&empty($employeeiderr)&&empty($genderErr)&& empty($salaryerr) &&empty($admission_numbererr)){
  # code...

  $sql= "UPDATE staffdata SET 
  id='.$id.',Lastname='.$Lastname.',
 Firstname='.$firstName.',Employeeid='.$employeeid.',Gender='.$gender.',Admission_number='.$admission_number.',Salary='.$salary.',reg_date='.$date.' WHERE id= '$id' ";  
 $a=$conn->query($sql) or die ($conn->error);
 if ($a===TRUE) {
   # code...
  echo "update SUCCESSFUL";
  header('Location:liststaff.php');
 }
}
 else{
  echo "something gone wrong";
 }


}

?>
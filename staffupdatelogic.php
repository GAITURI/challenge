<?php
//create connection with db
$conn = mysqli_connect("localhost","root","","schooldata");
// if ( mysqli_connect_errno() ) {
//   // If there is an error with the connection, stop the script and display the error.
//   exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }else{
//   echo "conn successful";
// }
//variables
$firstname=$lastname=$email=$employeeid=$salary=$gender="";
$fnameerr=$lnameerr=$emailerr=$employeeiderr=$salaryerr=$gendererr="";
$id="3";
$result='';
$row="";
$passport="";
if (isset($_GET['edit'])) {
  # code...
  $id=$_GET['edit'];

  $sql="SELECT * FROM staffdata  WHERE Id=$id";
    $result=$conn->query($sql) or die($conn->error);
  
   $row=$result->fetch_assoc(); 
      $firstname=$row["Firstname"];
      $lastname=$row["Lastname"];
      $email=$row["Email"];
      $employeeid=$row["Employee_id"];
      $gender=$row["Gender"];
      $salary=$row["Salary"];
      $passport=$row["Passport"];

}
if (isset($_POST['save'])) {
  # code...
//verifying and cleaning data
        if (empty($_POST["firstname"])) {
    # code...
            $fnameerr="firstname required";
               }else{
                   $firstname=$_POST["firstname"];
                  $firstname=filter_var($firstname, FILTER_SANITIZE_STRING);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
               $fnameerr = "Only letters and white space allowed";header("location:error.php");
                                                               }
                     }
         if (empty($_POST["lastname"])) {
                           # code...
          $lnameerr="Lastname is required";
            }else{
              $lastname=$_POST["lastname"];
              $lastname=filter_var($lastname,FILTER_SANITIZE_STRING);
               if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
               $lnameerr = "Only letters and white space allowed";}header("location:error.php");

            }               
         if (empty($_POST["email"])) {
              # code...
              $emailerr="Email is required";
            }else{
              $email=$_POST["email"];
              $email=filter_var($email,FILTER_SANITIZE_EMAIL);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
              $email=$_POST["email"];
            }else{
              $emailerr="invalid email";
              }
            }

          if (empty($_POST["employeeid"])) {
            # code...
            $employeeiderr="EMPLOYEE ID IS REQUIRED";
          }else{
            $employeeid=$_POST["employeeid"];
            $employeeid=filter_var($employeeid,FILTER_SANITIZE_NUMBER_INT);
            // validate integers
    if (filter_var($employeeid, FILTER_VALIDATE_INT) === 0 || !filter_var($employeeid, FILTER_VALIDATE_INT) === false) {
      $employeeid=$_POST["employeeid"];
      } else {
        $employeeiderr="ID is invalid";header("location:error.php");
      }
    }

      if (empty($_POST["salary"])) {
            # code...
            $salaryerr="Salary Value is required";
          }else{
            $salary=$_POST["salary"];
            $salary=filter_var($salary,FILTER_SANITIZE_NUMBER_INT);
            // validate integers
    if (filter_var($salary, FILTER_VALIDATE_INT) === 0 || !filter_var($salary, FILTER_VALIDATE_INT) === false) {
         $salary=$_POST["salary"];
      } else {
        $salaryerr="Salary is invalid";header("location:error.php");
      }
    }
     

     if (empty($_POST["gender"])) {
    # code...
    $gendererr="staff's gender is required";
  }else{
    $gender=$_POST["gender"];
  }   
// /captures users input
  $passport = $_FILES['passport']['name'];
   # code...
    // this variable is for the path of the image storage
  $target = "staffphoto/" .basename($_FILES['passport']['name']);  
    $temp=$_FILES['passport']['tmp_name'];
    move_uploaded_file($temp,$target);

    if (empty(($fnameerr) &&(lnameerr) &&(emailerr) &&(employeeiderr) &&(salaryerr) &&(gendererr)    )) {
      # code...
   $sql="UPDATE staffdata SET Firstname='$firstname',Lastname='$lastname',Gender='$gender',Employee_id='$employeeid',Email='$email',Salary='$salary',Passport='$passport' WHERE id='$id' ";
   $a=$conn->query($sql) or die($conn->error);
      if ($a===TRUE) {
        # code...
        echo "update successful";
        header('Location:liststaff.php');
  
      }


  

      }
      else{echo "Please input valid details";}






    }



















?>
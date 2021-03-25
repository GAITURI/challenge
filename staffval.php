<?php
$conn = mysqli_connect("localhost","root","","schooldata");
$firstname=$lastname=$email=$employeeid=$salary=$gender="";
$fnameerr=$lnameerr=$emailerr=$employeeiderr=$salaryerr=$gendererr="";
$id="1";
$result='';
$row="";
$passport="";

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
               $fnameerr = "Only letters and white space allowed";
                                                               }
                     }
         if (empty($_POST["lastname"])) {
                           # code...
          $lnameerr="Lastname is required";
            }else{
              $lastname=$_POST["lastname"];
              $lastname=filter_var($lastname,FILTER_SANITIZE_STRING);
               if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
               $lnameerr = "Only letters and white space allowed";}

            }               
         if (empty($_POST["email"])) {
              # code...
              $emailerr="Email is required";
            }else{
              $email=$_POST["email"];
              $email=filter_var($email,FILTER_SANITIZE_EMAIL);
              if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
              $emailerr="Invalid email" ;}
            }
          if (empty($_POST["employeeid"])) {
            # code...
            $employeeiderr="EMPLOYEE ID IS REQUIRED";
          }else{
            $employeeid=$_POST["employeeid"];
            $employeeid=filter_var($employeeid,FILTER_SANITIZE_NUMBER_INT);
            // validate integers
    if (filter_var($employeeid, FILTER_VALIDATE_INT) === 0 || filter_var($employeeid, FILTER_VALIDATE_INT) === false) {
      $employeeiderr="ID is invalid";
      } 
    }

      if (empty($_POST["salary"])) {
            # code...
            $salaryerr="Salary Value is required";
          }else{
            $salary=$_POST["salary"];
            $salary=filter_var($salary,FILTER_SANITIZE_NUMBER_INT);
            // validate integers
    if (filter_var($salary, FILTER_VALIDATE_INT) === 0 || filter_var($salary, FILTER_VALIDATE_INT) === false) {
      $salaryerr="Value is invalid";
      } 
    }
     

     if (empty($_POST["gender"])) {
    # code...
    $gendererr="staff's gender is required";
  }else{
    $gender=$_POST["gender"];
  }   
// /captures users input
  // $movie_poster = $_FILES['moviePoster']['name'];
    # code...
  $passport = $_FILES['passport']['name'];
   # code...
    // this variable is for the path of the image storage
  $target = "staffphoto/" .basename($_FILES['passport']['name']);  
    $temp=$_FILES['passport']['tmp_name'];
    move_uploaded_file($temp,$target);

    if (empty(($fnameerr) &&($lnameerr) &&($emailerr) &&($employeeiderr) &&($salaryerr) &&($gendererr)    )) {



// prepare and bind
$stmt=$conn->prepare("INSERT INTO staffdata(Firstname, Lastname, Gender, Employee_id, Email, Salary, Passport)VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("sssisis",$firstname,$lastname,$gender,$employeeid,$email,$salary,$passport);
 
$stmt->execute();
echo "new Data Created Successfuly";
$stmt->close();
}  


}



?>
<?php
if(isset($_POST['update']))
{
   echo "lkj";
} else {

  echo update();
}

function update(){
  $servername = "localhost";
  $dbname = "schooldata";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // get staff data 
  $id = $_POST["id"];
  $staff_query = "
    SELECT * FROM staffdata
    WHERE id = $id
  ";

  $staff = $conn -> query($staff_query) -> fetch_assoc();

  // staff does not exist, nowhere to update
  if(!$staff){
    return 'Who are you?';
  } 

  // create and refine data
  $data = (object) array();

  //cannot be updated
  $data -> id = $staff["id"];
  $data -> reg_date = $staff["reg_date"];

  //can be updated if provided, otherwise, keep old data
  $data -> firstname = $_POST["firstname"];
  $data -> lastname = $_POST["lastname"];
  $data -> employee_id = $_POST["employee_id"];
  $data -> admission_number = $_POST["admission_number"];
  $data -> salary = $_POST["salary"];
  
  switch ($data) {
    case $data -> firstname == "":
      $data -> firstname = $staff["firstname"];

    case $data -> lastname  == "":
      $data -> lastname = $staff["lastname"];

    case $data -> employee_id  == "":
      $data -> employee_id = $staff["employee_id"];

    case $data -> admission_number == "":
      $data -> admission_number = $staff["admission_number"];

    case $data -> salary  == "":
      $data -> salary = $staff["salary"];

    default:
      $data -> id = $staff["id"];
      $data -> reg_date = $staff["reg_date"];
      $data -> updated_at = date("m-d-Y h:i:s a", time());
      break;
  }

  $id = $data -> id;
  $firstname = '"' . $data -> firstname . '"';
  $lastname = '"' . $data -> lastname . '"';
  $employee_id = $data -> employee_id;
  $admission_number = $data -> admission_number;
  $salary = $data -> salary;
  $reg_date =  '"' . $data -> reg_date .  '"';

  $update_request = "
    UPDATE staffdata SET
      firstname = $firstname,
      lastname = $lastname,
      employee_id = $employee_id,
      admission_number = $admission_number,
      salary = $salary,
      reg_date = $reg_date,
      updated_at = CURRENT_TIME" . '()' . "
    WHERE id = $id
   ";
  $update = $conn -> query($update_request);
  
  echo 'You have updated for staff with employment id: ' . $employee_id;
  if(!$update){
    return "something gone wrong";
  }
}
?>
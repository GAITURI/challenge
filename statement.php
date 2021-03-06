<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="schoolData";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);
// // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

//check if submit button is clicked
if (isset($_POST['save'])) {
	# code...


	 # code...
// prepare and bind
$stmt=$conn->prepare("Insert INTO staffdata(id, Lastname,Firstname, Employeeid,Gender,Admission_number,Salary,reg_date)VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("issisiii",$id,$lastname,$firstName,$Employeeid,$Gender,$Admission_number,
$Salary,$Date);

//capture users input
  $id=$_POST["id"];
   $firstName = $_POST["firstname"];
  $lastname = $_POST["Lastname"];
  $Employeeid = $_POST["employeeid"];
  $Gender = $_POST["gender"];
  $Admission_number= $_POST["admission_number"];
  $Salary=$_POST["salary"];
  $Date=$_POST["reg_date"];
  $stmt->execute();

   echo "NEW DATA INSERTED";

$stmt->close();
 $conn->close();

}



?>


<!DOCTYPE html>
<html>
<head>
 
  <title></title>
</head>
<body>
</body>
</html>
<?php require 'staff.php'; ?>

<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="schooldata";


$conn="";
$update='';
//update function
// $id=($_GET['edit'])

// $update=true;

// $result=$conn->query("SELECT FROM staffdata E")



// // use mysqli extension to connect to database
mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['update'])) {
	# code...

  $id="";
  $firstName="";
  $Lastname="";
  $employeeid = "";
  $gender = "";
  $admission_number="";
  $salary="";
  $date="";
  $row="";
  $update="";
  $mysql_query="";
 
  $id=$_POST['id'];
  $firstName = $_POST['firstname'];
  $Lastname = $_POST['Lastname'];
  $employeeid = $_POST['employeeid'];
  $gender = $_POST['gender'];
  $admission_number= $_POST['admission_number'];
  $salary=$_POST['salary'];
  $date=$_POST['reg_date'];


 $sql= "UPDATE staffdata SET 
	id='.$id.',Lastname='.$Lastname.',
 Firstname='.$firstName.',Employeeid='.$employeeid.',Gender='.$gender.',Admission_number='.$admission_number.',Salary='.$salary.',reg_date='.$date.' WHERE Lastname= 'Gaituri' ";  
$retval= ($sql);
if (!$retval) {
	# code...
	die('could not update data:' . mysql_error());
}else{
	echo "update successful\n";
}


}
// header('location: indexdisplay.php')
?>
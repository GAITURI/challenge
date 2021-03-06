<?php require 'staff.php'?>;
<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="schoolData";


$conn="";
$update='';

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


$sql=mysql_query("UPDATE staffdata SET 
	id='.$id.',Lastname='.$Lastname.',
 Firstname='.$firstName.',Employeeid='.$employeeid.',Gender='.$gender.',Admission_number='.$admission_number.',Salary='.$salary.',reg_date='.$date.' WHERE id='.37643138.' ");  
$retval= mysql_query($conn,$sql);
if (!$retval) {
	# code...
	die('could not update data:' . mysql_error());
}else{
	echo "update successful\n";
}


}

?>
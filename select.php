<?php require 'staff.php'; ?>


<?php


// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schoolData";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }else{
// 	echo "Connection successful";
// }
$sql="SELECT id, Lastname, Firstname, Employeeid, Gender, Admission_number, Salary, reg_date FROM staffdata WHERE id='555' ";
$result=$conn->query($sql);

if ($results ->num_rows> 0) {
	# code...
	while($row = $result->fetch_assoc()) {
	echo "id: " . $row["id"]. " -last Name: " . $row["Lastname"]. "-first Name: " . $row["Firstname"].  "Employeeid:". $row["Employeeid"]. "<br>";
}

}else {
  echo "0 results";
}
// $conn->close();



?>
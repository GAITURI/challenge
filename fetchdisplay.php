<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/ bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Fetch And Display</title>
</head>
<body>


		<?php
// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schoolData";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);

//capture variables
$results="";





$sql="SELECT id, Lastname, Firstname, Employeeid, Gender, Admission_number, Salary, reg_date FROM staffdata WHERE Lastname='Bry' ";
$result=$conn->query($sql);
echo
     '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">firstName</font> </td> 
          <td> <font face="Arial">Lastname</font> </td> 
          <td> <font face="Arial">employeeid</font> </td> 
          <td> <font face="Arial">Gender</font> </td> 
           <td> <font face="Arial">Admission_number</font> </td> 
            <td> <font face="Arial">salary</font> </td> 
             <td> <font face="Arial">date</font> </td> 


      </tr>';

if ($result->num_rows> 0) {
	# code...
	while($row = $result->fetch_assoc()) {
 
  $id=$row['id'];
  $firstName=$row['Firstname'];
  $Lastname=$row['Lastname'];
  $employeeid =$row['Employeeid'];
  $gender =$row['Gender'];
  $admission_number=$row['Admission_number'];
  $salary=$row['Salary'];
  $date=$row['reg_date'];

  echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$firstName.'</td> 
                  <td>'.$Lastname.'</td> 
                  <td>'.$employeeid.'</td> 
                  <td>'.$gender.'</td>
                  <td>'.$admission_number.'</td> 
                  <td>'.$salary.'</td> 
                  <td>'.$date.'</td> 

              </tr>';

	}

}else {
  echo "0 results";
}

?>



</body>
</html>






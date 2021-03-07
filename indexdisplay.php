<!DOCTYPE html>
<html>
<head>
	bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>indexdisplay.php</title>
</head>
<body>
		<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "schooldata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}else{
	echo "connectionsuccessful";
}
?>
 <div class="container" >
 	<tbody>
  <thead class="thead-dark">
    <tr>
     <th scope="col">id</th>
    <th scope="col">Firstname</th>
    <th scope="col">lastname</th>
    <th scope="col">employeeid</th>
    <th scope="col">Gender</th>
    <th scope="col">Admission_number</th>
    <th scope="col">salary</th>
    <th scope="col">Date</th>
  </tr>
  </thead>
  </tbody>
  </div>
  

   <?php
   while ($row=$retval->fetch_assoc()):
      # code...

    ?>
 
<table>
	<tbody>
	<tr>
      
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['Lastname']; ?></td>
      <td><?php echo $row['employeeid']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['admission_number']; ?></td>
      <td><?php echo $row['salary']; ?></td>
      <td><?php echo $row['reg_date']; ?></td>
      <td>
      	<a href="public/staff.php?edit=<?php echo $row['id'];  ?>" type="button" value="edit" name="edit" class="btn btn-warning">Edit</a>
      	<a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" type="button" name="delete">Delete</a>
      </td>

    </tr>
    
  </tbody>
</table>

</body>
</html>
$conn->close;
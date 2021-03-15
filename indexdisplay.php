<!DOCTYPE html>
<html>
<head>
	
	<title>indexdisplay.php</title>
</head>
<body>
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schooldata";



$retval="";
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
  <table class="table">
   
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
  
  <tbody>
    <?php
  while ($row = $retval->fetch_assoc()):
      # code...
    ?>

  
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
        <a href="staff.php " type="button" value="edit" name="edit" class="btn btn-warning">Edit</a>
        <a href="index.php" class="btn btn-danger" type="button" name="delete">Delete</a>
      </td>

    </tr>
   <?php
 endwhile;
   ?> 
  </tbody>

 	
 

</table>
 </div> 
</body>

</html>
<?php $conn->close;?>
<?php
// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schooldata";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}else{echo "connection successful";}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LISTDATA</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">
  <table class="table table-dark table-hover" >
    <thead>
      
      <tr>
        <th>no</th>
         <th>FIRSTNAMe</th>  
          <th>LASTNAME</th>
             <th>Admission_no</th>
              <th>EMAIL</th>
              <th colspan="2">Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php

      while($row = $result->fetch_assoc()):
        # code...
       ?>
       <tr>
        
         <td><?php echo $row['Id']; ?></td>
         <td><?php echo $row['Firstname']; ?></td>
         <td><?php echo $row['Lastname']; ?> </td>
         <td><?php echo $row['Admission_no']; ?> </td>
         <td><?php echo $row['email']; ?> </td>
         
        
        <td>
          <a href="studentupdateform.php?edit=<?php echo $row['Id'];  ?>" type="button" value="edit" name="edit" class="btn btn-warning">Edit</a>
        <a href="liststudent.php?delete=<?php echo $row['Id']; ?>" class="btn btn-danger" type="button" name="delete">Delete</a>
        </td>

       </tr>
       <?php
     endwhile;
     ?>

     <?php
      if (isset($_GET['delete'])) {
         # code...
          $id = $_GET['delete'];
          //sql query
          $conn->query("DELETE FROM staffdata where id=$id") or die($conn->error);

          echo "deleted";
          header('Location: liststudent.php');
       }

    ?>
    </tbody>
  </table>
</div>
</body>
</html>
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

<?php 
$sql="SELECT id, Lastname, Firstname, Employeeid, Gender, Admission_number, Salary, reg_date FROM staffdata" ;
$result =$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>
</head>
<body>
<h3>STAFFDATA</h3>
<div class="container">
  <table class="table table-dark table-hover" >
    <thead>
      <tr>
        <th>no</th>
         <th>FIRSTNAME</th>  
          <th>LASTNAME</th>
           <th>EMPLOYEE ID</th>
            <th>GENDER</th>
             <th>ADMISSION_NO</th>
              <th>SALARY</th>
              <th colspan="2">Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php

      while($row = $result->fetch_assoc()):
        # code...
       ?>
       <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['Firstname']; ?></td>
         <td><?php echo $row['Lastname']; ?> </td>
         <td><?php echo $row['Employeeid']; ?> </td>
         <td><?php echo $row['Gender']; ?> </td>
         <td><?php echo $row['Admission_number']; ?> </td>
         <td><?php echo $row['Salary']; ?> </td>
         <td>
        <a href="staffupdateform.php?edit=<?php echo $row['id'];  ?>" type="button" value="edit" name="edit" class="btn btn-warning">Edit</a>
        <a href="liststaff.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" type="button" name="delete">Delete</a>
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
          header('Location: liststaff.php');
       }

    ?>
    </tbody>
  </table>
</div>

</body>
</html>


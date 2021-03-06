<!DOCTYPE html>
<html>
<head>
	<title>Movie Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php   require 'public/connection.php';  ?>
	<!-- Jumbotron -->
	<div class="container-fluid" id="divMain">
		<div class="jumbotron">
			<div class="container container-fluid">
				<img src="images/images.png">
  <p class="alert alert-info">Real and Reel : Buy One get Two Free</p>
  <a class="btn btn-primary btn-lg" href="public/upload.html" role="button">Upload Movie</a>
  <br><br>
  <div class="container">
        <form action="index.php" method="post">

      <div class="row">
           <div class="col">
               <select name="search" id="search" class="form-control">
    <option>Filter By Genre</option>
   <option value="Action">Action</option>
   <option value="Comedy">Comedy</option>
   <option value="Drama">Drama</option> 
  </select>
           </div>
           <div class="col">
               <input type="submit" name="filter" value="x" class="btn btn-info">
           </div>
      </div>
    </form>
  </div>
			</div>

</div>
	</div>

	<br>

   <!-- connecting to db -->
   <?php

   // $searchValue = '';

   //fetch the search input
   // if (isset($_POST['filter'])) {
   //   # code...
   //    $searchValue = $_POST['search'];

   // }

    $sql = "SELECT id, moviename, leadactor , genre FROM users ORDER BY genre ASC";

  // $sql = "SELECT id, moviename, leadactor , genre FROM users WHERE genre='$searchValue'";
  $result = $conn->query($sql);
  // header('Location: public/about.html ')
  ?>
  
	<div class="container container-fluid">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Movie Name</th>
      <th scope="col">Time</th>
      <th scope="col">Lead Actor</th>
      <th scope="col">Movie Poster</th>
      <th scope="col">Genre</th>
      <th scope="col">Rating</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     while ($row = $result->fetch_assoc()):
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'];   ?></th>
      <td><?php echo $row['moviename'];   ?></td>
      <td>2</td>
      <td><?php echo $row['leadactor'];   ?></td>
      <td><img src="images/avengers.jpg" width="100px" height="100px"></td>
      <td><?php echo $row['genre'];   ?></td>
      <td>PG</td>
      <td>
      	<a href="public/upload.php?edit=<?php echo $row['id'];  ?>" type="button" value="edit" name="edit" class="btn btn-warning">Edit</a>
      	<a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" type="button" name="delete">Delete</a>
      </td>

    </tr>
    <?php
      endwhile;
    ?>
    
    <?php
       //delete 
       if (isset($_GET['delete'])) {
         # code...
          $id = $_GET['delete'];
          //sql query
          $conn->query("DELETE FROM users where id=$id") or die($conn->error);

          echo "deleted";
          header('Location: index.php');
       }

    ?>





  </tbody>

</table>
	</div>



<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>






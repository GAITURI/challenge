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
			</div>

</div>
	</div>

	<br>
   <!-- connecting to db -->
   <?php

  $sql = "SELECT id, moviename, leadactor , genre FROM users";
  $result = $conn->query($sql);
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
      	<button class="btn btn-primary">Edit</button>
      	<button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php
      endwhile;
    ?>

  </tbody>

</table>
	</div>



<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



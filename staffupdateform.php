<?php require 'staffupdatelogic.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>STAFFUPDATEFORM</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="logincss/style.css">

  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

</head>
<body>
	<div class="login">
    <h1>STAFFS' FORM</h1>
		<form method='POST' >
  	<label for="firstname">
  		<i class="fas fa-user"></i>
  	</label>
  		<input type="text" name="firstname"  placeholder="Enter First name" value="<?php echo $firstname;?>">
        <span class="error"><?php echo $fnameerr ?></span>
        <br>
    <label for="lastname">
  		<i class="fas fa-user"></i>
  	</label>
  		<input type="text" name="lastname" placeholder="Enter last name" value="<?php echo $lastname;?>">
      <span class="<?php echo $lnameerr; ?>"></span>
  	<label for="email">
  		<i class="fas fa-email"></i>
  	</label>
  		<input type="text" name="email"  placeholder="Enter email"  value="<?php echo $email;?>">
      <span class="error"><?php echo $emailerr;?></span>	
  <label for="employeeid">
  		<i class="fas fa-user"></i>
  	</label>
  		<input type="text" name="employeeid" placeholder="Enter your employeeid" value="<?php echo $employeeid;?>">
      <span class="error"><?php echo $employeeiderr;?></span>
  	<label for="salary">
  		<i class="fas fa-user"></i>
  	</label>
  		<input type="text" name=salary  placeholder="Enter salary" value="
      <?php echo $salary;?>">
      <span class="error"><?php echo $salaryerr;?></span>
  	
  	<label for="gender">
  		<i class="fas fa-gender"> </i>
  	</label>
  		<select id="gender" name="gender" value="<?php echo $gender;?>">
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            	<option value="Binary">Binary</option>
            </select>	
          <span class="error"><?php echo $gendererr;?></span>
    <label for="passport">
      <i class="fas fa-user"> </i>
    </label>
      <input type="file"  name="passport" id="passport"  placeholder="Staff's passport photo" value=""><br><br>
      <img src="staffphoto/<?php echo $passport;?>" style="height:100px;width:100px;">        
 	<input type="submit" name="save" value="UPDATE">
</form>
	</div>
	

</body>
</html>
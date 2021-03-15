<?php include 'staffupdatelogic.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>STAFFUPDATE</title>
</head>
<body>
	<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Staff Form</h2>
								<span class="byline">"We Keep on shining!"</span>
							</header>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
	
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="id" class="form-group">ENTER ID NO</label>
				<input type="VARCHAR" name="id" class="form-control" >
				<span class="error"><?php echo $iderr; ?></span>
				<input type="hidden" name="id" value="<?php echo $id;?>">
			</div>
			<div class="col-md-6 form-group">
				<label for="firstName" class="form-group">Fill in Firstname</label>
				<input type="text" name="firstname" class="form-control">
				<span class="error"> <?php echo $firstnameErr;?></span>

			</div>
		</div>
		<div class="row">
			<div class="col-6 form-group">
				<label for="lastname" class="form-group">ENTER Lastname</label>
				<input type="text" name="Lastname" class="form-control" value="<?php echo $Lastname; ?>">
				
				<span class="error"><?php echo $LastnameErr; ?></span>
			</div>
			<div class="col-6 form-group">
				<label for="employeeid" class="form-group">Fill in Employeeid</label>
				<input type="VARCHAR" name="Employeeid" class="form-control" value="<?php echo $employeeid; ?>">
				
				 <span class="error"><?php echo $employeeiderr; ?></span> 
			</div>
		</div>
		<div class="row">
			<div class="col-6 form-group">
				<!-- <label for="gender" class="form-group">ENTER GENDER</label> -->
				
            <select id="gender" name="gender" class="form-control">
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            	<option value="Binary">Binary</option>
            </select><?php echo $gender; ?>
         	<span class="error" ><?php echo $gendererr; ?></span> 
            
				
			</div>
			<div class="col-6 form-group">
				<label for="admission_number" class="form-group">Fill in Admission number</label>
				<input type="VARCHAR" name="admission_number" class="form-control" value="<?php echo $admission_number ; ?>">
				
			 <span class="error"><?php echo  $admission_numbererr; ?> </span> 
			</div>

		</div>
		<div class="row">
			<div class="col-6">
				<label for="date" class="form-group">
					Select Date
				</label>
				<input type="Date" name="reg_date" class="form-control" value="<?php echo $date?>">
				

			</div>
			<div class="col-6">
				<label for="salary" class="form-group">
					Enter SALARY
				</label>
				<input type="VARCHAR" name="salary" class="form-control">
				<?php echo $salary; ?>
				<span class="error"><?php echo $salaryerr ?></span>
			</div>
		 </div>
		  <div class="form-group">
   				 <label for="exampleFormControlTextarea1">Complaints/Recommendations</label>
   			 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
   			 </textarea>
 		 </div>



<div class="row">
	<div class="col-6">
		<input type="submit" name="update" value="UPDATE" class="btn btn-lg btn danger">
	</div>
</div>

		 	
</form>
</section>
</div>

</body>
</html>
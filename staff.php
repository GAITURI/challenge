
<!DOCTYPE HTML>

<html>
	<head>
		<title>Staff</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />

		</noscript>
	</head>
	<body>

<?php require 'staffval.php';?>
	<!-- Header -->
		<div id="header">
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="homepage.php">Homepage</a></li>
						<li class="active"><a href="students.php">Student Page</a></li>
						<li><a href="#">Lost Password</a></li>
						<li><a href="/">Upload Documents</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Mont School</a></h1>
					<span class="tag">Providing Internationally Accredited Education</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>School Activities</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="#">Swimming</a></li>
										<li><a href="#">Archery</a></li>
										<li><a href="#">Martial Art lessons</a></li>
										<li><a href="#">French</a></li>
										<li><a href="#">German Lessons</a></li>
									</ul>
								</section>
								<section class="6u">
									<ul class="default">
										<li><a href="#">Scout Movement</a></li>
										<li><a href="#">Skating Activities</a></li>
										<li><a href="#">Games </a></li>
										<li><a href="#">Music lessons</a></li>
										<li><a href="#">Character Development</a></li>
									</ul>
								</section>
							</div>
						</section>
						<section>
							<header>
								<h2>School Background</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">February 28, 2020 |  (10 )  Comments</p>
									<p><a href="#">The school began as a mission school later ownership was privatised.</a></p>
								</li>
								<li>
									<p class="posted">February 28, 2020  |  (10 )  Comments</p>
									<p><a href="#">
										The school is internationally accredited
									</a></p>
								</li>
							</ul>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Staff Form</h2>
								<span class="byline">"We Keep on shining!"</span>
							</header>
	<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		
	
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="id" class="form-group">ENTER ID NO</label>
				<input type="VARCHAR" name="id" class="form-control" >
				<span class="error"><?php echo $iderr; ?></span>
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
				<input type="text" name="Lastname" class="form-control" >
				<span class="error"><?php echo $lastnameErr; ?></span>
			</div>
			<div class="col-6 form-group">
				<label for="employeeid" class="form-group">Fill in Employeeid</label>
				<input type="VARCHAR" name="employeeid" class="form-control">
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
            </select>
         	<span class="error"><?php echo $gendererr; ?></span> 
            
				
			</div>
			<div class="col-6 form-group">
				<label for="admission_number" class="form-group">Fill in Admission number</label>
				<input type="VARCHAR" name="admission_number" class="form-control">
			 <span class="error"><?php echo  $admission_numbererr; ?> </span> 
			</div>

		</div>
		<div class="row">
			<div class="col-6">
				<label for="date" class="form-group">
					Select Date
				</label>
				<input type="Date" name="reg_date" class="form-control">
			</div>
			<div class="col-6">
				<label for="salary" class="form-group">
					Enter SALARY
				</label>
				<input type="VARCHAR" name="salary" class="form-control">
				<!-- <span class="error"><?php echo $salaryerr ?></span> -->
			</div>
		 </div>
		  <div class="form-group">
   				 <label for="exampleFormControlTextarea1">Complaints/Recommendations</label>
   			 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
   			 </textarea>
 		 </div>
		 	<div class="row" style="margin-bottom: 10px;">
        <?php
      if ($update == true):
        ?>
           <div class="col">
      <input type="submit" name="update" class="btn btn-warning btn-block">
    </div>

    <?php
      else:
        ?>
       
     <input type="submit" name="update" value="Submit" id="update" class="form-control btn btn-primary btn-block">
    </div>
    <div class="col-6">
      <input type="reset" class="form-control btn btn-danger btn-block">
    </div>	
      
    <?php endif; ?>
  </div>
	</form>
						</section>
					</div>

				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;
						The cost of ignorance is more than the cost of Education
					.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">FOR INQUIRY,COMPLIMENTS,SUGGESTIONS AND COMPLAINTS</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>



<?php








?>
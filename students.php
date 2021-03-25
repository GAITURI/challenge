
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
	<title>STUDENTS FORM</title>
</head>
<style type="text/css">
   body{
      background-image:  url('images1/p2.jpg');
      background-repeat: no-repeat;
  /*background-position:auto;*/
  background-size:1380px 700px;}
  input textarea {
  background-color:#966F33 ;
}
    h1,h2{
      font-weight: 600;
      font-size: 200%;
      text-align: center;
      background-color: #966F33;
      font-family: jokerman;
      box-sizing:round;}
.card-item{
  max-width: 430px;
  height: 270px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  z-index: 2;
  width: 100%;

}
  
</style>

<body  >
<?php require 'studentval.php';?>
	
    <caption><h2>STUDENTS ENTRY FORM</h2></caption>
 <!-- <label class="label-success">studeez</label> -->
 <!-- <div class="jumbotron">  -->
  <button class="btn btn-warning"><a href="homepage.php">Back to Homepage</a></button>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
  <div class="form-row">
    <div class="col-md-4 mb-3 form-group">
      <label for="validationServer01">First Name</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="First name" name="firstName"  value="<?php echo  $firstname;?>">
      <span class="error"> <?php echo $firstnameErr;?></span>
      <div class="invalid-feedback">
      Enter First Name
      </div>

    </div>
    
    <div class="col-md-4 mb-3 form-group">
      <label for="validationServer02">Last Name</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Last name"  name="Lastname" value="<?php echo $lastname;?> ">
      <span class="error"> <?php echo $lastnameErr;?></span>
      <div class="invalid-feedback">
      Enter Lastname
      </div>
    </div>
          


    <div class="col-md-4 mb-3 form-group">
      <label for="validationServerUsername">email</label>
      <div class="input-group">
      <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo $email;?>">
      <span class="error"><?php echo $emailErr?>;</span>
        </div>
      </div>
    </div>
  
  <div class="form-row form-group">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Admission_no</label>
      <input type="text" class="form-control " id="validationServer03" placeholder="Admission_no" name="Admission_no" value="<?php echo   $Admission_no;?> ">
      <span class="error"> <?php echo $Admission_noErr;?></span>
      <div class="invalid-feedback">
        Please provide a valid Admission_no.
      </div>
    
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to Have Entered Valid Info
      </label>
      <div class="valid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
   <input type="submit" name="save" value="Submit" id="update" class="form-control btn btn-primary">
</form>
</div>

<br>
<footer>
  <div class="container footer">
        <section>
          <header>
            <h1>Get in Touch with the school via these media accounts for query,compliments and complaints</h1>
          
          </header>
          <div class="row">
            <div class="col-lg-3">
               <ul class="contact">
            <li><a href="#" class="btn btn-secondary"><span>Twitter</span></a></li>
            </div>
            <div class="col-lg-3">
              <li class="acive"><a href="#" class="btn btn-secondary"><span>Facebook</span></a></li>
            </div>
            <div class="col-lg-3">
               <li><a href="#" class="btn btn-secondary"><span>Pinterest</span></a></li>
            </div>
            <div class="col-lg-3">
               <li><a href="#" class="btn btn-secondary"><span>Google+</span></a></li>
            </div>
           
            
           
          </ul>
            
          </div>
         
        </section>
      </div>
    </div>

  <!-- Copyright -->
    <div id="copyright">
     
    </div>

</footer>
</body>
</html>

 
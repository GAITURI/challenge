
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
  .grid-container{
    display: grid;
    grid-template-areas: 
    'header header header header '
  ' left  middle middle right '
  'footer footer footer footer'
  }
.left{
  grid-area: left;
  background-color: orange;

  }  
</style>

<body  >
  <?php
require 'studentval.php';
?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <caption><h2>STUDENTS ENTRY FORM</h2></caption>
 <!-- <label class="label-success">studeez</label> -->
 <!-- <div class="jumbotron">  -->
  <button class="btn btn-warning"><a href="homepage.php">Back to Homepage</a></button>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First Name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" name="firstName" >
      <span class="error"> <?php echo $firstnameErr;?></span>
      <div class="invalid-feedback">
      Enter First Name

      </div>

    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last Name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name"  name="Lastname">
      <div class="invalid-feedback">
      Enter Lastname
      </div>
    </div>
          <span class="error"> <?php echo $lastnameErr;?></span>


    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Gender</label>
      <div class="input-group">
        <!-- <div class="input-group-prepend"> -->
          <!-- <span class="input-group-text" id="inputGroupPrepend3">@</span> -->
        </div>

          <select id="gender" name="gender" class="form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Binary">Binary</option>
            </select>
        <div class="invalid-feedback">
          Please choose Gender.
        </div>

      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Admission_no</label>
      <input type="number" class="form-control is-valid" id="validationServer03" placeholder="Admission_no" name="Admission_no">
      <div class="invalid-feedback">
        Please provide a valid Admission_no.
      </div>
      <span class="error"> <?php echo $Admission_noErr;?></span>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">reg_date</label>
      <input type="date" class="form-control is-valid" id="validationServer04" placeholder="reg_date" >
      <div class="invalid-feedback">
        Please provide a valid reg_date.
      </div>
      <!-- <span class="error"> <?php echo $reg_dateErr;?></span> -->
    </div>
    
  </div>
  <div class="col-6">
      <label><strong>student's passport photo</strong></label>
      <input type="file" class="form-control" name="passport" id="passport"  placeholder="Student's passport photo" required="" value=""><br><br>
      <img src="studentspassportphotos/<?php echo $passport?>" style="height:100px;width: 100px;">
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
  <input type="submit" name="update" class="btn btn-primary form-control"s value="update" >
</form>
</div>
<div class="grid-container">
  <div class="header"> </div>
  <div class="left"></div>
  <div class="midddle"></div>
  <div class="right"></div>
  <div class="footer"></div>
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

 <!-- <?php
// $servername ="localhost";
// $username="root";
// $password ="";
// $dbname ="testMit";
// $date;
// $fullname;
// $grade;
// $phone;

// $sql = "INSERT INTO students (phone_no, fullname,work_role, email,tag_number)
// VALUES ('$phone','$fullname','work_role','$email','tag')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// if (isset($_POST['save'])) {
//  # code...
//  // $fname = $_POST['firstName'];
//  // $email = $_POST['email'];
//  if (empty($_POST['fullname'])) {
//    # code...
//    $errorFirst = "FULLNAME is empty";
//  } else {
//    $fname = $_POST['fullname'];
//  }


//    if (empty($_POST['email'])) {
//    # code...
//    $errorFirst = "Email address is empty";
//  } else {
//    $email = $_POST['email'];
//  }

//  echo "fullname: ".$fname."Email: ".$email;

// if (filter_var($phone, FILTER_VALIDATE_INT) === 0 || !filter_var($phone, FILTER_VALIDATE_INT) === false) {
//   echo("phone is valid");
// } else {
//   echo("Phone is not valid");
// }




// // Remove all illegal characters from email
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// // Validate e-mail
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//   echo("$email is a valid email address");
// } else {
//   echo("$email is not a valid email address");
// }
// //remove all illegal character from work_role
// $work_role = filter_var($work_role, FILTER_SANITIZE_STRING);

// // Validate work_role
// if (!filter_var($work_role, FILTER_VALIDATE_STRING) === false) {
//   echo("$work_role is  valid");
// } else {
//   echo("$work_role is invalid");
// }


// // Remove all illegal characters from a url
// $url = filter_var($url, FILTER_SANITIZE_URL);

// // Validate url
// if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
//   echo("$url is a valid URL");
// } else {
//   echo("$url is not a valid URL");
//}



// }
// $conn->close();//closes the connection




?>
 -->
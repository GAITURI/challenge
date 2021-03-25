<?php
// We need to use sessions, so you should always start sessions using the below code.
// session_start();
// If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
	// header('Location: login.php');
	// exit;
?> 


<?php
$to = "arsenhenry2@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From:gaiturimark@gmail.com" . "\r\n" .
"CC: mwashrae46@gmail.com";

mail($to,$subject,$txt,$headers);
?>
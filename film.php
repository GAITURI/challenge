<?php
include 'connection.php';
// //check if the connection is valid
// if ($conn->connect_error) {
//       die("connection failed" . $conn->connect_error);
//  } else {
//   echo "works";
//  }
//define variables for input
$id = 0;

$movie_name = '';
$lead_actor = '';
$duration = '';
$rateing  = '';
$genre = '';
$update = '';
$update = false;

//fetch users input 
//check if submit is pressed / isset function 
if (isset($_POST['save'])) {

    # code...
 
  //preparing sql statement
  $stmt = $conn->prepare("INSERT INTO users (moviename,leadactor,genre) VALUES (?,?,?)");
  $stmt->bind_param("sss",$movie_name,$lead_actor,$genre);


 //capture users input
  $movie_name = $_POST['movie_name'];
  $lead_actor = $_POST['lead_actor'];
  $duration = $_POST['duration'];
  $rateing = $_POST['rate'];
  $genre = $_POST['genre'];
  $stmt->execute();

  echo "new records inserted";
  //do my output
  // echo "Movie Name is ".''.$movie_name;
  // echo "<br>";
  //   echo "The lead actor is ".''.$lead_actor;
  //   echo "<br>";
  //   echo "The movie is  ".''.$duration." hrs long";
  // echo "<br>";
  // echo "Rating: ".''.$rateing;
  // echo "<br>";
  //   echo "Genre: ".''.$genre;
  $stmt->close();
 $conn->close();

}


// update function
if (isset($_GET['edit'])) {

  # code...
  $id = $_GET['edit'];
  //variable update 
  $update = true;
  //pull requested record 
  $result = $conn->query("SELECT * FROM users WHERE id=$id") or die($conn->error);

  $row = $result->fetch_array();
  $movie_name = $row['moviename']; //column names in db
  $leadactor = $row['leadactor'];
  $genre = $row['genre'];


}

// 
if (isset($_POST['update'])) {
  # code...
  $id = $_POST['id'];
  //define variables for input
  $movie_name = '';
  $lead_actor = '';
  $duration = '';
  $rateing  = '';
  $genre = '';
   //capture users input
  $movie_name = $_POST['movie_name'];
  $lead_actor = $_POST['lead_actor'];
  $duration = $_POST['duration'];
  $rateing = $_POST['rate'];
  $genre = $_POST['genre'];

  $updateSql = "UPDATE users SET moviename='$movie_name',
  leadactor = '$lead_actor', genre = '$genre' WHERE id='$id'";

  $conn->query($updateSql) or die($conn->error);
  echo "update successful";

  header('Location: ../index.php');
}


?>

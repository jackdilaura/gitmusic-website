<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "gitmusic";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['question7'])){
  $a1 = $_POST['email'];
  $a2 = $_POST['name'];
  $a3 = $_POST['question1'];
  $a4 = $_POST['question2'];
  if (isset($_POST['question3'])){
    $a5 = $_POST['question3'];
  }
  else {
    $a5 = '';
  }
  $a6 = $_POST['question4'];
  if (isset($_POST['q5a1'])){
    $a7 = $_POST['q5a1'];
  }
  else {
    $a7='';
  }
  if (isset($_POST['q5a2'])){
    $a8 = $_POST['q5a2'];
  }
  else {
    $a8 = '';
  }
  if (isset($_POST['q5a3'])){
    $a9 = $_POST['q5a3'];
  }
  else {
    $a9 = '';
  }
  if (isset($_POST['q5a4'])){
    $a10 = $_POST['q5a4'];
  }
  else {
    $a10 = '';
  }
  if (isset($_POST['q5a5'])){
    $a11 = $_POST['q5a5'];
  }
  else {
    $a11 = '';
  }
  if (isset($_POST['q6a1'])){
    $a12 = $_POST['q6a1'];
  }
  else {
    $a12 = '';
  }
  if (isset($_POST['q6a2'])){
    $a13 = $_POST['q6a2'];
  }
  else {
    $a13 = '';
  }
  if (isset($_POST['q6a3'])){
    $a14 = $_POST['q6a3'];
  }
  else {
    $a14 = '';
  }
  if (isset($_POST['q6a4'])){
    $a15 = $_POST['q6a4'];
  }
  else {
    $a15 = '';
  }
  $a16 = $_POST['question7'];
  if (isset($_POST['comments'])){
    $a17 = $_POST['comments'];
  }
  else {
    $a17 = '';
  }

  $sql = "INSERT INTO `form2_feedback` (email, name, question1, question2, question3, question4, q5a1, q5a2, q5a3, q5a4, q5a5, q6a1, q6a2, q6a3, q6a4, question7, comments) VALUES ('".$a1."', '".$a2."', '".$a3."', '".$a4."', '".$a5."', '".$a6."', '".$a7."', '".$a8."', '".$a9."', '".$a10."', '".$a11."', '".$a12."', '".$a13."', '".$a14."', '".$a15."', '".$a16."', '".$a17."')";

  if ($conn->query($sql) === TRUE) {
      header("Location: /gitmusic/success.php");
      die();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

?>

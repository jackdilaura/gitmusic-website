<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "gitmusic_site_db";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments'])){
  $a1 = $_POST['email'];
  $a2 = $_POST['name'];
  $a3 = $_POST['comments'];
  $sql = "INSERT INTO `form1_feedback` (email, name, feedback) VALUES ('".$a1."', '".$a2."', '".$a3."')";

  if ($conn->query($sql) === TRUE) {
      header("Location: /gitmusic/success.php");
      die();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

foreach($_POST['posts'] as $post_id) {
  if(isset($_POST["approve"])) {
     $sql = "UPDATE `health`.`posts` SET `approved` = 1 WHERE `posts`.`id` = $post_id";
  } else {
      $sql = "DELETE FROM `health`.`posts` WHERE `posts`.`id` = $post_id";
    }

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    die("Error updating record: " . $conn->error);
}
}

header("Location: admin_content_selection.php");

$conn->close();
?>

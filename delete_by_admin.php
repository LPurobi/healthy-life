<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if($_SESSION["admin"] != "admin") {
  header("Location: home.php?error=Failed");
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

foreach($_POST['posts'] as $post_id) {
  $sql = "DELETE FROM `health`.`posts` WHERE `posts`.`id` = $post_id";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    die("Error updating record: " . $conn->error);
}
}

header("Location: admin_content_selection.php");

$conn->close();
?>

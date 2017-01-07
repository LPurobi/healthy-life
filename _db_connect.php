
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

  $sql = "SELECT * FROM posts";
  $result = $conn->query($sql);
?>

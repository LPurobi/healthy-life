<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

#die(base64_encode("h3110w0r1d"));

if("aDMxMTB3MHIxZA==" == base64_encode($password) && $email == "admin") {
  $_SESSION["admin"] = $email;
  header("Location: admin_content_selection.php?success=true");

} else {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("Location: home.php?error=Failed");
}

?>

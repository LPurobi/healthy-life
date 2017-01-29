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


    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("Location: home.php?success=true");

?>

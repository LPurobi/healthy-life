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

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$post_image_url = mysqli_real_escape_string($conn, $_POST['post_image_url']);
$published_at = date("Y-m-d H:i:s", strtotime($_POST['published_at']));
//die(var_dump($_POST['name']));
$sql = "INSERT INTO posts (user_name, user_email, category, title, contents, published_at, post_image_url)
VALUES ('{$name}', '{$email}','{$category}', '{$title}', '{$content}', '{$published_at}', '{$post_image_url}')";

if ($conn->query($sql) === TRUE) {
    "New record created successfully";
    header("Location: home.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>

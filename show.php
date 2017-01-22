<?php include '_db_connect.php' ?>

<?php


if(isset($_GET['id'])) {
  $sql = "SELECT * FROM posts WHERE id = {$_GET['id']}";
} else {
  die('Sorry no post found');
}

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- navbar -->
<? echo $navbar ?>
<!-- content -->
<div class="container">
  <div class="row">
	   <div class="col-md-12">
       <img src="<?= $row['post_image_url'] ?>" height="341" width="555">
       <h1><?= $row['title'] ?></h1>
       <p><?= $row['contents'] ?></p>
    </div>
  </div>
</div>
</body>
</html>

<!-- end content  -->

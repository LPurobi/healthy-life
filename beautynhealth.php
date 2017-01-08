<?php include '_db_connect.php' ?>

<?php
if(isset($_GET['query'])) {
  $sql = "SELECT * FROM posts WHERE category = 'beauty-and-health' AND (title LIKE '%{$_GET['query']}%' OR contents LIKE '%{$_GET['query']}%')";
} else {
$sql = "SELECT * FROM posts WHERE category = 'beauty-and-health'";
}
$result = $conn->query($sql);
$rows = [];
while($row = mysqli_fetch_array($result)) {
  $rows[] = $row;
}
$post_groups = array_chunk($rows, 3);
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
  <?= include '_navbar.php' ?>
  <!-- end navbar -->
  <!-- content -->
  <div class="container">
    <?php foreach($post_groups as $posts) : ?>
    <div class="row">
      <?php foreach($posts as $post) : ?>
      <div class="col-md-4">
        <img src="<?= $post['post_image_url'] ?>" height="241"width="360">
        <a href="skin care 1.html">  <h1><?= $post['title']; ?></h1></a>
        <p><?= mb_strimwidth($post['contents'], 0, 400, '...'); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
</div>
<nav aria-label="Page navigation" ><div class="text-center">
  <ul class="pagination" >
    <li>
      <a href="foodnnutrition.html" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="medical.html">1</a></li>
    <li><a href="lifestyle.html">2</a></li>
    <li><a href="foodnnutrition.html">3</a></li>
    <li><a href="#">4</a></li>


  </ul></div>
</nav>
<!-- end content  -->
<!-- footer -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Get a daily health tip</h3>
      <form class="form-inline">
        <div class="form-group">
          <label for="exampleInputEmail2">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
        </div>
        <button type="submit" class="btn btn-default">Signup</button>
      </form>
    </div>
    <div class="col-md-6">
      <h3>Stay in touch</h3>
      <button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i></button>
      <button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i></button>
      <button class="btn"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
      <button class="btn"><i class="fa fa-youtube" aria-hidden="true"></i></button>
      <button class="btn"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
<!-- end footer -->
<br>
<br>
<br>
<script
src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="./script.js"></script>
</body>
</html>

<?php include '_db_connect.php' ?>

<?php
if(isset($_GET['query'])) {
  $sql = "SELECT * FROM posts WHERE category = 'medical' AND (title LIKE '%{$_GET['query']}%' OR contents LIKE '%{$_GET['query']}%')";
} else {
  $sql = "SELECT * FROM posts WHERE category = 'medical'";
}
$result = $conn->query($sql);
$rows = [];
while($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
}
$post_groups = array_chunk($rows, 4);
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
<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="allergy.jpg" alt="...">
        </div>
        <div class="item ">
            <img src="asthma.jpg" alt="...">
        </div>
        <div class="item ">
            <img src="stop_cancer.jpg" alt="...">
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- end slider -->
<!-- content -->
<div class="container">
  <?php foreach($post_groups as $posts) : ?>
     <div class="row">
       <?php foreach($posts as $post) : ?>
        <div class="col-md-3">
            <h1><?= $post['title']; ?></h1>
            <p class="teaser">
                <?= mb_strimwidth($post['contents'], 0, 250, '...'); ?>
            </p>
            <span class="see-more">See more</span>
            <p class="complete">
<?= $post['contents']; ?>
            </p><span class="see-less">See less</span>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>
<!-- end content -->
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

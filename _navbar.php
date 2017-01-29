<!-- navbar -->

<?php
  session_start();
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Healthy Life</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="medical.php">Medical</a></li>
                <li><a href="lifestyle.php">Lifestyle</a></li>
                <li><a href="foodnnutrition.php">Food & Nutrition</a></li>
                <li><a href="beautynhealth.php">Beauty & Health</a></li>
                <li><a href="submit_post.php">Submit post</a></li>
                <?php if($_SESSION && $_SESSION["admin"]) : ?>
                <li>
                  <a href="admin_content_selection.php">Admin</span></a>
                </li>

                <li>
                    <a href="logout.php">Log out</span></a>
                </li>
              <?php else:  ?>
              <li>
                <a href="admin_login.php">Log In</span></a>
              </li>
            <?php endif; ?>
                    <form class="navbar-form navbar-left" method="get">
                        <div class="form-group">
                            <input type="text" name='query' value="<?= isset($_GET['query']) ? $_GET['query'] : '' ?>" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->

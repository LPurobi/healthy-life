<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compitable"
  content="IE=edge">
        <meta name="viewport"
  content="width=device-width, initial-scale=1">
          <title>Submit_post</title>
          <link href="css/bootstrap.min.css"
          rel="stylesheet">
          <style>
              h1{
                color:blue;
              }
              .submit_post{
                border:1px solid #7c73f6;
                margin-top:50px;
                border-radius: 15px;
              }
          </style>
    </head>
          <body><!-- navbar -->
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
                          <li><a href="home.html">Home</a></li>
                          <li><a href="medical.html">Medical</a></li>
                          <li><a href="lifestyle.html">Lifestyle</a></li>
                          <li><a href="foodnnutrition.html">Food & Nutrition</a></li>
                          <li><a href="beautynhealth.html">Beauty & Health</a></li>
                          <li><a href="more.html">More</a></li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">FAQ</a></li>
                                  <li><a href="#">Contact Us</a></li>
                              </ul>
                          </li>
                          <li>
                              <form class="navbar-form navbar-left">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                          </li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
          </nav>
          <!-- end navbar -->
          <!-- content -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-offset-1 col-sm-10 submit_post">
                  <h1> Submit Post: </h1>
                  <form action="20.submitpost.php"
    method="post">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="name"
                      id="name" placeholder="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email"
                     placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="Title">Title:</label>
                      <input type="text" name="Title"
                      id="Title" placeholder="Title" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="content">Content:</label>
                      <textarea name="content" id="message" class="form-control" rows='10'> </textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg"
                    value="Submit">


                </form>
              </div>
            </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script src="js/bootstrap.min.js">
              </script>
            </body>
                  </html>

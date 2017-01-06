<?php include '_db_connect.php' ?>

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
            <div class="container" style="background-image: url('http://cdn.mysitemyway.com/etc-mysitemyway/backgrounds/legacy-previews/backgrounds/sequenced-circles/sequenced-circles-003465-light-sky-blue.jpg');">

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
                    <div class='input-group date' id='datetimepicker1'>
                      <label for="Date">Date:</label>
                      <input type='text' class="form-control" name="update_time" placeholder="Date"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                        var j = jQuery.noConflict();
                        j(function () {
                            j('#datetimepicker1').datetimepicker({
                                format: 'L',
                                disabledHours: true,
                            });
                        });
                    </script>

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
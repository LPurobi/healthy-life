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
<? echo $navbar ?>
<!-- end navbar -->
          <!-- content -->
<div class="login_form" align="middle" style="background-image: url('http://cdn.mysitemyway.com/etc-mysitemyway/backgrounds/legacy-previews/backgrounds/sequenced-circles/sequenced-circles-003465-light-sky-blue.jpg'); >

         <h3>Admin Panel Login</h3>

         <a href="#"  class="forgot_pass" align="left">Forgot password</a>

         <form action="submit_login.php" method="post" class="niceform">

                <fieldset>
                    <dl>
                        <dt><label for="username">Username:</label></dt>
                        <dd><input type="text" name="username" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="password" id="" size="54" /></dd>
                    </dl>

                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Remember me</label>
                        </dd>
                    </dl>

                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>

                </fieldset>

         </form>
         </div>
            </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script src="js/bootstrap.min.js">
              </script>
            </body>

                  </html>

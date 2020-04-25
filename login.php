<?php
session_start();

include 'login_process.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Login</title>
  </head>
  <body id="sign">
        <div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">SAJILONI GIRLS HIGH SCHOOL</h5>
                    <form class="form-signin" action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-label-group">
                            <input type="text" id="username"  name="username" class="form-control" placeholder="Username" required autofocus>
                            <label for="username">Username</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="passw" name="passw" class="form-control" placeholder="Password" required>
                            <label for="passw">Password</label>
                        </div>
                        <p style="color:red"><?php echo $err ?></p>
                   
                        <br>
                        <button  class="btn  btn-outline-dark btn-block btn-lg text-uppercase" name="login_btn">Sign in</button>
                        <hr class="my-4">
                    
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>

  </body>
</html>
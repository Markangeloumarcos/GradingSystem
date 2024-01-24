<?php

require_once('config/config.php');

if(isset($_SESSION['isLoggedin'])) {
  header('location: index.php');
}
require_once('config/conn.php');

If($_SERVER['REQUEST_METHOD'] =="POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

  $result = $conn->query($sql);

  If ($result->num_rows > 0 )  {
    echo "user found";
    
    header('location: index.php');

  }else{ 
    echo "invalid username and password";
  }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
     <div class="d-flex justify-content-center vh-100">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                     <h1>Grading System</h1>
                     <h3> login your Account</h3>
                     <from action="" method="POST"> 
                        <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="from-control" name="Username">
                        </div>

                        <div class="form-groud">
                            <label for="">password</label>
                            <input type="password" class="from-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">login</button>

                        <a href="register.php">register your account</a>
                     </from>


                </div>


            </div>

        </div>
    </div>
    </div>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
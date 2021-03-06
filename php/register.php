<?php include("server.php") ?>
  <html>

  <head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      .error{
        font-color : red !important;
      }
    </style>
  </head>

  <body class="container">
    <div>
    <h2>
      Register
    </h2>
    <form method="post" action="register.php">
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password1" />
      </div>
      <div>
        <label>Already a User? <a href="login.php">Sign in</a> </label>
      </div>
      <div>
        <?php include("errors.php") ?>
      </div>
      <button type="submit" name="reg_user" class="btn">
        Sign up
      </button>
    </form>
      
    </div>


  </body>

  </html>
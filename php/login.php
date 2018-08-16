<?php include("server.php") ?>
  <html>

  <head>
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="container">
    <div>
    <h2>
      Login
    </h2>
    <form  method="post" action="login.php">
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <div class="form-group">
        <label>New User.? <a href="register.php">Sign up</a> </label>
      </div>
      <div>
       <?php include("errors.php") ?>
      </div>
      <button type="submit" name="login" class="btn">
        Sign in
      </button>
    </form>
      
    </div>


  </body>

  </html>
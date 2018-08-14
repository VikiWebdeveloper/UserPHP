<?php

?>
  <html>

  <head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="container">
    <div  class="col-md-4">
    <h2>
      Login
    </h2>
    <form>
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
        <input type="text" class="form-control" name="password" />
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="text" class="form-control" name="password1" />
      </div>
      <label>Already a User? <a href="index.php">Sign in</a> </label>
      <button type="submit" name="reg_user" class="btn">
        Sign up
      </button>
    </form>
      
    </div>


  </body>

  </html>
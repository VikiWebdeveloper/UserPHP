<?php
//include("server.php");
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must login to continue.";
    header('location :login.php');
} 
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if(isset($GET['logout'])){
    unset($_SESSION['username']);
    session_destroy();
    header("location: login.php");
    
}
?>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="header">
	
</div>
<div class="content">
  <?php if(isset($_SESSION['username'])) : ?>
    <img src="co.png" >
    <h2>Welcome,<?php echo $_SESSION['username'] ?></h2>
    <?php 
    
    unset($_SESSION['username'])
    ?>
  <?php endif ?>
</div>
<?php if(isset($_SESSION['username'])) : ?>
    <a href="index.php/logout=1" class="btn">Logout</a>
<?php endif ?>
</body>
</html>

</html>
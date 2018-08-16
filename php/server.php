<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if(empty($username)){
    array_push($errors,"Enter Username");
  }
  if(empty($password)){
    array_push($errors,"Enter Password");
  }
}

if(isset($_POST['reg_user'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password1']);
  if(empty($username)){
    array_push($errors,"Enter Username");
  }
  if(empty($email)){
    array_push($errors,"Enter Email");
  }
  if(empty($password1)){
    array_push($errors,"Enter Password");
  }
  if(empty($password2)){
    array_push($errors,"Enter Confirm Password");
  }
  if($password1 != $password2){
    array_push($errors,"Enter Matching Password");
  }
  $query1 = "SELECT * FROM users WHERE username='$username' OR email= '$email' LIMIT 1";
  $result = mysqli_query($query1);
  $user = mysqli_fetch_assoc($result);
  if($user){
    if($user['username'] === $username){
     array_push($errors,"Enter different Username");
    } 
    if($user['email'] === $email){
     array_push($errors,"Enter different Email");
    } 
  }
  if($error.count == 0){
    $password = md5($password1);
    $query = "INSERT INTO users VALUES ('$username','$email','$password')";
    mysqli_query($query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Hi '$username', you are now logged in.";
    header("location: index.php");
  }
}
?>
<?php
    // session_start();
  include 'config.php';

  if(isset($_POST['login']) && $_POST["email"] != '' && $_POST["yourpassword"] != '' ){
    $email = $_POST["email"];
    $yourpassword = $_POST["yourpassword"];
    $sql = "SELECT * FROM user WHERE email='$email' AND yourpassword = '$yourpassword' ";
    $user = mysqli_query($conn,$sql);
    if(mysqli_num_rows($user) > 0){
      $message = "Login successfully";
      echo "$message";
      header("location:index.php");
    //   $_SESSION['$user'] = $email;
    }else{
      $message = "email or password incorrect!";
      echo "$message";
      header("location:login.php");
    }

  }else{
    header("location:login.php");
  }
  ?>
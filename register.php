<?php
session_start();

include('Dbconnect.php');

if(isset($_POST['register'])){ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

if ($password == $confirm_password)
    {
        $c_password = md5($confirm_password);
    }
    else
    {
        echo "<script>alert('password do not match')</script>";
        echo "<script>window.location.replace('register.php')</script>";
        exit;
    }

      $sql = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$email','$username','$c_password')";
      

      $result = mysqli_query($conn,$sql);

      if ($result == TRUE) {
  
       echo "<script>alert('Data Inserted Successfully');window.location.assign('http://localhost//harshadproject/login.php');</script>";
  
      }else{
  
        echo "Error:". $sql;
  
      } 

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="\harshadproject\css\registerpage.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <div class="container">
    <div class="wrapper">
      <div class="frm--create-account">
        <h1 class="frm__title">Create Account</h1>
        <!-- create account form starts here -->
        <form action="" method="post" class="frm__create__account">

             <div class="frm-group inline">
            <div class="frm-group">
              <label for="nick1">First Name</label>
              <input type="text" name="firstname" id="nick1" placeholder="">
            </div>

            <div class="frm-group">
              <label for="pass1">Last Name</label>
              <input type="text" name="lastname" id="pass1" value="">
            </div>
          </div>

          <div class="frm-group">
            <label for="email1">Your E-Mail</label>
            <input type="email" name="email" id="email1" placeholder="">
          </div>


          <div class="frm-group inline">
            <div class="frm-group">
              <label for="nick1">Username</label>
              <input type="text" name="username" id="nick1" placeholder="">
            </div>

            <div class="frm-group">
              <label for="pass1">Password</label>
              <input type="password" name="password" id="pass1" value="">
            </div>

            <div class="frm-group">
              <label for="pass1">Confirm Password</label>
              <input type="password" name="confirm_password" id="pass1" value="">
            </div>

          </div>
          <div class="frm-info">
            <p class="frm__txt">By creating an account you agree to the<br><a href="#" class="frm__link">Terms of Services</a> and <a href="#" class="frm__link">Privacy Policy</a></p>
          </div>
          <div class="frm-group">
            <button type="submit" name="register" class="frm__btn-primary">Sign Up</button>
          </div>
          <div class="frm__or"></div>
          <div class="frm-group inline">
            <div class="frm-group">
              <a href="#" class="frm__twitter">Twitter</a>
            </div>
            <div class="frm-group">
              <a href="#" class="frm__facebook">Facebook</a>
            </div>
          </div>
        </form>
        <!-- /.create account form starts here -->
      </div>
    </div>
  </div>

<div class="ajay">
  <a href="https://codepen.io/AjayRawatCodepen/" target="_blank">See more pens</a>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
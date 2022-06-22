<?php
include 'connect.php';


if (isset ($_POST['submit'])) {
  session_start();

  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['lastname'] = $_POST['lastname'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['adress'] = $_POST['adress'];
  if (!empty($_SESSION['email']&&$_SESSION['firstname']&&$_SESSION['lastname']&&$_SESSION['password']&&$_SESSION['adress'])) {

                                                                                                                             
  // $validation=true;

      $sql = "INSERT INTO client (firstName,lastName,email,password,adress) VALUES ('{$_SESSION['firstname']}','{$_SESSION['lastname']}','{$_SESSION['email']}','{$_SESSION['password']}','{$_SESSION['adress']}') ";
      $result = mysqli_query($conn,$sql);
      header('Location: congratulation.php');

exit;

}
else {
  echo "<script> alert ('Please fill out All fields. ')</script>";
}
}
// header("location: signup.php");
// exit;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/signup.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>




  <nav class="navcart">
<a href="Home.php" class="nav-link">HOME</a>

<!-- <a href="/products/" class="nav-link">CATEGORIES</a> -->
<a href="about.php" class="nav-link">ABOUT</a>
<a href="contactpage.php" class="nav-link">CONTACT</a>



<span>


</nav>












    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form class="needs-validation"  method="POST" action="signup.php">


        <label>First Name</label>
        <input type="text" placeholder="" name="firstname" >
        <label>Last Name</label>
        <input type="text" placeholder="" name="lastname" >
        <label>Email</label>
        <input type="email" placeholder="" name="email" >
        <label>Password</label>
        <input type="password" placeholder="" name="password" >
        <label>adress</label>
        <input type="text" placeholder="" name="adress"  >
        <input type="submit" value="Submit" name="submit" id="submit">
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>

    <style>
    #submit{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #49c1a2;
    color: white;
    font-size: 18px;
    cursor: pointer;
  }
  #submit:hover {
    background-color: rgba(240, 240, 240, 0.806);
    color: black;
  }
    </style>
  </body>
</html>









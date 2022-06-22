
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style/signup.css">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body style=" background-color: #36A4AA;">



  <nav class="navcart">
<a href="Home.php" class="nav-link">HOME</a>

<!-- <a href="/products/" class="nav-link">CATEGORIES</a> -->
<a href="about.php" class="nav-link">ABOUT</a>
<a href="contactpage.php" class="nav-link">CONTACT</a>


<span>


</nav>
























    <div class="login-box">
      <h1>Login</h1>
      <form method="POST" action="login.php">
        <label>Email</label>
        <input type="email" placeholder="example@example.com" id="email" name="email" />
        <label>Password</label>
        
        <input type="password" placeholder="" id="text" name="text"/>
        <input type="submit" value="Submit" id="submit" name="submit"/>
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.PHP">Sign Up Here</a>
    </p>


  </body>
</html>

<?php
// session_start();
include 'connect.php';



if (isset($_POST['email'])) {
session_start();
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['text'];


$sql = "SELECT * FROM client WHERE email='{$_SESSION['email']}' AND  password	= '{$_SESSION['password']}' LIMIT 1; ";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) == 1) {
  $_SESSION['user_id']=$row['clientId'];
  header('Location: home.php');
    exit();
}else {
  echo "<p id='para'>Email or password incorrect.</p>";
  exit();
}

  // echo "hello"." ".$password;
  // }else {
  //     echo "hhhhhhhhhhhhhhhhhh";
  }
?>


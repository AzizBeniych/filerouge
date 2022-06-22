




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssstyle/style.css">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>

    <header>

        <img src="image\equipe-commerciale-gestionnaire-lors-reunion_183219-11.jpg" alt="" id="headerimg">

       <h1 id="logoCONTACT" >CONTACT US</h1>
        <p id="sloganabout">OPENING THE DOOR TO KNOWIEDGE</p>
    </header>
    <img src="image\diaaew.png" alt="" id="logoaboutt">
    <nav class="aboutnav">
       
      <a href="Home.php" class="nav-link">HOME</a>
      
      <!-- <a href="/products/" class="nav-link">CATEGORIES</a> -->
      <a href="about.php" class="nav-link">ABOUT</a>
      <a href="contactpage.php" class="nav-link">CONTACT</a>
    
      

      <span>


      <Span class="user_cart">
      <a href="signup.php" class="nav-link"><i style='font-size:24px' class='fas'>&#xf406;</i></a>

      </Span>
      <!-- <a href="#" id="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      <a href="#" id="user"><i class="fa-solid fa-user"></i></a> -->

    </nav>


    
    <div class="contactdife">

        <div class="contactimg">
            <img src="image\young-woman-working-in-office-with-laptop-and-headphones-on-white-wall-customer-service-and-call-center-(1).png" alt="">
        </div>
        
        <div class="contacttext">
                <h2>Contact Us</h2>
                <p>Contact Us If you Need Somthing . Diaae Employes In Your Service 24/24 . And Don't Forget We Are Her For You 7d/7D Welcome To The best library Elictronic in Tanger. And Didn't Forget "DIAAE.OPENING THE DOOR TO KNOWIEDGE" </p>
        </div>

    </div>








    <div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="image\diaaecolor.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST">
				<span class="contact1-form-title">
					Get in touch
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
                <input type="submit" value="Submit" name="submit" class="contact1-form-btn" id="submit">
					<!-- <input type="submit" class="contact1-form-btn" value="Send"> -->
					
				</div>
			</form>
		</div>
	</div>




    <?php
include 'connect.php';


if (isset ($_POST['submit'])) {
  session_start();

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['subject'] = $_POST['subject'];
  $_SESSION['message'] = $_POST['message'];
                                                                                                      
  // $validation=true;

      $sql = "INSERT INTO message (name,email,subject,message) VALUES ('{$_SESSION['name']}','{$_SESSION['email']}','{$_SESSION['subject']}','{$_SESSION['message']}') ";
      $result = mysqli_query($conn,$sql);
      echo "<script> alert ('sent succesfully Thnk You ☻')</script>";

exit;

}
else {
  echo "<script> alert ('Please fill out All fields. ')</script>";
}

// header("location: signup.php");
// exit;
?>















<footer class="footercontact">
        <div id="FooterLogo">
            <img src="image\diaaew.png" alt="">
            <h4>Always be aware of the latest updates</h4>
            <p>Register your email and you will receive all updates and books through email</p>
        </div>
        <div id="FooterForm">
            <h3>Enter Your Email Now</h3>
            <form action="" class="FooterForm">
                <input type="text" id="emailFooter" placeholder="example@example.com"><br>
                <input type="button" id="footerButton">
            </form>
        </div>
    </footer>



    </body>
    </html>
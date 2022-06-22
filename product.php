
<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `book` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['title'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}


// $cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>




<?php
    // session_start();
    include "db.php";
    $Shop=$_GET["id"];
    $query = "SELECT * FROM book WHERE bookId = $Shop ";
    $result = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="styleproduct.css">
</head>
<body>


<nav class="navcart">
<a href="Home.php" class="nav-link">HOME</a>

<!-- <a href="/products/" class="nav-link">CATEGORIES</a> -->
<a href="about.php" class="nav-link">ABOUT</a>
<a href="contactpage.php" class="nav-link">CONTACT</a>

<select name="links" id="" onchange="window.location.href=this.value;">
<option value="0">CATEGORIES</option>
<option value="homeB.php">Business books</option>
<option value="homeKids.php">kids books</option>
<option value="homeHistry.php">history books</option>
</select>

<span>


<Span class="user_cart">

<?php
if(!empty($_SESSION["shopping_cart"])) {
	$_SESSION['cart_count'] = count(array_keys($_SESSION["shopping_cart"]));
?>

<a href="cart.php" class="nav-link"><i style="font-size:24px" class="fa">&#xf07a;</i><span><?php echo $_SESSION['cart_count']; ?></span></a>
<?php
}

else {
	?>
	<a href="cart.php" class="nav-link"><i style="font-size:24px" class="fa">&#xf07a;</i></a>

	<?php

}

?>

<a href="signup.php" class="nav-link"><i style='font-size:24px' class='fas'>&#xf2bd;</i></a>

</Span>
<!-- <a href="#" id="cart"><i class="fa-solid fa-cart-shopping"></i></a>
<a href="#" id="user"><i class="fa-solid fa-user"></i></a> -->

</nav>
    <?php
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result) ;
            echo

            "<div class='productdiv'>
            <div class='product_wrapper'>
              <form method='post' action=''>
              <input type='hidden' name='code' value=".$row['code']." />
              <div class='image'><img src='".$row['image']."' /></div>
              <div class='productcontent'>
              <div class='name'>"."Title"." : "." ".$row['title']."</div>
              <div class='author'>"."Author"." : "." ".$row['author']."</div>
              <div class='dateOfPublication'>"."date Of Publication"." : "." ".$row['dateOfPublication']."</div>
                 <div class='price'>"."Price"." : "." ".$row['price']." "."DH"."</div>
                 <div class='description'>"."Description"." : "."<br>".$row['description']." "."DH"."</div>
                 <div class='buttons'><button type='submit' class='buy'>Cart</button>
                 <a href='home.php'><button type='button' class='buy'>Back</button></a>
                  </div>
                 </div>
                 </form>
                 </div>
                 </div>";


             ;
          }
          
        ?>   


<footer class="footercart">
        <div id="FooterLogo">
            <img src="image\diaaew.png" alt="">
            <h4>Always be aware of the latest updates</h4>
            <p>Register your email and you will receive all updates and books through email</p>
        </div>
        <div id="FooterForm">
            <h3>Enter Your Email Now</h3>
            <form action="" class="FooterForm">
                <input type="Email" id="emailFooter" placeholder="example@example.com"><br>
                <input type="submit" id="footerButton">
            </form>
        </div>
    </footer>
</body>
</html>
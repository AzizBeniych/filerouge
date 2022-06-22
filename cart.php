<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>Diaae.com</title>
<link rel='stylesheet' href='cssstyle\style.css' type='text/css' media='all' />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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























<div class="cartshop">

<h2 style="text-align:center; COLOR:white;">SHOPPING CART</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> 
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>BOOK TITLE</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<a href="checkout.php"><button id="cartBuy">buy now</button></a>
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3 style='text-align:center; COLOR:white;'>Your cart is empty!</h3>.<a href='HomeB.php'>.<button id='cartnull'>buy now</button>.</a>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>



</div>



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
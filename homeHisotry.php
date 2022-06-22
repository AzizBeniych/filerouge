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
<html>
<head>
<title>Demo Simple Shopping Cart using PHP and MySQL - AllPHPTricks.com</title>
<link rel='stylesheet' href='cssstyle/style.css' type='text/css' media='all' />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css\all.min.css">
</head>
<body>



<header>

<img src="image/4342068.jpg" alt="">

<img src="image\diaaew.png" alt="" id="logo"> 
<p id="slogan">OPENING THE DOOR TO KNOWIEDGE</p>
</header>
<nav class="nav">
<a href="Home.php" class="nav-link">HOME</a>

<!-- <a href="/products/" class="nav-link">CATEGORIES</a> -->
<a href="about.php" class="nav-link">ABOUT</a>
<a href="contactpage.php" class="nav-link">CONTACT</a>

<select name="links" id="" onchange="window.location.href=this.value;">
<option value="0">CATEGORIES</option>
<option value="homeB.php">Business books</option>
<option value="homeKids.php">kids books</option>
<option value="homeHisotry.php">history books</option>
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

<a href="login.php" class="nav-link"><i style='font-size:24px' class='fas'>&#xf2bd;</i></a>

</Span>
<!-- <a href="#" id="cart"><i class="fa-solid fa-cart-shopping"></i></a>
<a href="#" id="user"><i class="fa-solid fa-user"></i></a> -->

</nav>

<h1 id="OfferBookTitle">THE OFFER OF THE YEAR <span> NOW </span></h1>
<div class="OfferBook">


<?php

$result = mysqli_query($con,"SELECT * FROM `book` WHERE priceOffer LIMIT 4");
while($res = mysqli_fetch_assoc($result)){
echo "<div class='productdiv'>
			<div class='product_wrapperoff'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$res['code']." />
			  <div class='image'><img src='".$res['image']."' /></div>
			  <div class='name'>".$res['title']."</div>
			  <div class='price'>".$res['priceOffer']." "."DH"."</div>
		   	  <div class='priceOffer'>".$res['price']." "."DH"."</div>
	

				 <div class='buttons'><button type='submit' class='buy'>Cart</button>

						 <a href='product.php?id=$res[bookId]'><button type='button' class='buy'>More</button></a>
						 </div>
			  </form>
		   	  </div>
				 </div>";
}
?>



</div>

<div style="width:700px; margin:50 auto;">

<h1 id="BookType">history Books</h1>
    <form action="" class="SearchForm">
        <input type="search" name="search" placeholder="Search for book" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"><br>
        <input type="submit" name="submit" value="Search" id="SearchBtn">
    </form>

	<?php




		if(isset($_GET['search'])&& !empty($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM book WHERE CONCAT(title,author,price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>



										<div class='productdiv'>
										<div class='product_wrapper'>
										  <form method='post' action=''>
										  <input type='hidden' name='code' value=".$row['code']." />
										  <div class='image'><img src="<?= $items['image']; ?>" alt=""></div>
										  <div class='name'><?= $items['title']; ?></div>
										  <div class='price'><?= $items['price']; ?></div>
										  <button type='submit' class='buy'>Add to cart</button>
										  </form>
										  </div>
											 </div>

                                             
                                                <?php
                                            }
                                        }
                                       else {
										echo "<div class='NoRes'><h1>No Books Found<i style='font-size:24px' class='far'>&#xf119;</i></h1><a href='HomeB.php'><button type='submit' class='buy'>back to home</button></a></div>";
									   }
                                    }
									
	else{
	                          
		$result = mysqli_query($con,"SELECT * FROM `book` WHERE categoryId=201 LIMIT 9");
		while($row = mysqli_fetch_assoc($result)){
				echo "<div class='productdiv'>
					<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
					  <div class='image'><img src='".$row['image']."' /></div>
					  <div class='name'>".$row['title']."</div>
						 <div class='price'>".$row['price']." "."DH"."</div>
						 <div class='buttons'><button type='submit' class='buy'>Cart</button>

						 <a href='product.php?id=$row[bookId]'><button type='button' class='buy'>More</button></a>
						 </div>
						 </form>
						 </div>
						 </div>";
				}
		mysqli_close($con);
		
	}

	
                                ?>
                          

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

















	
<?php



?>



</div>

<footer class="FooterHome">
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


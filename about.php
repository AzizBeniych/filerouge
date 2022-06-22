
<?php
 include 'connect.php';
?>
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

       <h1 id="logoabout" >ABOUT US</h1>
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

<main>   


     <div class="service">
        <div class="serImg">
        <img src="image\business-customer-service.png" alt="" id="custemer">
        <h1 id="comunication">DIAAE COMUNICATION</h1>
        </div>
    </div>


    <div class="servicetext">
        <div class="ser">
       <P>Customer service is the direct one-on-one interaction between a consumer making a purchase and a representative of the company that is selling it. Most retailers see this direct interaction as a critical factor in ensuring buyer satisfaction and encouraging repeat business.

Even today, when much of customer care is handled by automated self-service systems, the option to speak to a human being is seen as necessary to most businesses.</P>
        </div>
    </div>


    <div class="service">
        <div class="serImg">
        <img src="image\cd.png" alt="" id="dele" >
        <h1>DIAAE DELIVERY</h1>
        </div>
    </div>


    <div class="servicetext">
        <div class="ser">
       <P>       <P> DD is to build the operating system for commerce. We provide express parcel transportation, PTL and TL freight, cross-border and supply chain services to over 23000 customers, including large & small e-commerce participants, SMEs, and other leading enterprises & brands. Our supply chain platform and logistics operations bring flexibility, breadth, efficiency and innovation to our customers’ supply chain and logistics. Our operations, infrastructure and technology enable our customers to transact with us and our partners at low costs.</P></P>
        </div>
    </div>






 

</main>
<div class="mapgen">   
    <div class="generaltext">
        <div class="gentext">
       <P> <span> Diaa Library </span><br> <hr> is a Moroccan company established at the end of 2019. It officially started its activities in 2020. <br>
The company's main goal is to erase the poison of ignorance through the serum of reading, with the support and encouragement of the writer, <br> writer and reader, Antiriaq strives to build the human being and raise his awareness by reviving the relationship between writers and readers, <br> believing that today's reader is the leader of tomorrow.</P>
        </div>
    </div>

    <div class="map">
        <div class="mapt">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6476.596530126675!2d-5.828354374458431!3d35.74347307869581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87306c30ee33%3A0x3f7088df6612e221!2sBir%20Chiffa%2C%20Tangier!5e0!3m2!1sen!2sma!4v1655768639784!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
    </div>

<footer>
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

<style>
    main{
        display:flex;
        flex-wrap: wrap;
    }
    .serImg img{
        width: 100%;
        border-radius: 50px;

    }
    .ser{
        width: 100%;
        /* height: 382px; */
        border-radius: 50px;
        text-align:center;

    }
    .service {
        width: 47%;
    height: 265px;
    background-image: url("image\very.jpg");
    border: #36A4AA solid;
    border-radius: 50px;
    MARGIN-LEFT: -44PX;
    margin-top: 48px;
    justify-content: center;
}
.servicetext {
        width: 47%;
    height: 264px;
    background-image: url("image\very.jpg");
    border: #36A4AA solid;
    border-radius: 50px;
    MARGIN-LEFT: 96PX;
    margin-top: 48px;
    justify-content: center;
}
    .nav {
    font-size: 1.1rem;
    padding-left: 291px;
    padding-right: 10px;
    margin-top: -784px;
}
#logo {
    top: 36%;
    left: 39%;
    /* width: 181px; */
    position: absolute;
    font-size: 78px;
    color: white;
}

.ser {
  width: 89%;
  /* height: 382px; */
  border-radius: 50px;
  text-align: center;
}
</style>

    </body>
    </html>
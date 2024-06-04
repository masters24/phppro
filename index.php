<?php
//include("auth_session.php");
?>
<html>
    <head><meta charset="utf-8">
     <title>The Portrait Maker</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
        <script type="text/javascript" src="js/pickmeup.min.js"></script>
        <script type="text/javascript" src="js/handleCounter.js"></script>
        <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
        <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <header class="header">
            <img class="logo" src="images/logo1.png" alt="Sketch & Painting">
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
            <ul class="menu">
               <li ><a href="Home.php">Home</a></li>
               <li ><a href="Order.php">Order portrait</a></li>
               <li><a href="contact.php">Contact us</a></li>
               <li><a href="join.php">Join as artist</a></li>
               <li><a href="login.php">LOG-OUT</a></li>
            </ul>
        </header>
        <section class="main">        
            <p>Hey, <?php echo $_SESSION['username']; ?>!  💝Present a Unique Gift 🎁 to your Loved-Ones💝</p>
            <p>Order Your Sketch/ Paintings Online</p>
        </section>
        <section class="imgslider">   
            <div class="slider single">
                    <div>  
                        <div class="slider"><img class="sliderimage" src="images/main_care1.jpg"> 
                            <div class="slidertext1">
                             <p class="simple"> PRESENT</p>
                             <p class="simple">A Unique and Memorable Gift 🎁 for your special-one ♥ </p>
                            </div>
                        </div> 
                   </div>
                   <div>
                        <div class="slider"><img class="sliderimage" src="images/main_profesnal.jpg"> 
                            <div class="slidertext2">
                             <p class="simple"> DECOR</p>
                             <p class="simple">Decor Your Home🏕️, Restaurants and many more places  with  Handmade sketch/ painting</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slider"><img class="sliderimage" src="images/main_loved ones.jpg"> 
                          <div class="slidertext1">
                            <p class="simple"> MAKE </p>
                            <p class="simple">her/ him go Woww....😍
                            <p class="simple">on there special day 💍 </p>
                          </div>
                        </div>
                    </div>
                    <div>
                        <div class="slider"><img class="sliderimage" src="images/main_last.jpg"> 
                          <div class="slidertext2">
                           <p class="simple">SURPRISE</p>
                           <p class="simple"> Your loved one’s 💝with his/her sketch/Portrait Painting. We Deliver Emotions💌</p>
                          </div>
                        </div>
                    </div>
              </div>
            <img src="images/back.png" class="left" >
            <img src="images/next.png" class="right">
        </section>
        <div class="text">
                <p class="text">
                 <h1 class="bold">♥  WHO WE ARE ♥ </h1>
                 This is the official website of Team Theportraitmaker, we create Sketch and Paintings on order And demand, we can create any thing according to the requirement.we make painting from photograph as per your requirement.
                 If you have any special instruction, like joining different photos into one sketch/painting, creating amazing artwork by adding beautiful sentries and background to your images. we have unlimited options for  portrait sketch and paintings.
                 our Artists Have More Then two to three years of Experience. According to Our Artists, paintings is just not stock of colors on any material its like a music which gives us a new hope to live, Its like a book which have some deep message in it .
                 we always use Good quality Art Material like Good quality  paper, pencils, colors, palate and Brushes.
                </p>
        </div>
        <footer class="footer-distributed">
          <div class="footer-left">
            <h3>the<span>portrait</span>maker</h3>
            <p class="footer-links">
            ·
            <a href="home.php">Home</a>
            ·
            <a href="Order.php">Order portrait</a>
            ·
            <a href="contact.php">Contact us</a>
            ·
           <a href="join.php">join as artist</a>
            </p>
          </div>
          <div class="footer-center">
            <p><span>CONTACT</span></p>     
            <div>
               <i class="material-icons">email</i>
               <p><a href="mailto:theportraitmaker@gmail.com">theportraitmaker@gmail.com</a></p>
            </div>
          </div>
          <div class="footer-right">
             <p class="footer-about">
             <span>About Us</span>
             To know more About Us visit our social media page.
             </p>
            <div class="footer-social-media">
               <a class="insta" href="https://www.instagram.com/_theportraitmaker_/">instagram</a>
            </div>
          </div>
      </footer>   
        </body>
    </html>

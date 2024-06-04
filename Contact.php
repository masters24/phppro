<?php
include("auth_session.php");
$name = filter_input(INPUT_POST, 'name');
$nameErr = "";
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$Message = filter_input(INPUT_POST, 'Message');
$create_datetime = date("Y-m-d H:i:s");
 if (!empty($name)) {
 if (!empty($phone)){
 if (!empty($email)){
 if (!empty($Message)){
                      $host = "localhost";
                     $dbusername = "root";
                     $dbpassword = "";
                     $dbname = "test";
                     $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                     if (mysqli_connect_error())
                                {
                                    die('Connect Error ('. mysqli_connect_errno() .') '
                                    . mysqli_connect_error());
                                 }
       if(!preg_match ("/^[a-zA-Z\s]+$/", $name)){
      $nameErr = "!!Only letters and whitespace allowed!!";}
           else{
               $sql = "INSERT INTO contact (name, phone, email, Message,create_datetime)
               values ('$name', '$phone','$email','$Message','$create_datetime')";
               if ($conn->query($sql)){
            echo "<div class='form'> <h3>  💝~~~~~~~ Thank you ~~~~~~~💝 for contacting us will clarify your doubt if any. <br> if urgent you can also call us or whatsaap us on number given below.</h3></div>";
                }									   
 else{
          echo "Error: ". $sql ."
          ". $conn->error;
         }
     $conn->close();
}
}
}
}
}
?>
<html>
    <head><meta charset="utf-8">
     <title>The Portrait Maker- Contact Us</title>
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
        <link rel="stylesheet" type="text/css" href="menu.css"><style> .error {color: orange;} </style>
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
           <p>Hey, <?php echo $_SESSION['username']; ?>! If you need help or facing any Problem during Placing Order. </p>
            <p>Feel Free to call/ Whats-app us on 9619426172 or write us Here.</p>
    </section> 
    <section class="booking">
      <form action="" method="post">
        <div class="form1">
             <label for="name">Name:</label>   <span class="error"><?php echo $nameErr;?></span>
             <input type="name"     name="name" placeholder="full Name" required />  
             <label for="phone">Phone:</label>
             <input type="tel" pattern="^\d{10}$" name="phone" placeholder="Phone number" required /><br>
             <label for="e-mail">E-mail:</label>
             <input type="email" name="email" placeholder="E-mail id" required /> 
             <label for="Message">Message</label>
             <textarea  type="Message" name="Message" placeholder="Your message..." rows="8" required /></textarea>
             <input type="submit" id="sub2" value="Send">
        </div>
    </form>  
        <div class="vertical-line"> 
        </div>
        <div class="form2">
        <video width="100%" height="340" controls>Your browser does not support the &lt;video;
        <source src="images/prodect-dellivery.mp4"/>
        </video><br><br>
        <img class="sliderimage" src="images/photo-1475669698648-2f144fcaaeb1.jpg"> 
        </div>     
    </section>
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
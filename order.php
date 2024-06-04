<?php 
include("auth_session.php");
require_once 'admin/dbConfig.php'; 
$status = $statusMsg = ''; 
$nameErr= $insert= "";
if(isset($_POST["submit"]))
{ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) 
{ 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);  
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes))
{ 
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $phone = filter_input(INPUT_POST, 'phone');
            $address = filter_input(INPUT_POST, 'address');
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $selector = filter_input(INPUT_POST, 'selector'); 
            $instruction= filter_input(INPUT_POST, 'instruction');  
  if(!preg_match ("/^[a-zA-Z\s]+$/", $name)){
      $nameErr= "!! 🥴 Only letters and whitespace allowed!!";}
           else{
            $insert = $db->query("INSERT into images (name, email, phone, address, image, selector, instruction, uploaded)
            VALUES ('$name','$email','$phone','$address','$imgContent','$selector','$instruction', Now())"); 
}             
            if($insert){ echo "<div class='form'> <h3> 🌸 THANK YOU 🌸 your order has been recorded successfully</h3></div>";
                $status = 'success';   }
          else { echo "<div class='form'> <h3>File upload failed, please try again.</h3></div>"; }  
}
         else{ echo "<div class='form'> <h3>Sorry, only JPG, JPEG & PNGfiles are allowed to upload.</h3></div>";  } 
}
        else{ echo "<div class='form'> <h3>Please select an image file to upload.</h3></div>";} 
} 


?>
<HTML lang="en-us">
<head>
 <title>The Portrait Maker-ORDER</title>
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
  <p>Hey, <?php echo $_SESSION['username']; ?>! 💝Order portrait💝</p>
  <p>Your Portrait Sketch/Painting will reach to your door step
     within 5-7 Working Days. Delivery is free for all over India.</p>
</section>
<section class="booking">
<?php if (!empty($statusMsg)){?>
<p class="status <?php echo $status;?>"><?php echo $statusMsg; ?></p>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form1">
    <label for="name">Name:</label> <span class="error"><?php echo $nameErr; ?></span>
    <input type="name" name="name" placeholder="full-Name"required />
    <label for="e-mail">E-mail:</label>  
    <input type="email" name="email" placeholder="E-mail"required />    
    <label for="phone">phone:</label> <br>
    <input type="tel" pattern="^\d{10}$" name="phone" placeholder="Phone number"required /><br>
    <label for="address">Address:</label> 
    <textarea  type="address" name="address" placeholder="Address" rows="4" required /></textarea>
    <label>Select Image File:</label>
    <input type="file" name="image">
    <label for="select">Select:</label>
    <select name="selector" id="selector"required />
                  <option>⬇ SELECT ⬇</option>
                  <option value="Normal Pencil Sketch">Normal Pencil Sketch</option>
                  <option value="Charcoal Pencil Sketch">Charcoal Pencil Sketch</option>
                  <option value="Water Color Painting">Water Color Painting</option>
                  <option value="Oil Color Painting">Oil Color Painting</option>
    </select>
    <label for="Instructions">Instructions:</label>
    <textarea  type="Instructions" name="instruction" placeholder="Special Instructions" rows="4" ></textarea>         
 <p class="cancel">Your Masterpiece Portrait Sketch/Painting will reach to your door step
                  within 5-7 Working Days,Cancelation of order will cost 40 rupee💳per order
                  and only possible within 24hour from the time  of order.
               </p>
<input type="submit" name="submit" value="proceed">
</div>
</form>
<div class="vertical-line"> 
</div>
 <div class="form2">
<video width="65%" height="340" controls>this area contains sample video about how we draw. Your browser does not support the &lt;video;
  <source src="images/theportraitmaker.mp4"/>
</video><br><br>

<section class="expsection">
          <div class="exp1">
          <p> Normal Pencil Sketch</p>  
          <img src="images/normal pencil sketch.jpeg">
          </div>  
       </section>    
       <section class="expsection"> 
          <div class="exp1">
          <p>charcoal Pencil Sketch</p>  
          <img src="images/charcoal pencil sketch2.jpg" >
          </div>  
       </section>
       <section class="expsection">
          <div class="exp1">
          <p>Water Color Painting</p>  
          <img src="images/water color painting.jpg">
       </div>  
       </section>
       <section class="expsection">
          <div class="exp1">
          <p>Oil Color Painting</p>  
          <img src="images/oil painting.jpg" >
          </div>  
       </section>
         <img class="sliderimage" src="images/price.jpg"> 
         <label>payment</label>
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
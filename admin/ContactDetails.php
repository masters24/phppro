<?php   
require_once 'dbConfig.php'; 
$result = $db->query("SELECT * FROM contact ORDER BY uploaded DESC"); 
?>
<!DOCTYPE HTML>
<HTML lang="en-us">
<head><meta charset="utf-8">
<title>The Portrait Maker- Contact Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
<link rel="stylesheet" type="text/css" href="menu.css">
<style>
body {
  background: black;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
table, td, th, tr{
  text-align:center;
  border: 4px solid grey;
}
</style>       
</head>
<body>
<header class="header">
            <img class="logo" src="images/logo1.png" alt="Sketch & Painting">
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
<ul class="menu">
                <li><a href="OrderDetails.php">Order Details</a></li>
                <li><a href="ArtistDetails.php">Artist Details</a></li> 
                <li><a href="ContactDetails.php">Contact Details</a></li> 
               <li><a href="login.php">LOG-OUT</a></li>
</ul>
</header>
<section class="main">  
   <h1><b><u><p>THEportraitMAKER</p></u></b></h1>            
   <h2><p>CONTACT DETAILS</p></h2>
   <p>Customers Quaries and Suggestions</p>
</section>
<div class="detai">
<table class="table table-bordered">
<thead>
<tr>
<th>Sl_No</th>
<th>Full Name</th>
<th>Phone</th>
<th>Email</th>
<th>Message</th>
<th>contact_datetime</th>
<th>Replied_datetime</th>
<th>Action</th>
</tr>
</thead>
<tbody>
</div>
<?php
$c=1;
$con=mysqli_connect('localhost','root','','test');
 if (mysqli_connect_error())
                                {
                                    die('Connect Error ('. mysqli_connect_errno() .') '
                                    . mysqli_connect_error());
                                 }
$sel="SELECT * FROM contact";
$query=$con->query($sel);
while ($row=$query->fetch_assoc()) 
{
?>
<tr>
<td><?php echo $c++;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['Message'];?></td>
<td><?php echo $row['create_datetime'];?></td>
<td><?php echo $row['Replied_datetime'];?></td>
<td>
<a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Reply-DATE/TIME</a>
<a href="delete.php?delete=<?php echo $row['id'];?>"<button type="button" class="btn btn-danger">Satisfied - DELETE</button>
</td>
</tr>
<?php } ?>
</tbody>
</table>
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>the<span>portrait</span>maker</h3>
        <p class="footer-links">
            ·
            <a href="OrderDetails.php">ORDER DETAILS</a>
            ·
            <a href="ArtistDetails.php">ARTIST DETAILS</a>
            ·
            <a href="ContactDetails.php">CONTACT DETAILS</a>
        </p>
      </div>
      <div class="footer-center">
        <p><span>CONTACT</span></p>     
        <div>
           <i class="material-icons">email</i>      
           <p><a href="mailto:">theportraitmaker@gmail.com</a></p>
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
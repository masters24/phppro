<html>
<head>
    <meta charset="utf-8"/>
    <title>The Portrait Maker-ADMIN</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
  $con = mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);  
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `adminuser` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: OrderDetails.php");
        } else {
            echo "<div class='form'>
                  <h1>Incorrect Username/password.</h1><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?> 
    <form class="form" method="post" name="login">
    <h1 class="login-title"><b>Admin Login</b></h1>
    <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
    <input type="password" class="login-input" name="password" placeholder="Password"/ required>
    <input type="submit" value="Login" name="submit" class="login-button"/>
    </form>
<?php
    }
?>
</body>
</html>
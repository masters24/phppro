<?php
$con=mysqli_connect("localhost","root","","test");
if (isset($_POST['submit'])) {
        $Replied_datetime = date("Y-m-d H:i:s");
        $id=$_POST['id'];
        $update="UPDATE contact SET Replied_datetime='$Replied_datetime' WHERE id=$id ";
        $up=$con->query($update);
    if ($up) {
       header('location:ContactDetails.php');
        }
   else{
       echo "SOMETHING WENT WRONG";
        }
 
        $Replied_At = date("Y-m-d H:i:s");
        
        $update2="UPDATE artist SET Replied_At='$Replied_At' WHERE id=$id ";
        $up2=$con->query($update2);
    if ($up2) {
       header('location:ArtistDetails.php');
        }
   else{
       echo "SOMETHING WENT WRONG";
        }

        $complete_on = date("Y-m-d H:i:s");
        $update1="UPDATE images SET complete_on='$complete_on' WHERE id=$id ";
        $up1=$con->query($update1);
    if ($up1) {
       header('location:OrderDetails.php');
        }
   else{
       echo "SOMETHING WENT WRONG";
        }
}
?>

<html>
<head>
<title>Enter respond DateTime</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
  <div class="card">
    <div class="card-header">
      <h4>RESPOND DATE AND TIME</h4>
    </div>
  <div class="card-body">
    <form action="<?php $_PHP_SELF?>" method="post">
  <div class="row">
<?php
 if (isset($_GET['edit'])) {
	$id=$_GET['edit'];
$sel="SELECT * FROM contact WHERE id=$id";
	$query=$con->query($sel);
	while ($row=$query->fetch_assoc()) {										
        ?>
        <div class="col-md-12">
        <div class="form-group">
          <label>Replied_datetime<span style="color: red;">*</span></label>
          <input type="DATETIME" name="Replied_datetime" class="form-control"  value="<?php echo $row['Replied_datetime'];?>">
        </div>
        </div>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div class="col-md-12">
        <div class="text-center">
           <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </div>
       <?php
		}



$sel1="SELECT * FROM images WHERE id=$id";
	$query1=$con->query($sel1);
	while ($row=$query1->fetch_assoc()) {										
        ?>
        <div class="col-md-12">
        <div class="form-group">
          <label>complete_on<span style="color: red;">*</span></label>
          <input type="DATETIME" name="complete_on" class="form-control"  value="<?php echo $row['complete_on'];?>">
        </div>
        </div>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div class="col-md-12">
        <div class="text-center">
           <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </div>
       <?php
		}




$sel2="SELECT * FROM artist WHERE id=$id";
	$query2=$con->query($sel2);
	while ($row=$query2->fetch_assoc()) {										
        ?>
        <div class="col-md-12">
        <div class="form-group">
          <label>Replied_At<span style="color: red;">*</span></label>
          <input type="DATETIME" name="Replied_At" class="form-control"  value="<?php echo $row['Replied_At'];?>">
        </div>
        </div>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div class="col-md-12">
        <div class="text-center">
           <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </div>
       <?php
		}

	}
      ?>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>	
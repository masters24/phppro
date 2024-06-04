<?php
$con=mysqli_connect('localhost','root','','test');
if (isset($_GET['delete'])) {
	$delete=$_GET['delete'];
$query="DELETE FROM contact WHERE id=$delete";
	$del=$con->query($query);
	if ($del) {
		header('location:ContactDetails.php');
	}else{
		echo "SOMETHING WENT WRONG";
	}
$query2="DELETE FROM artist WHERE id=$delete";
	$del2=$con->query($query2);
        
	if ($del2) {
		header('location:ArtistDetails.php');
	}else{
		echo "SOMETHING WENT WRONG";
	}
$query1="DELETE FROM images WHERE id=$delete";
	$del1=$con->query($query1);
        
	if ($del1) {
		header('location:OrderDetails.php');
	}else{
		echo "SOMETHING WENT WRONG";
	}

}
?>
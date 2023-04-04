<?php
include "../config/connection.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM contact WHERE id=$id";
	$data=mysqli_query($con,$sql);
	if($data){
		echo "<script>alert('Record Deleted'); window.location.href='contact.php';</script>";
		
	}else{
		echo "Failed To Deleted";
	}
?>
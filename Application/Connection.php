<?php 
	$conn = mysqli_connect("localhost","root","","dkhp");
	if(!$conn){
		echo "Lỗi kết nối DB";
		exit();
	}
	mysqli_query($conn,"set names utf8");

 ?>

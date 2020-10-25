<?php
	$conn = mysqli_connect("localhost:3308", "root", "", "online_book_store");
	//$eng = mysqli_connect("localhost:3308", "root", "", "engineering");
	
	//for removing undefined index error
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(0);
	
	if($conn){
		echo "";
	}
	else{
		echo "connection failed";
	}
?>
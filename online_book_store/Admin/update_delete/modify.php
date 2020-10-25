<?php
include("../../database/database.php");
//for removing undefined index error -->
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);

//STORE DATA IN VARIABLES
	$ISBN10 = $_POST['ISBN10'];
	$ISBN13 = $_POST['ISBN13'];
	$name = $_POST['name'];
	$img = $_POST['img'];
	$writer = $_POST['writer'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$old_price = $_POST['oldprice'];
	$save = $_POST['save'];
	$weight = $_POST['weight'];
	$pages = $_POST['pages'];
	$dimensions = $_POST['dimensions'];
	$publisher = $_POST['publisher'];
	$language = $_POST['language'];
	$department = $_POST['department'];
	
    //mysql_query($conn, "select ")
    $query = "UPDATE medical SET ISBN10='$ISBN10', ISBN13='$ISBN13', name='$name', img='$img', writer='$writer', price='$price', discount='$discount', old_price='$old_price', save='$save', weight='$weight', pages='$pages', dimensions='$dimensions', publisher='$publisher', language='$language', department='$department' WHERE ISBN10='$ISBN10'";
	mysqli_query($conn, $query);
?>
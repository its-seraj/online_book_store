<?php
    session_start();
    if(isset($_SESSION["username"])){
    }
    else{
        echo "<script>location.href='../index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="addBook.css?<?=time()?>">
	<script type="text/javascript" src="../../LogIn/js/jquery-1.11.0.min.js"></script>
</head>
<body>
	<div class="nav">
        <h1 class="logo">Admin Panel</h1>
        <div class="underline"></div>
        <div class="nav2"><span class="horizontal"></span><h1 class="name"><?= $_SESSION["username"] ?></h1></div>
        <div class="logout">Logout</div>
    </div>
	<script>
        $(".logo").on("click", function(){
            location.href='../index.php';
        });
    </script>
<?php
	include("../../database/database.php");
	//for removing undefined index error -->
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(0);
	
	
	echo "
	<div class='container'>
		<form autocomplete='off' method='POST'>
			<div class='leftBox'>
				<div class='inputBox'><input type='text' name='ISBN10' required='required'><span>ISBN-10</span></div>
				<div class='inputBox'><input type='text' name='ISBN13' required='required'><span>ISBN-13</span></div>
				<div class='inputBox'><input type='text' name='name' required='required'><span>Book Name</span></div>
				<div class='inputBox'><input type='text' name='img' required='required'><span>img Name</span></div>
				<div class='inputBox'><input type='text' name='writer' required='required'><span>Writer</span></div>
				<div class='inputBox'><input type='text' name='price' required='required'><span>Price</span></div>
				<div class='inputBox'><input type='number' name='discount' required='required'><span>Discount</span></div>
				<div class='inputBox'><input type='text' name='oldprice' required='required'><span>Old Price</span></div>
			</div>
			<div class='rightBox'>
				<div class='inputBox'><input type='text' name='save' required='required'><span>Save</span></div>
				<div class='inputBox'><input type='number' name='weight' required='required'><span>Weight</span></div>
				<div class='inputBox'><input type='number' name='pages' required='required'><span>Pages</span></div>
				<div class='inputBox'><input type='text' name='dimensions' required='required'><span>Dimensions</span></div>
				<div class='inputBox'><input type='text' name='publisher' required='required'><span>Publisher</span></div>
				<div class='inputBox'><input type='text' name='language' required='required'><span>Language</span></div>
				<div class='inputBox'><input type='text' name='department' required='required'><span>Department</span></div>
			</div>
			<div class='inputBox'><input id='submit' type='submit' name='submit' value='ADD BOOK'></div>
		</form>
	</div>
	";
	
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

	$count = 0;
	
	//mysql_query($conn, "select ")
	if(isset($_POST['submit'])){
		$query = mysqli_query($conn, "insert into medical values('$ISBN10', '$ISBN13', '$name', '$img', '$writer', '$price', '$discount', '$old_price', '$save', '$weight', '$pages', '$dimensions', '$publisher', '$language', '$department')");
	}
	if(isset($query)){
		$count++;
		echo "<h4 class='status'>".$count."&nbsp; Data inserted</h4>";
	}
	else{
		echo "<h4 class='status'>! Data not Inserted</h4>";
	}
?>

<script>
	//click on logut to logout
	$(".logout").on("click", function(){
        $.ajax({
            url: "../logout.php",
            type: "POST",
            success: function(data){
                //
				location.href='../index.php';
            }
        });
    });

</script>

<!-- <script>
	var btn = document.querySelector("#submit");
	var disp = document.querySelector('.status');
	btn.onclick = function(){
		disp.style.display = "block";
	}
</script> -->

</body>
</html>
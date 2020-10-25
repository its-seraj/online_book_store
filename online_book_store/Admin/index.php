<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css?<?=time()?>">
    <script type="text/javascript" src="../LogIn/js/jquery-1.11.0.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="nav">
            <h1 class="logo">Admin Panel</h1>
            <div class="underline"></div>
        </div>
    </div>
    <script>
        $(".logo").on("click", function(){
            location.href='index.php';
        });
    </script>
    <div class="login">
        <h1>Admin LogIn</h1>
        <img src="update_delete/admin.png" />
        <p class="alert">! Incorrect UserName or Password</p>
        <form autocomplete='off' method='POST'>
            <div class="inputBox"><input type="text" id="username" name="username" required="required"><span>UserName</span></div>
            <div class="inputBox"><input type="password" id="password" name="password" required="required"><span>Password</span></div>
            <div class="inputBox"><input type="submit" id="submit" value="Let's Go" ></div>
        </form>
    </div>
    
    <script>
        $(document).ready(function(){
            //check for session
            $.ajax({
                url: "verifysession.php",
                type: "POST",
                success: function(data){
                    if(data == 2){
                        $(".login").css("display", "none");
                        $(".welcome").css("display", "block");
                    }else{}
                }
            });

            //click on logut to logout
            $(".logout").on("click", function(){
                $.ajax({
                    url: "logout.php",
                    type: "POST",
                    success: function(data){
                        //
                        location.href='index.php';
                    }
                });
            });

            $("#submit").on("click", function(e){
                e.preventDefault();
                var username = $("#username").val();
                var password = $("#password").val();
                $.ajax({
                    url: "verifyadmin.php",
                    type: "POST",
                    data: {username: username, password: password},
                    success: function(data){
                        //no return
                        if(data == 1){
                            //welcome
                            $(".login").css("display", "none");
                            $(".welcome").css("display", "block");
                            $(".name").text(username);
                        }
                        else if(data == 0){
                            //login again
                            /* $("#username").attr("value", "");
                            $("#password").attr("value", ""); */
                            $("form").trigger("reset");
                            $(".alert").css("display", "block");
                        }
                    }
                });
            });
        });
    </script>
    
    <!-- After successful login -->
    <div class="welcome">
        <div class="nav2"><span class="horizontal"></span><h1 class="name"><?= $_SESSION["username"] ?></h1></div>
        <div class="logout">Logout</div>

        <div class="body">
            <div class="container1">
                <div class="head">Modify / Delete Books</div>
                <div class="button"><a href="update_delete/index.php">Let's go</a></div>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
            </div>
            <div class="container2">
                <div class="head">Add Books</div>
                <div class="button"><a href="addBook/index.php">Let's go</a></div>
                <p><span class="circle"></span>&nbsp; You can Add some Books in Database </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
            </div>
            <div class="container3">
                <div class="head">Manage User Account</div>
                <div class="button"><a href="user_account/index.php">Let's go</a></div>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
            </div>
            <div class="container4">
                <div class="head">View Cart</div>
                <div class="button"><a href="user_cart/index.php">Let's go</a></div>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
                <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
            </div>
        </div>
    </div>
</body>
</html>
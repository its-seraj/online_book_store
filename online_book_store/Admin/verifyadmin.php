<?php
    include("../database/database.php");

        $username = $_POST["username"];
        $pass = $_POST["password"];
        $query = "SELECT * FROM admin where username='$username'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($username == $row["username"] && $pass == $row["password"]){
                session_start();
                $_SESSION["username"] = $username;
                echo 1;
            }
            else{
                echo 0;
            }
        }
?>
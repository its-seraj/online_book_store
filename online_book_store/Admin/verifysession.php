<?php
    session_start();
    if(isset($_SESSION["username"])){
        echo 2;
    }
    else{
        echo "<script>location.href='../index.php'</script>";
    }
?>
<?php
    session_start();
    if(isset($_SESSION["id"])){
        echo 1;
    }
    else{
        echo 0;
    }
?>
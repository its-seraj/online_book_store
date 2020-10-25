<?php
    include("../../database/database.php");
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $query = "SELECT * FROM useraccount where id='$id' && password='$pass'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($id == $row["id"] && $pass == $row["password"]){
            session_start();
            $_SESSION["id"] = $id;
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else{
        echo 0;
    }
?>
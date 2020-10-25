<?php
    include("database/database.php");

    session_start();
    if(isset($_SESSION["id"])){
        $id = $_SESSION['id'];
        $query = "SELECT * FROM useraccount where id='$id'";
        $getuser = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($getuser);

        $item = $_POST["ISBN10"];
        $query3 = "SELECT * FROM carts where isbn10='$item' AND id='$id'";
        $result = mysqli_query($conn, $query3);
        if(mysqli_num_rows($result) == 0){
            if($id == $row["id"]){
                $query2 = "INSERT INTO carts values('$item', '$id', 1)";
                mysqli_query($conn, $query2);
            }
            else{
                //
            }
        }
        else{
            $itemnumber = mysqli_fetch_assoc($result)["numberofitem"];
            $itemnumber++;
            $query4 = "UPDATE carts SET numberofitem='$itemnumber' where isbn10='$item' AND id='$id'";
            mysqli_query($conn, $query4);
        }
        echo 1;
    }
    else{
        echo 0;
    }
?>
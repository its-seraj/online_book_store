<?php
    include("database/database.php");

    $isbn = $_POST["ISBN10"];
    $value = $_POST["val"];

    $query = "SELECT * FROM carts where isbn10='$isbn'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($value == 0){
        $itemnumber = $row["numberofitem"];
        $itemnumber--;
        if($itemnumber > 0){
            $query2 = "UPDATE carts SET numberofitem='$itemnumber' where isbn10='$isbn'";
            mysqli_query($conn, $query2);
        }
        else{
            $query4 = "DELETE FROM carts where isbn10='$isbn'";
            mysqli_query($conn, $query4);
        }
    }
    elseif($value == 1){
        $itemnumber = $row["numberofitem"];
        $itemnumber++;
        $query3 = "UPDATE carts SET numberofitem='$itemnumber' where isbn10='$isbn'";
        mysqli_query($conn, $query3);
    }

?>
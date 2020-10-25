<?php
    include("../../database/database.php");

    $isbn10 = $_POST["isbn10"];

    $query = "DELETE FROM medical where ISBN10='$isbn10'";

    mysqli_query($conn, $query);
?>
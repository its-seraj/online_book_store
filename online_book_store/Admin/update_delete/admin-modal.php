<?php
    include ("../../database/database.php");

    $isbn = $_POST["isbn10"];
    $query = "SELECT * FROM medical where ISBN10='$isbn'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);

?>
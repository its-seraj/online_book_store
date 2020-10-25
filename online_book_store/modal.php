<?php
    include ("database/database.php");

    $name = $_POST["name"];
    $query = "SELECT * FROM medical where name='$name'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);

?>
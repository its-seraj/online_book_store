<?php
    include("../../database/database.php");
    $name = $_POST["name"];
    $id = $_POST["id"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $query = "INSERT INTO useraccount VALUES('$id', '$pass', '$name', '$mobile', '$email')";
    $result = mysqli_query($conn, $query);

    echo "<div class='successfull-register'>Successfull Registration !!</div>";
?>
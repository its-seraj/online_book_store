<?php
    include("../../database/database.php");

    $stream = $_POST['stream'];
    $query = "SELECT ISBN10, name from medical where department='$stream'";

    $result = mysqli_query($conn, $query);

    $output = "<table><tr><th id='isbn'>ISBN-10</th><th id='bkname'>Book Name</th><th id='mod'>Modify</th><th id='del'>Delete</th></tr>";

    if(mysqli_num_rows($result) > 0){
        $i = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)){
            $output .= '<tr><td>'.$row["ISBN10"].'</td>';
            $output .= '<td style="text-align: left; padding-left: 10px;">'.$row["name"].'</td><td><a href="" class="edit" data-value="'.$row["ISBN10"].'">Edit</a></td><td><a href="" class="delete" data-value="'.$row["ISBN10"].'">Delete</a></td></tr>';
        }
    }
    $output .= "</table>";

    echo $output;
?>
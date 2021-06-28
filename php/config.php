<?php  
    $conn = mysqli_connect("localhost","root","","shop");
    // var_dump('123');
    // die();
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    }
    mysqli_set_charset($conn,"utf-8");
?>
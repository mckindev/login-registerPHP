<?php 
    $conn = mysqli_connect("localhost", "root", "", "data_test");

    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }
?>
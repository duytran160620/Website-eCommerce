<?php
// Function openConnection - Kết nối cơ sở dữ liệu 
function openConnection() {
    $servername = "localhost";
    $username = "LTWEB_18CK2";//"eCommerce-admin";
    $password = "LTWEB18CK2";//"ecommerce123456789";
    $dbname = "teste-commerce";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection) {
        die("Không thể kết nối database" .  mysqli_connect_error());
    }
    return $connection;
}
// Function closeConnection - Đóng kết nối cơ sở dữ liệu 
function closeConnection($connection) {
    mysqli_close($connection);
}
?>

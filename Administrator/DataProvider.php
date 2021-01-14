<?php
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
function loadAllProduct(){
    $qr ="select * from sanpham";
    return mysqli_query(openConnection(),$qr);
}
?>
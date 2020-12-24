<?php
// Function openConnection - Kết nối cơ sở dữ liệu - Duy
function openConnection() {
    $servername = "localhost";
    $username = "SwiftNoPro";
    $password = "duytran160620";
    $dbname = "ecommerce";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection) {
        die("Không thể kết nối database" .  mysqli_connect_error());
    }
    return $connection;
}
// Function closeConnection - Đóng kết nối cơ sở dữ liệu - Duy
function closeConnection($connection) {
    mysqli_close($connection);
}
?>

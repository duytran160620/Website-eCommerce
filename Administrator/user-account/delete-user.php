<?php
require_once '../DataProvider.php';
if(isset($_GET['idKH'])) {
    $idKH = $_GET['idKH'];
    $query = "delete from khachhang where idKH='$idKH'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:user-account-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
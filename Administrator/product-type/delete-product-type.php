<?php
require_once '../DataProvider.php';
if(isset($_GET['idLoaiSP'])) {
    $idLoaiSP = $_GET['idLoaiSP'];
    $query = "delete from loaisanpham where idLoaiSP='$idLoaiSP'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:product-type-management.php");
    } else{
        echo "Thất bại";
    }
}
?>
<?php
require_once '../DataProvider.php';

if(isset($_GET['idSP'])) {
    $idSP =$_GET['idSP'];
    $query ="delete from sanpham where idSP='$idSP'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:product-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
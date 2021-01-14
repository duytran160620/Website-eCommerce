<?php
require_once '../DataProvider.php';
if(isset($_GET['idNSX'])){
    $idNSX = $_GET['idNSX'];
    $query = "delete from nhasanxuat where idNSX='$idNSX'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:manufacturer-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
<?php
require_once '../DataProvider.php'; 

if(isset($_POST['add'])){
    $idLoaiSP = $_POST['idLoaiSP'];
    settype($idLoaiSP,"int");
    $tenLoaiSP = $_POST['tenLoaiSP'];
    $query = "insert into loaisanpham values('$idLoaiSP','$tenLoaiSP')";
    if(mysqli_query(openConnection(), $query)){
        header("Location:product-type-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
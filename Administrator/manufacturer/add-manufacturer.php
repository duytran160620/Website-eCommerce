<?php
require_once '../DataProvider.php';

if(isset($_POST['add'])) {
    $tenNSX = $_POST['tenNSX'];
    $urlHinh = $_POST['urlHinh'];

    $query = "insert into nhasanxuat values('', '$tenNSX', '$urlHinh')";
    if(mysqli_query(openConnection(), $query)){
        header("Location:manufacturer-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
<?php
require_once '../DataProvider.php';
if(isset($_POST['add'])) {
    $tenKH = $_POST['tenKH'];
    $diaChi = $_POST['diaChi'];
    $sdt = $_POST['sdt'];
    $username = $_POST['username'];
    $password =$_POST['password'];

    $query = "insert into khachhang values('', '$tenKH', '$diaChi', '$username', '$password', '$sdt')";
    if(mysqli_query(openConnection(), $query)){
        header("Location:user-account-management.php");
    }else{
        echo "Thất bại";
    }

}
?>
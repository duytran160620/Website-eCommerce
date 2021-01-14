<?php
require_once '../DataProvider.php';
if(isset($_POST['add'])) {
    
    $tenSP = $_POST['tenSP'];

    $moTaCT = $_POST['motaCT'];

    $idNSX = $_POST['idNSX'];
    settype($idNSX,"int");

    $giaSP = $_POST['giaSP'];
    settype($giaSP,"int");

    $loaiSP = $_POST['loaiSP'];
    settype($loaiSP,"int");

    $urlHinh = $_POST['urlHinh'];

    $soLuongBan = $_POST['soLuongBan'];
    settype($soLuongBan,"int");

    $soLuotXem = $_POST['soLuotXem'];
    settype($soLuotXem,"int");

    
    
    // echo $tenSP . "<br>";
    // echo $moTaCT . "<br>";
    // echo $idNSX . "<br>";
    // echo $giaSP . "<br>";
    // echo $loaiSP . "<br>";
    // echo $urlHinh . "<br>";
    // echo $soLuongBan . "<br>";
    // echo $soLuotXem . "<br>";
    // echo $idSP . "<br>";
    $query = "insert into sanpham values('', '$tenSP', '$moTaCT', '$idNSX', '$giaSP', '$loaiSP', '$urlHinh', '$soLuongBan', '$soLuotXem')";
    if(mysqli_query(openConnection(), $query)) {
        header("Location:product-management.php");
    }else{
        echo "Thất bại";
    }
}

?>
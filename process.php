<?php
require_once 'db-connection.php';

function selectLatestProduct() {
    $query = "select * from sanpham join sanphamnhap on sanpham.idSP = sanphamnhap.idSP where sanpham.LoaiSP = 1
    ORDER by sanphamnhap.NgayNhap ASC 
    LIMIT 10";
    return mysqli_query(openConnection(), $query);
}

function selectDataFromQuery($query) {
     return mysqli_query(openConnection(),$query);
}
?>
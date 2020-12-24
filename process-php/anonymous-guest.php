<?php
require_once 'db-connection.php';
// Function function selectLatestProduct - lấy sản phẩm mới nhất - Duy
function selectLatestProduct($amount, $type) {
    $query = "select * 
                FROM sanpham sp, sanphamnhap spn 
                Where (sp.idSP = spn.idSP) and sp.LoaiSp = $type
                ORDER BY spn.NgayNhap ASC 
                LIMIT $amount
            ";
    return mysqli_query(openConnection(), $query);
}



?>
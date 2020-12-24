<?php
require_once 'db-connection.php';
// Function function selectLatestProduct - lấy sản phẩm mới nhất - Duy
function selectLatestProduct() {
    $query = "select * FROM sanpham sp, sanphamnhap spn where (sp.idSP = spn.idSP) and sp.LoaiSp = 1 ORDER BY spn.NgayNhap ASC LIMIT 10";
    return mysqli_query(openConnection(), $query);
}



?>
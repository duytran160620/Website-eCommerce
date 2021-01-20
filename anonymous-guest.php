<?php
require_once 'db-connection.php';

// function selectNewProduct - lay dien thoai moi
function selectNewProduct($amount, $type)
{
    $query = "SELECT * 
    FROM sanpham sp, sanphamnhap spn 
    Where (sp.idSP = spn.idSP) and sp.LoaiSp = $type
    ORDER BY spn.NgayNhap ASC 
    LIMIT $amount
";
return mysqli_query(openConnection(), $query); 
}

// Function selectLatestProduct - lấy sản phẩm mới nhất 
function selectLatestProduct($amount, $type)
{
    $query = "SELECT * 
                FROM sanpham sp, sanphamnhap spn 
                Where (sp.idSP = spn.idSP) and sp.LoaiSp = $type
                ORDER BY spn.NgayNhap ASC 
                LIMIT $amount
            ";
    return mysqli_query(openConnection(), $query);
}

// Function selectInfoProduct - lấy thông tin của sản phẩm 
function selectInfoProduct($idSP)
{
    $query = "SELECT * 
            FROM sanpham 
            WHERE sanpham.idSP = '$idSP'
    ";
    return mysqli_query(openConnection(), $query);
}
// Function selectDataFromQuery - lấy dữ liệu của câu truy vần bất kì 
function selectDataFromQuery($query)
{
    return mysqli_query(openConnection(), $query);
}
// Function selectInfoProductByCompany - lấy thông tin sản phẩm theo nhà sản xuất
function selectInfoProductByCompany($idNSX)
{
    $query = "SELECT sanpham.idSP, sanpham.TenSP, sanpham.GiaSP ,sanpham.urlHinh 
            FROM `sanpham` join `nhasanxuat` on sanpham.idNSX = nhasanxuat.idNSX 
            where sanpham.idNSX = '$idNSX'
    ";
    return mysqli_query(openConnection(), $query);
}
// Function selectTypeProduct - lấy loại sản phẩm 
function selectTypeProduct()
{
    $query = "select distinct sanpham.LoaiSP from sanpham";
    return mysqli_query(openConnection(), $query);
}
// Function selectTypeProduct - lấy sản phẩm theo loại 
function selectInfoProductByType(int $type)
{
    $query = "select sanpham.idSP, sanpham.TenSP, sanpham.GiaSP ,sanpham.urlHinh from sanpham where sanpham.LoaiSP = $type";
    return mysqli_query(openConnection(), $query);
}
// Function selectProductByPage - lấy sản phẩm theo trang 
function selectProductByPage($idNSX, int $from, $soTinMotTrang)
{
    $query = "SELECT sanpham.idSP, sanpham.TenSP, sanpham.GiaSP ,sanpham.urlHinh 
            FROM `sanpham` join `nhasanxuat` on sanpham.idNSX = nhasanxuat.idNSX 
            where sanpham.idNSX = '$idNSX' limit $from, $soTinMotTrang";
    return mysqli_query(openConnection(), $query);
}

// Function selectTypeProduct - lấy sản phẩm theo loại 
function selectInfoProductByTypeAndPageIndex(int $type, int $from, int $soSPMotTrang)
{
    $query = "select sanpham.idSP, sanpham.TenSP, sanpham.GiaSP ,sanpham.urlHinh 
              from sanpham 
              where sanpham.LoaiSP = $type
              limit $from, $soSPMotTrang
    ";
    return mysqli_query(openConnection(), $query);
}
// Function selectTopSeller - lấy sản phẩm bán chạy nhất 
function selectTopSeller()
{
    $query = "SELECT * FROM sanpham sp Where sp.LoaiSp = 1 ORDER BY sp.SoLuongBan DESC LIMIT 12";
    $result = mysqli_query(openConnection(), $query);
    class Product
    {
        public $idSP;
        public $tenSP;
        public $giaSP;
        public $urlHinh;
        public $idNSX;
    }
    $array = array();
    while ($row = mysqli_fetch_array($result)) {
        $product = new Product();
        $product->idSP = $row['idSP'];
        $product->tenSP = $row['TenSP'];
        $product->giaSP = $row['GiaSP'];
        $product->urlHinh = $row['urlHinh'];
        array_push($array, $product);
    }
    return $array;
}
// function selectNhaSanXuatByIdSP - lấy idNSX dữa trên mã sản phẩm
function selectNhaSanXuatByIdSP($idSP)
{
    $query = "select sp.idNSX from sanpham sp where sp.idSP = $idSP";
    return mysqli_query(openConnection(), $query);
}
// function selectNhaSanXuatByIdSP - lấy idNSX dữa trên mã sản phẩm
function selectRelatedProductByIdNSX($idNSX)
{
    $query = "SELECT sp.idSP, sp.TenSP, sp.MoTaCT, sp.GiaSP, sp.urlHinh, sp.SoLuongBan, sp.SoLuotXem FROM sanpham sp join nhasanxuat nsx on sp.idNSX = nsx.idNSX Where nsx.idNSX = $idNSX LIMIT 5";
    return mysqli_query(openConnection(), $query);
}

function searchProductByName($name)
{
    $query = "select sp.idSP, sp.TenSP, sp.GiaSP, sp.urlHinh from sanpham sp where sp.TenSP like '%$name%'";
    return mysqli_query(openConnection(), $query);
}
function searchTop5ProductByName($name) {
    $query = "select sp.idSP, sp.TenSP, sp.GiaSP, sp.urlHinh from sanpham sp where sp.TenSP like '%$name%' limit 5";
    return mysqli_query(openConnection(), $query);
}
function searchProductByNameWithLimit($name, $from, $soSPMotTrang) {
    $query = "select sp.idSP, sp.TenSP, sp.GiaSP, sp.urlHinh from sanpham sp where sp.TenSP like '%$name%' limit $from, $soSPMotTrang";
    return mysqli_query(openConnection(), $query);
}



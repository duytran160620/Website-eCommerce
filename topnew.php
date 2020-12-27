<?php
require_once 'process.php';
$query = "select * from sanpham join sanphamnhap on sanpham.idSP = sanphamnhap.idSP where sanpham.LoaiSP = 1
ORDER by sanphamnhap.NgayNhap ASC 
LIMIT 3";
$result = selectDataFromQuery($query);
while ($row  = mysqli_fetch_assoc($result)) {
    
?>
    <div class="single-wid-product">
    <a href="single-product.php"><img src="<?php echo $row['urlHinh']; ?>" alt="" class="product-thumb"></a>
    <h2><a href="single-product.php"><?php echo $row['TenSP']; ?></a></h2>
    <div class="product-wid-rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <div class="product-wid-price">
        <ins><?php echo $row['GiaSP']; ?></ins>
    </div>
</div>
<?php
}
?>



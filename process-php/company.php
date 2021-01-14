<?php
require_once 'anonymous-guest.php';
$query = "SELECT * FROM nhasanxuat";
$result = selectDataFromQuery($query);
while ($row  = mysqli_fetch_assoc($result)) {
?>
    <a href="product-by-company.php?idNSX=<?php echo $row['idNSX'];?>&tenNSX=<?php echo $row['TenNSX'];?>&trang=1">
        <img src="<?php echo $row['urlHinh'] ?>" alt="">
    </a>
<?php
}
?>
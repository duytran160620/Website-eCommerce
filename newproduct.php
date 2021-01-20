<?php
require_once 'anonymous-guest.php';
require_once 'db-connection.php';
$query = selectNewProduct(4, 1);
while ($row  = mysqli_fetch_assoc($query)) 
{
?>
<div class="thubmnail-recent">
    <img src="<?php echo $row['urlHinh'] ?>" class="recent-thumb" alt="">
        <h2><a href="single-product.php=<?php echo $row['idSP'];?>"><?php echo $row['TenSP'];?></a></h2>
        <div class="product-sidebar-price">
        <ins><?php echo $row['GiaSP'] . " VND"; ?></ins>
        </div>
</div>

<?php
}
?>
<div class="col-md-4">
    <div class="single-product-widget">
        <h2 class="product-wid-title">Top Sellers</h2>
        <?php
        $array = selectTopSeller();
        for ($index = 0; $index < 4; $index++) {
        ?>
            <div class="single-wid-product">
                <a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><img src="<?php echo $array[$index]->urlHinh; ?>" alt="" class="product-thumb"></a>
                <h2><a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><?php echo $array[$index]->tenSP; ?></a></h2>
                <div class="product-wid-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-wid-price">
                    <ins><?php echo $array[$index]->giaSP . " VNĐ"; ?></ins>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>
<div class="col-md-4">
    <div class="single-product-widget">
        <h2 class="product-wid-title" style="color: white;">Top Seller</h2>
        <?php
        for ($index = 4; $index < 8; $index++) {
        ?>
            <div class="single-wid-product">
                <a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><img src="<?php echo $array[$index]->urlHinh; ?>" alt="" class="product-thumb"></a>
                <h2><a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><?php echo $array[$index]->tenSP; ?></a></h2>
                <div class="product-wid-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-wid-price">
                    <ins><?php echo $array[$index]->giaSP . " VNĐ"; ?></ins>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="col-md-4">
    <div class="single-product-widget">
        <h2 class="product-wid-title" style="color:white;">Top Seller</h2>
        <?php
        for ($index = 8; $index < 12; $index++) {
        ?>
            <div class="single-wid-product">
                <a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><img src="<?php echo $array[$index]->urlHinh; ?>" alt="" class="product-thumb"></a>
                <h2><a href="single-product.php?idSP=<?php echo $array[$index]->idSP;?>"><?php echo $array[$index]->tenSP; ?></a></h2>
                <div class="product-wid-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-wid-price">
                    <ins><?php echo $array[$index]->giaSP . " VNĐ"; ?></ins>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<li>
    <a data-toggle="dropdown" data-hover="dropdown" href="category.php">
        <span class="key">Category</span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <?php
        require_once 'anonymous-guest.php';
        $result = selectTypeProduct();
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <li>
                <a href="product-by-type.php?LoaiSP=<?php echo $row['LoaiSP'];?>&page=1">
                    <?php 
                    switch($row['LoaiSP']) {
                        case 1 :
                            echo "Điện thoại";
                            break;
                        case 2:
                            echo "Laptop";
                            break;
                        case 3:
                            echo "Phụ kiện";
                            break;
                    }
                    ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</li>


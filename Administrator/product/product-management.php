<?php require_once '../DataProvider.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
table,
th,
td {
    padding-left: 25px;
    padding-bottom: 5px;
    padding-top: 5px;
    padding-right: 5px;
}

table#form-add-product {
    text-align: center;
    max-width: 40%;
    max-height: 120%;
    margin: auto;
    display: block;
    position: relative;
    border-style: solid;
}

table#table-edit-update-product {
    border: 1px solid black;
    margin: auto;
}

h2 {
    text-align: center;
    color: red;
    font-size: 50px;
}
</style>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../admin.php">Trang quản trị</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="../product/product-management.php">Quản lý sản phẩm</a></li>
                <li><a href="../product-type/product-type-management.php">Quản lý loại sản phẩm</a></li>
                <li><a href="../manufacturer/manufacturer-management.php">Quản lý nhà sản xuất</a></li>
                <li><a href="../user-account/user-account-management.php">Quản lý tài khoản người dùng</a></li>
                <li><a href="../order/order-management.php">Quản lý đơn đặt hàng</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <h2>Quản lý sản phẩm</h2>
    </div>
    <form id="form-add-product" action="add-product.php" method="POST">
        <table id="form-add-product" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Thêm sản phẩm</caption>
            <tr>
                <th><label for="tenSP">Tên sản phẩm</label></th>
                <th><input type="text" name="tenSP" id="tenSP"><br></th>
            </tr>
            <tr>
                <th><label for="motaCT">Mô tả chi tiết</label></th>
                <th><textarea name="motaCT" id="motaCT" cols="30" rows="10"></textarea><br></th>
            </tr>
            <tr>
                <th><label for="idNSX">Tên nhà sản xuất</label></th>
                <th>
                    <select name="idNSX" id="idNSX">
                        <?php
                        $qr = "select * from nhasanxuat";
                        $loaiSP = mysqli_query(openConnection(), $qr);
                        while ($rowLoaiSP = mysqli_fetch_assoc($loaiSP)) {
                        ?>
                        <option value="<?php echo $rowLoaiSP['idNSX']; ?>"><?php echo $rowLoaiSP['TenNSX']; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th><label for="giaSP">Giá sản phẩm</label></th>
                <th><input type="text" name="giaSP" id="giaSP"></th>
            </tr>
            <tr>
                <th><label for="loaiSP">Loại sản phẩm</label></th>
                <th>
                    <select name="loaiSP" id="loaiSP">
                        <?php
                        $qr = "select * from loaisanpham";
                        $loaiSP = mysqli_query(openConnection(), $qr);
                        while ($rowLoaiSP = mysqli_fetch_assoc($loaiSP)) {
                            
                        ?>
                        <option value="<?php echo $rowLoaiSP['idLoaiSP']; ?>"><?php echo $rowLoaiSP['TenLoai']; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th><label for="urlHinh">Link hình ảnh</label></th>
                <th><textarea name="urlHinh" id="urlHinh" cols="30" rows="5"></textarea></th>
            </tr>
            <tr>
                <th><label for="soluongBan">Số lượng bán</label></th>
                <th><input type="text" name="soLuongBan" id="soLuongBan"></th>
            </tr>
            <tr>
                <th><label for="soluongXem">Số lượt xem</label></th>
                <th><input type="text" name="soLuongXem" id="soLuongXem"></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Thêm" name="add" id="add" style="width: 100px; height:30px;">
                </td>
            </tr>
        </table>
    </form>

    <div>
        <h2>Danh sách các sản phẩm</h2>
    </div>

    <div id="table-edit-update-product">
        <table id="table-edit-update-product" style="width: 50%;">
            <tr id="header">
                <th id="idSP">Mã sản phẩm</th>
                <th id="tenSP">Tên sản phẩm</th>
                <!-- <th id="mota">Mô tả sản phẩm</th> -->
                <!-- <th id="idNSX">Mã nhà sản xuất</th> -->
                <th id="giaSP">Giá sản phẩm</th>
                <th id="loaiSP">Loại sản phẩm</th>
                <th id="urlHinh">Link hình ảnh</th>
                <th id="edit-btn">Edit</th>
                <th id="delete-btn">Delete</th>
            </tr>
            <?php
            $result = loadAllProduct();
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr id="row-1">
                <td><?php echo $row['idSP']; ?></td>
                <td><?php echo $row['TenSP']; ?></td>
                <!-- <td><?php echo $row['MoTaCT']; ?></td> -->
                <!-- <td><?php echo $row['idNSX']; ?></td> -->
                <td><?php echo $row['GiaSP']; ?></td>
                <td><?php echo $row['LoaiSP']; ?></td>
                <td><?php echo $row['urlHinh']; ?></td>
                <td><a href="edit-product.php?idSP=<?php echo $row['idSP']; ?>">Edit</a></td>
                <td><a href="delete-product.php?idSP=<?php echo $row['idSP']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
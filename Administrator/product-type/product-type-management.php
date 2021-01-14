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

table#form-add-product-type {
    text-align: center;
    max-width: 40%;
    max-height: 120%;
    margin: auto;
    display: block;
    position: relative;
    border-style: solid;
}

table#table-product-type {
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
        <h2>Quản lý loại sản phẩm</h2>
    </div>
    <form id="form-add-product-type" action="add-product-type.php" method="POST">
        <table id="form-add-product-type" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Thêm loại sản phẩm</caption>
            <tr>
                <th><label for="idLoaiSP">Mã loại sản phẩm</label></th>
                <th><input type="text" name="idLoaiSP" id="idLoaiSP"><br></th>
            </tr>
            <tr>
                <th><label for="tenLoaiSP">Tên loại sản phẩm</label></th>
                <th><input type="text" name="tenLoaiSP" id="tenLoaiSP"><br></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Thêm" name="add" id="add" style="width: 100px; height:30px;">
                </td>
            </tr>
        </table>
    </form>

    <div>
        <h2>Danh sách các loại sản phẩm</h2>
    </div>

    <div id="table-product-type">
        <table id="table-product-type" style="width: 50%;">
            <tr id="header">
                <th id="idSP">Mã loại sản phẩm</th>
                <th id="tenSP">Tên loại sản phẩm</th>
                <th id="edit-btn">Edit</th>
                <th id="delete-btn">Delete</th>
            </tr>
            <?php
            $query = "select * from loaisanpham";
            $resultQuery = mysqli_query(openConnection(), $query); 
            while ($row = mysqli_fetch_array($resultQuery)) {
            ?>
            <tr id="row-1">
                <td><?php echo $row['idLoaiSP']; ?></td>
                <td><?php echo $row['TenLoai']; ?></td>
                <td><a href="edit-product-type.php?idLoaiSP=<?php echo $row['idLoaiSP']; ?>">Edit</a></td>
                <td><a href="delete-product-type.php?idLoaiSP=<?php echo $row['idLoaiSP']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
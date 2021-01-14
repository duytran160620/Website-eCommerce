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
        <h2>Quản lý khách hàng</h2>
    </div>
    <form id="form-add-product-type" action="add-user.php" method="POST">
        <table id="form-add-product-type" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Thêm khách hàng</caption>
            <tr>
                <th><label for="tenKH">Tên khách hàng</label></th>
                <th><input type="text" name="tenKH" id="tenKH"><br></th>
            </tr>
            <tr>
                <th><label for="diaChi">Địa chỉ</label></th>
                <th><input type="text" name="diaChi" id="diaChi"><br></th>
            </tr>
            <tr>
                <th><label for="sdt">Số điện thoại</label></th>
                <th><input type="text" name="sdt" id="sdt"><br></th>
            </tr>
            <tr>
                <th><label for="username">Username</label></th>
                <th><input type="text" name="username" id="username" required=""><br></th>
            </tr>
            <tr>
                <th><label for="password">Password</label></th>
                <th><input type="password" name="password" id="password" required=""><br></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Thêm" name="add" id="add" style="width: 100px; height:30px;">
                </td>
            </tr>
        </table>
    </form>

    <div>
        <h2>Danh sách khách hàng</h2>
    </div>

    <div id="table-product-type">
        <table id="table-product-type" style="width: 80%;">
            <tr id="header">
                <th id="idSP">Mã khách hàng</th>
                <th id="tenSP">Tên khách hàng</th>
                <th id="idSP">Địa chỉ</th>
                <th id="tenSP">Số điện thoại</th>
                <th id="idSP">Username</th>
                <th id="tenSP">Password</th>
                <th id="edit-btn">Edit</th>
                <th id="delete-btn">Delete</th>
            </tr>
            <?php
            $query = "select * from khachhang";
            $resultQuery = mysqli_query(openConnection(), $query); 
            while ($row = mysqli_fetch_array($resultQuery)) {
            ?>
            <tr id="row-1">
                <td><?php echo $row['idKH']; ?></td>
                <td><?php echo $row['TenKH']; ?></td>
                <td><?php echo $row['DiaChi']; ?></td>
                <td><?php echo $row['SDT']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td><a href="edit-user.php?idKH=<?php echo $row['idKH']; ?>">Edit</a></td>
                <td><a href="delete-user.php?idKH=<?php echo $row['idKH']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
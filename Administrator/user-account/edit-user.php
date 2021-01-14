<?php require_once '../DataProvider.php'; ?>
<?php
// hiển thị dữ liệu cũ lên giao diện
$rowKH;
if(isset($_GET['idKH'])) {
    $idKH = $_GET['idKH'];
    $query = "select * from khachhang kh where kh.idKH=$idKH";
    $resultQuery = mysqli_query(openConnection(), $query);
    $rowKH = mysqli_fetch_array($resultQuery);
}
?>
<?php
// update user
if(isset($_POST['edit'])) {
    $tenKH = $_POST['tenKH'];
    $diaChi = $_POST['diaChi'];
    $sdt = $_POST['sdt'];
    $username = $_POST['username'];
    $password =$_POST['new-password'];
    $idKH = $_GET['idKH'];
    $query = "update khachhang set TenKH='$tenKH', DiaChi='$diaChi', Username='$username', Password='$password', SDT='$sdt' where idKH='$idKH'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:user-account-management.php");
    }else{
        echo "Thất bại";
    }
}
?>
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
    <form id="form-add-product-type" action="" method="POST">
        <table id="form-add-product-type" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Cập nhật khách hàng</caption>
            <tr>
                <th><label for="tenKH">Tên khách hàng</label></th>
                <th><input type="text" name="tenKH" id="tenKH" value="<?php echo $rowKH['TenKH'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="diaChi">Địa chỉ</label></th>
                <th><input type="text" name="diaChi" id="diaChi" value="<?php echo $rowKH['DiaChi'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="sdt">Số điện thoại</label></th>
                <th><input type="text" name="sdt" id="sdt" value="<?php echo $rowKH['SDT'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="username">Username</label></th>
                <th><input type="text" name="username" id="username" value="<?php echo $rowKH['Username'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="password">Password cũ</label></th>
                <th><input type="password" name="old-password" id="old-password" value="<?php echo $rowKH['Password'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="password">Password mới</label></th>
                <th><input type="password" name="new-password" id="new-password" required=""><br></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Cập nhật" name="edit" id="edit" style="width: 100px; height:30px;">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
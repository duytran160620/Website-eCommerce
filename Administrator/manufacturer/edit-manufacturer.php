<?php require_once '../DataProvider.php';?>
<?php 
// hiễn thị dữ liệu cũ lên giao diện
$rowNSX;
if(isset($_GET['idNSX'])) {
    $idNSX = $_GET['idNSX'];
    $query = "select * from nhasanxuat nsx where nsx.idNSX=$idNSX";
    $resultQuery = mysqli_query(openConnection(), $query);
    $rowNSX = mysqli_fetch_array($resultQuery);
}
?>
<?php
// cập nhật dữ liệu mới
if(isset($_POST['edit'])) {
    $tenNSX = $_POST['tenNSX'];
    $urlHinh = $_POST['urlHinh'];
    $idNSX = $_GET['idNSX'];
    $query = "update nhasanxuat set TenNSX='$tenNSX', urlHinh='$urlHinh' where idNSX='$idNSX'";
    if(mysqli_query(openConnection(), $query)){
        header("Location:manufacturer-management.php");
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

table#form-add-manufacturer {
    text-align: center;
    max-width: 40%;
    max-height: 120%;
    margin: auto;
    display: block;
    position: relative;
    border-style: solid;
}

table#table-manufacturer {
    border: 1px solid black;
    margin: auto;
} 
h2 {
    text-align: center;
    color: red;
    font-size: 50px;
}
</style>
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
        <h2>Quản lý nhà sản xuất</h2>
    </div>
    <form id="form-add-manufacturer" action="" method="POST">
        <table id="form-add-manufacturer" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Cập nhật nhà sản xuất</caption>
            <!-- <tr>
                <th><label for="idLoaiSP">Mã loại sản phẩm</label></th>
                <th><input type="text" name="idLoaiSP" id="idLoaiSP"><br></th>
            </tr> -->
            <tr>
                <th><label for="tenNSX">Tên nhà sản xuất</label></th>
                <th><input type="text" name="tenNSX" id="tenNSX" value="<?php echo $rowNSX['TenNSX'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="tenNSX">Link hình ảnh</label></th>
                <th><textarea name="urlHinh" id="urlHinh" cols="30" rows="5"><?php echo $rowNSX['urlHinh'];?></textarea><br></th>
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
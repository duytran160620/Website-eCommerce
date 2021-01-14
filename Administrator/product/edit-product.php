<?php require_once '../DataProvider.php'; ?>
<?php
// hiện sản phẩm lên form
$rowSP;
$idSP;
if (isset($_GET['idSP'])) {
    $idSP = $_GET['idSP'];
    $query = "select * from sanpham where sanpham.idSP=$idSP";
    $resultQuery = mysqli_query(openConnection(), $query);
    $rowSP = mysqli_fetch_array($resultQuery);
}
?>
<?php
// update 
if(isset($_POST['edit']))
{
    $tenSP = $_POST['tenSP'];

    $moTaCT = $_POST['motaCT'];

    $idNSX = $_POST['idNSX'];
    settype($idNSX,"int");

    $giaSP = $_POST['giaSP'];
    settype($giaSP,"int");

    $loaiSP = $_POST['loaiSP'];
    settype($loaiSP,"int");

    $urlHinh = $_POST['urlHinh'];

    $soLuongBan = $_POST['soLuongBan'];
    settype($soLuongBan,"int");

    $soLuotXem = $_POST['soLuotXem'];
    settype($soLuotXem,"int");
    
    $idSP = $_GET['idSP'];
    $query = "update sanpham set TenSP='$tenSP', MoTaCT='$moTaCT', idNSX='$idNSX', GiaSP='$giaSP', LoaiSP='$loaiSP', urlHinh='$urlHinh', SoLuongBan='$soLuongBan', SoLuotXem='$soLuotXem' where idSP='$idSP'";
    if(mysqli_query(openConnection(), $query)) {
        header("Location:product-management.php");
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

    table#form-edit-product {
        text-align: center;
        max-width: 40%;
        max-height: 120%;
        margin: auto;
        display: block;
        position: relative;
        border-style: solid;
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
    <form id="form-edit-product" action="" method="POST">
        <table id="form-edit-product" style="width: 100%;">
            <caption style="text-align: center; font-size:35px;">Cập nhật sản phẩm</caption>
            <tr>
                <th><label for="tenSP">Tên sản phẩm</label></th>
                <th><input type="text" name="tenSP" id="tenSP" value="<?php echo $rowSP['TenSP'];?>"><br></th>
            </tr>
            <tr>
                <th><label for="motaCT">Mô tả chi tiết</label></th>
                <th><textarea name="motaCT" id="motaCT" cols="30" rows="10" ><?php echo $rowSP['MoTaCT'];?></textarea><br></th>
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
                            <option <?php if($rowLoaiSP['idNSX'] == $rowSP['idNSX']) echo "selected='selected'";?> value="<?php echo $rowLoaiSP['idNSX']; ?>"><?php echo $rowLoaiSP['TenNSX']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th><label for="giaSP">Giá sản phẩm</label></th>
                <th><input type="text" name="giaSP" id="giaSP" value="<?php echo $rowSP['GiaSP'];?>"></th>
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
                            <option <?php if($rowLoaiSP['idLoaiSP'] == $rowSP['LoaiSP']) echo "selected='selected'";?> value="<?php echo $rowLoaiSP['idLoaiSP']; ?>"><?php echo $rowLoaiSP['TenLoai']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th><label for="urlHinh">Link hình ảnh</label></th>
                <th><textarea name="urlHinh" id="urlHinh" cols="30" rows="5" ><?php echo $rowSP['urlHinh'];?></textarea><br></th>
            </tr>
            <tr>
                <th><label for="soLuongBan">Số lượng bán</label></th>
                <th><input type="text" name="soLuongBan" id="soLuongBan" value="<?php echo $rowSP['SoLuongBan'];?>"></th>
            </tr>
            <tr>
                <th><label for="soLuongXem">Số lượt xem</label></th>
                <th><input type="text" name="soLuotXem" id="soLuotXem" value="<?php echo $rowSP['SoLuotXem'];?>"></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Cập nhật" name="edit" id="edit" style="width: 100px; height:30px;">
                </td>
            </tr>
        </table>
    </form>

    </div>
</body>

</html>
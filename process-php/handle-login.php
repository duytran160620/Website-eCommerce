<?php require_once 'anonymous-guest.php';?>
<?php
// kiểm tra đăng nhập
session_start();
if(isset($_POST['Login']))
{
    if(isset($_POST['admin']))
    {
        if(isset($_POST['Username']) || isset($_POST['Password'])) {
            $un = $_POST['Username'];
            $pw = $_POST['Password'];
            $qr = "select * from admin where Username = '$un' and Password = '$pw'";
            $resultQuery = mysqli_query(openConnection(), $qr);
            if(mysqli_num_rows($resultQuery) == 1)
            {
                $row = mysqli_fetch_array($resultQuery);
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Password'] = $row['Password'];
                echo "Thành công";
                header("Location:../layoutbackup/index.php");
            }
            else {
                echo "<script>alert('Đăng nhập thất bại')</script>";
            }
        }
    } else if (isset($_POST['khachhang']))
    {
        if(isset($_POST['Username']) || isset($_POST['Password'])) {
            $un = $_POST['Username'];
            $pw = $_POST['Password'];
            $qr = "select * from khachhang where Username = '$un' and Password = '$pw'";
            $resultQuery = mysqli_query(openConnection(), $qr);
            if(mysqli_num_rows($resultQuery) == 1)
            {
                $row = mysqli_fetch_array($resultQuery);
                $_SESSION['idKH'] = $row['idKH'];
                $_SESSION['TenKH'] = $row['TenKH'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Password'] = $row['Password'];
                header("Location:../home.php");
            }
            else {
                echo "<script>alert('Đăng nhập thất bại')</script>";
            }
        }
    }
}
?>
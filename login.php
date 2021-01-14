<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
    <title>LogIn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
   
</head>
<script>
function checkBoxAdmin() {
    if(document.getElementById("admin").checked == true)
    {
        document.getElementById("khachhang").checked = false;
    }else {
        document.getElementById("khachhang").checked = true;
    }
}
function checkBoxKhachHang() {
    if(document.getElementById("khachhang").checked == true)
    {
        document.getElementById("admin").checked = false;
    }else {
        document.getElementById("admin").checked = true;
    }
}



</script>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>LOGIN</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="process-php/handle-login.php" method="POST">
                    <input class="text" type="text" name="Username" placeholder="Username" required="">
                    <input class="text" type="password" name="Password" placeholder="Password" required=""><br>
                    <input type="checkbox" id="admin" name="admin" value="Admin" onchange="checkBoxAdmin()">
                    <label for="admin" style="color: white;">Admin</label><br>
                    <input type="checkbox" id="khachhang" name="khachhang" value="KhachHang"onchange="checkBoxKhachHang()">
                    <label for="KhachHang" style="color: white;">Khách Hàng</label><br>
                    <input type="submit" value="LOGIN" name="Login">
                </form>
            </div>
        </div>
        
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/"
                    target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>
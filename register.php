<?php 
include('process-php/db-connection.php');
?>
<?php
if (isset($_POST['Register'])) {
    $fullname = $_POST['FullName'];
    $address = $_POST['Address'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $phonenumber = $_POST['Phonenumber'];
   
    echo $fullname;
    $query = "insert into khachhang values ('','$fullname','$address','$username','$password','$phonenumber')";
    if(mysqli_query(openConnection(), $query)) {
        echo "ok";
    } else{
        echo "ko";
    }
    
}
else{
    echo "ko";
}
?>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
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

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>SignUp</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="POST">
                    <input class="text " type="text" name="FullName" placeholder="Full Name" required=""><br> </br>
                    <input class="text " type="text" name="Address" placeholder="Address" required=""><br> </br>
                    <input class="text " type="text" name="Username" placeholder="User Name" required=""><br> </br>
                    <input class="text " type="text" name="Password" placeholder="Password" required=""><br> </br>
                    <input class="text " type="text" name="Phonenumber" placeholder="Number Phone" required="">


            
                    
                    <input type="submit" value="REGISTER" name="Register">
                </form>
                <p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
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
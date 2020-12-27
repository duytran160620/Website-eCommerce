<?php
    function openConnection(){
        $servername = "localhost";
        $username = "thao123";
        $password = "@LtvVGVg#4,V-bA";
        $dbname = "data";

        $conn = mysqli_connect($servername, $username,$password, $dbname, 3306);
        if (!$conn) {
            die("Can not connect" . mysqli_connect_error());
        }
        return $conn;
    }
    function closeConnection($conn) {
        mysqli_close($conn);
    }
?>
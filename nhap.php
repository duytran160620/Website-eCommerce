<?php
require_once 'process-php/db-connection.php';
$username ="amin123";
$pa ="admin123";
$qr = "insert into admin values('$username', '$pa')";
if(mysqli_query(openConnection(), $qr)) {
    echo "ok";
} else{
    echo "not";
}

?>
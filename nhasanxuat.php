<?php
require_once 'process.php';
$query = "SELECT * FROM nhasanxuat";
$result = selectDataFromQuery($query);
while ($row  = mysqli_fetch_assoc($result)) {
?>
    <a href="#">
        <img src="<?php echo $row['urlHinh'] ?>" alt="">
    </a>
    
<?php
}
?>
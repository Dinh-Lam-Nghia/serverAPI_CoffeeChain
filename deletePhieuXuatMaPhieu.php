
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $sql = "DELETE FROM phieuxuatkho WHERE `phieuxuatkho`.`maPhieuNX` = '".$maPhieuNX."'";
	$result = $connect->query($sql);

?> 
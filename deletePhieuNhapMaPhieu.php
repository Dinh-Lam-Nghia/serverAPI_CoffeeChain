
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $sql = "DELETE FROM phieunhapkho WHERE `phieunhapkho`.`maPhieuNX` = '".$maPhieuNX."'";
	$result = $connect->query($sql);

?> 
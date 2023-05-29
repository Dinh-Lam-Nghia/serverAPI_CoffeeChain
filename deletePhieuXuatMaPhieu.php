
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $coSo = $_POST['coSo'];
    $sql = "DELETE FROM phieuxuatkho WHERE `phieuxuatkho`.`maPhieuNX` = '".$maPhieuNX."' AND `phieuxuatkho`.`coSo` = '".$coSo."'";
	$result = $connect->query($sql);

?> 

<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $coSo = $_POST['coSo'];
    $sql = "DELETE FROM phieunhapkho WHERE `phieunhapkho`.`maPhieuNX` = '".$maPhieuNX."' AND `phieunhapkho`.`coSo` = '".$coSo."'";
	$result = $connect->query($sql);

?> 
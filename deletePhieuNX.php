
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $coSo = $_POST['coSo'];

    $sql0 = "DELETE FROM phieunhapkho WHERE `phieunhapkho`.`maPhieuNX` = ".$maPhieuNX." AND `phieunhapkho`.`coSo` = '".$coSo."'";
	  $result = $connect->query($sql0);
  
    $sql1 = "DELETE FROM phieuxuatkho WHERE `phieuxuatkho`.`maPhieuNX` = ".$maPhieuNX." AND `phieuxuatkho`.`coSo` = '".$coSo."'";
    $result = $connect->query($sql1);
    
    $sql2 = "DELETE FROM phieunhapxuatkho WHERE `phieunhapxuatkho`.`maPhieuNX` = ".$maPhieuNX." AND `phieunhapxuatkho`.`coSo` = ".$coSo."";
	  $result = $connect->query($sql2);

?> 
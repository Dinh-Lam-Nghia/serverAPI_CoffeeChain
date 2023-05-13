
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];

    $sql0 = "DELETE FROM phieunhapkho WHERE `phieunhapkho`.`maPhieuNX` = '".$maPhieuNX."'";
	  $result = $connect->query($sql0);
  
    $sql1 = "DELETE FROM phieuxuatkho WHERE `phieuxuatkho`.`maPhieuNX` = '".$maPhieuNX."'";
    $result = $connect->query($sql1);
    
    $sql2 = "DELETE FROM phieunhapxuatkho WHERE `phieunhapxuatkho`.`maPhieuNX` = ".$maPhieuNX."";
	  $result = $connect->query($sql2);

?> 

<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $maNVL  = $_POST['maNVL'];
    $donViTinh = $_POST['donViTinh'];
    $sLuong = $_POST['sLuong'];
    $donGia = $_POST['donGia']; 
    $thanhTien = $_POST['thanhTien'];

    $sql = "INSERT INTO `phieuxuatkho` (`id`,`maPhieuNX`, `maNVL`, `donViTinh`, `sLuong`, `donGia`, `thanhTien`) 
    VALUES (NULL, '".$maPhieuNX."', '".$maNVL."', '".$donViTinh."', '".$sLuong."', '".$donGia."', '".$thanhTien."')";
	$connect->query($sql);

?> 
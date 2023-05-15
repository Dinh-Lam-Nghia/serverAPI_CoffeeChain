
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $maNVL  = $_POST['maNVL'];
    $donViTinh = $_POST['donViTinh'];
    $sLuong = $_POST['sLuong'];
    $donGia = $_POST['donGia']; 
    $thanhTien = $_POST['thanhTien'];
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `phieuxuatkho` (`id`,`maPhieuNX`, `maNVL`, `donViTinh`, `sLuong`, `donGia`, `thanhTien`, `coSo`) 
    VALUES (NULL, '".$maPhieuNX."', '".$maNVL."', '".$donViTinh."', '".$sLuong."', '".$donGia."', '".$thanhTien."', '".$coSo."')";
	$connect->query($sql);

?> 

<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $maNVL  = $_POST['maNVL'];
    $donViTinh = $_POST['donViTinh'];
    $sLuong = $_POST['sLuong'];
    $hsd = $_POST['hsd'];
    $donGia = $_POST['donGia']; 
    $thanhTien = $_POST['thanhTien'];

    $sql = "INSERT INTO `phieunhapkho` (`maPhieuNX`, `maNVL`, `donViTinh`, `sLuong`, `hsd`, `donGia`, `thanhTien`) 
    VALUES ('".$maPhieuNX."', '".$maNVL."', '".$donViTinh."', ".$sLuong.", '".$hsd."', ".$donGia.", ".$thanhTien.");";
	$result = $connect->query($sql);

?> 
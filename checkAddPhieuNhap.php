
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $maNVL  = $_POST['maNVL'];
    $donViTinh = $_POST['donViTinh'];
    $sLuong = $_POST['sLuong'];
    $hsd = $_POST['hsd'];
    $donGia = $_POST['donGia']; 
    $thanhTien = $_POST['thanhTien'];
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `phieunhapkho` (`maPhieuNX`, `maNVL`, `donViTinh`, `sLuong`, `hsd`, `donGia`, `thanhTien`, `coSo`) 
    VALUES ('".$maPhieuNX."', '".$maNVL."', '".$donViTinh."', ".$sLuong.", '".$hsd."', ".$donGia.", ".$thanhTien.", ".$coSo.");";
	$result = $connect->query($sql);

?> 
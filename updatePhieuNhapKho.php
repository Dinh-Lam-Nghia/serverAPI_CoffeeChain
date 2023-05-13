
<?php
    include 'connectMySQL.php';
    
    $maPhieuNX = $_POST['maPhieuNX'];
    $maNVL  = $_POST['maNVL'];
    $donViTinh = $_POST['donViTinh'];
    $sLuong = $_POST['sLuong'];
    $hsd = $_POST['hsd'];
    $donGia = $_POST['donGia']; 
    $thanhTien = $_POST['thanhTien'];

    $sql = "UPDATE `phieunhapkho` 
    SET `donViTinh` = '".$maPhieuNX."', `sLuong` = '".$maPhieuNX."', `hsd` = '".$maPhieuNX."', `donGia` = '".$maPhieuNX."', `thanhTien` = '".$maPhieuNX."'
    WHERE `phieunhapkho`.`maPhieuNX` = '".$maPhieuNX."' AND `phieunhapkho`.`maNVL` = '".$maNVL."';";
	$result = $connect->query($sql);

?> 
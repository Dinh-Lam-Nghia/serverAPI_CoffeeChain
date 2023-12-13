<?php

include 'connectMySQL.php';
 
$maHD           = $_POST['maHD'];
$ngayGioTaoHD   = $_POST['ngayGioTaoHD'];
$nguoiTaoHD     = $_POST['nguoiTaoHD'];
$soTienPhaiThu  = $_POST['soTienPhaiThu'];
$coSo           = $_POST['coSo'];

$sql = "INSERT INTO hoadon (maHD, ngayGioTaoHD, nguoiTaoHD, soTienPhaiThu, coSo) 
        VALUES ('".$maHD."', '".$ngayGioTaoHD."', '".$nguoiTaoHD."', '".$soTienPhaiThu."', '".$coSo."');";

$connect->query($sql);

?>
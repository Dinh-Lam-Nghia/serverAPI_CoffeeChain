
<?php
    include 'connectMySQL.php';

    $maNV = $_POST['maNV'];
    $tenNV = $_POST['tenNV'];
    $ngaySinh = $_POST['ngaySinh'];
    $gioiTinh = $_POST['gioiTinh'];
    $cccd = $_POST['cccd']; 
    $ngayCap = $_POST['ngayCap'];
    $caLamViec = $_POST['caLamViec'];
    $avt = $_POST['avt']; 
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `nhanvien` (`maNV`, `tenNV`, `ngaySinh`, `gioiTinh`, `cccd`, `ngayCap`, `caLamViec`, `avt`, `coSo`) 
    VALUES ('".$maNV."', '".$tenNV."', '".$ngaySinh."', '".$gioiTinh."', '".$cccd."', 
            '".$ngayCap."', '".$caLamViec."', '".$avt."', '".$coSo ."')";
	$connect->query($sql);

?> 
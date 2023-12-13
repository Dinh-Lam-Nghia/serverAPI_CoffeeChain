
<?php
    include 'connectMySQL.php';

    $maHD    = $_POST['maHD'];
    $maBan   = $_POST['maBan'];
    $maMon   = $_POST['maMon'];
    $sLuong = $_POST['sLuong'];
    $donGia = $_POST['donGia'];
    $thanhTien = $_POST['thanhTien']; 
    $coSo	 = $_POST['coSo']; 

    $sql = "INSERT INTO dsmonhoadon (maHD, maBan, maMon, sLuong, donGia, thanhTien, coSo) 
    VALUES ('".$maHD."', '".$maBan."', '".$maMon."', '".$sLuong."', '".$donGia."', '".$thanhTien."', '".$coSo."')";
	$connect->query($sql);

?> 
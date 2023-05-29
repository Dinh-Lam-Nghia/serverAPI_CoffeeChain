
<?php
    include 'connectMySQL.php';

    $maBan  = $_POST['maBan'];
    $order  = $_POST['order'];
    $nguoiPhucVu = $_POST['nguoiPhucVu'];
    $slKhach = $_POST['slKhach'];
    $hoanThanhMon = $_POST['hoanThanhMon']; 
    $tongTien = $_POST['tongTien'];
    $dangPhucVu = $_POST['dangPhucVu'];
    $thanhToan = $_POST['thanhToan']; 
    $mangve = $_POST['mangve'];
    $coSo  = $_POST['coSo'];

    $sql = "INSERT INTO `banhoatdong` 
    (`maBan`, `order`, `nguoiPhucVu`, `slKhach`, `hoanThanhMon`, `tongTien`, `dangPhucVu`, `thanhToan`, `mangve`, `coSo`) 
    VALUES ('".$maBan."', '".$order."', '".$nguoiPhucVu."', '".$slKhach."', '".$hoanThanhMon."', '".$tongTien."', 
    '".$dangPhucVu."', '".$thanhToan."', '".$mangve."', '".$coSo."')";
	$connect->query($sql);

?> 
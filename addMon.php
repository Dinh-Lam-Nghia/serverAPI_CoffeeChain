
<?php
    include 'connectMySQL.php';

    $maMon   = $_POST['maMon'];
    $tenMon  = $_POST['tenMon'];
    $loaiMon = $_POST['loaiMon'];
    $nhomThucDon = $_POST['nhomThucDon'];
    $donViTinh = $_POST['donViTinh']; 
    $noiNhanMon = $_POST['noiNhanMon'];
    $giaTien = $_POST['giaTien'];
    $image = $_POST['image']; 
    $coSo  = $_POST['coSo'];

    $sql = "INSERT INTO `thucdon` (`maMon`, `tenMon`, `loaiMon`, `nhomThucDon`, `donViTinh`, `noiNhanMon`, `giaTien`, `image`, `coSo`) 
    VALUES ('".$maMon."', '".$tenMon."', '".$loaiMon."', '".$nhomThucDon."', '".$donViTinh."',
            '".$noiNhanMon."', '".$giaTien."', '".$image."', '".$coSo."')";
	$connect->query($sql);

?> 
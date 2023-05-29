
<?php
    include 'connectMySQL.php';

    $maBan   = $_POST['maBan'];
    $maMon  = $_POST['maMon'];
    $slMon = $_POST['slMon'];
    $hoanThanh = $_POST['hoanThanh'];
    $note = $_POST['note']; 
    $coSo	 = $_POST['coSo']; 

    $sql = "INSERT INTO `dsmonchebien` (`maBan`, `maMon`, `slMon`, `hoanThanh`, `note`, `coSo`) 
    VALUES ('".$maBan."', '".$maMon."', '".$slMon."', '".$hoanThanh."', '".$note."', '".$coSo."')";
	$connect->query($sql);

?> 
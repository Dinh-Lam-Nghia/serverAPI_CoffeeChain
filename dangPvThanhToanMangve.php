
<?php
    include 'connectMySQL.php';

    $maBan  = $_POST['maBan'];
    $dangPhucVu  = $_POST['dangPhucVu'];
    $thanhToan = $_POST['thanhToan'];
    $mangve = $_POST['mangve'];
    $coSo  = $_POST['coSo'];

    $sql = "UPDATE `banhoatdong` SET `dangPhucVu` = '".$dangPhucVu."', `thanhToan` = '".$thanhToan."', `mangve` = '".$mangve."' 
    WHERE `banhoatdong`.`maBan` = '".$maBan."' AND `banhoatdong`.`coSo` = '".$coSo."';";
	$connect->query($sql);

?> 
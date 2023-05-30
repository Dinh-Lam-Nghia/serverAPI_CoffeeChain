
<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $hoanThanhMon = $_POST['hoanThanhMon'];
    $coSo = $_POST['coSo'];
    
    $sql = "UPDATE banhoatdong SET hoanThanhMon = '".$hoanThanhMon."' WHERE maBan = '".$maBan."' AND `banhoatdong`.`coSo` = '".$coSo."';";
	$result = $connect->query($sql);

?> 

<?php
    include 'connectMySQL.php';

    $pv = $_POST['pv'];
    $tn = $_POST['tn'];
    $ad = $_POST['ad'];
    $pc = $_POST['pc'];
    $maNV = $_POST['maNV'];
    $coSo = $_POST['coSo'];

    $sql = "UPDATE `phanquyen` 
    SET `phucVu` = '".$pv."', `thuNgan` = '".$tn."', `admin` = '".$ad."', `phaChe` = '".$pc."' 
    WHERE `phanquyen`.`maNV` = '".$maNV."' AND `phanquyen`.`coSo` = '".$coSo."'";
    
	$result = $connect->query($sql);

?> 
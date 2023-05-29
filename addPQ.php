
<?php
    include 'connectMySQL.php';

    $pv = $_POST['pv'];
    $tn = $_POST['tn'];
    $ad = $_POST['ad'];
    $pc = $_POST['pc'];
    $maNV = $_POST['maNV'];
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `phanquyen` (`maNV`, `phucVu`, `thuNgan`, `admin`, `phaChe`, `coSo`) 
    VALUES ('".$maNV."', '".$pv."', '".$tn."', '".$ad."', '".$pc."', '".$coSo."')";
    
	$result = $connect->query($sql);

?> 
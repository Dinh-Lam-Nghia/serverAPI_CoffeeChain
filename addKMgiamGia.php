<?php

include 'connectMySQL.php';
 
$maKM  = $_POST['maKM'];
$tienToiThieuHD = $_POST['tienToiThieuHD']; 
$coSo = $_POST['coSo'];

$sql = "INSERT INTO `kmgiamgia` (`maKM`, `tienToiThieuHD`, `coSo`) 
VALUES ('".$maKM."', '".$tienToiThieuHD."', '".$coSo."')";
$queryResult = $connect->query($sql);
?>
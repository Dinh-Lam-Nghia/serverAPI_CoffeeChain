<?php

include 'connectMySQL.php';
 
$maKM  = $_POST['maKM'];
$maMon = $_POST['maMon'];
$sLuong = $_POST['sLuong']; 
$coSo = $_POST['coSo'];

$sql = "INSERT INTO `kmtangmon` (`maKM`, `maMon`, `sLuong`, `coSo`) 
VALUES ('".$maKM."', '".$maMon."', '".$sLuong."', '".$coSo."')";
$queryResult = $connect->query($sql); 
?>
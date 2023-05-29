<?php

include 'connectMySQL.php';
 
$maKM  = $_POST['maKM']; 
$coSo = $_POST['coSo'];

$sql0 = "DELETE FROM kmgiamgia WHERE `kmgiamgia`.`maKM` = '".$maKM."' AND `kmgiamgia`.`coSo` = '".$coSo."'";
$queryResult = $connect->query($sql0);

$sql1 = "DELETE FROM kmtangmon WHERE `kmtangmon`.`maKM` = '".$maKM."' AND `kmtangmon`.`coSo` = '".$coSo."'";
$queryResult = $connect->query($sql1);

$sql2 = "DELETE FROM khuyenmai WHERE `khuyenmai`.`maKM` = '".$maKM."' AND `khuyenmai`.`coSo` = '".$coSo."'";
$queryResult = $connect->query($sql2);
?>
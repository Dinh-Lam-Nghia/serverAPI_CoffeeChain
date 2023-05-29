<?php

include 'connectMySQL.php';
 
$maKM  = $_POST['maKM'];
$tenKM = $_POST['tenKM'];
$moTa = $_POST['moTa'];
$giaTriKM = $_POST['giaTriKM'];
$tuNgay = $_POST['tuNgay'];
$denNgay = $_POST['denNgay'];
$TN = $_POST['TN'];
$DN = $_POST['DN'];
$dkApDung = $_POST['dkApDung'];
$coSo = $_POST['coSo'];

$sql = "INSERT INTO `khuyenmai` (`maKM`, `tenKM`, `moTa`, `giaTriKM`, `tuNgay`, `denNgay`, `TN`, `DN`, `dkApDung`, `coSo`) VALUES 
('".$maKM."', '".$tenKM."', '".$moTa."', '".$giaTriKM."', '".$tuNgay."', 
'".$denNgay."', '".$TN."', '".$DN."', '".$dkApDung."', '".$coSo."')";
$queryResult = $connect->query($sql); 
?>
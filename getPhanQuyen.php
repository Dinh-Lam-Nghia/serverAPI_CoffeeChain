<?php

include 'connectMySQL.php';

$maNV = $_POST['maNV'];
$coSo = $_POST['coSo'];
$sql = "SELECT * FROM `phanquyen` WHERE `maNV` = '".$maNV."'  AND `coSo` LIKE '".$coSo."'";
$queryResult = $connect->query($sql);

$result=array();
while($fetchData=$queryResult->fetch_assoc()){
    $result[]=$fetchData;
}
echo json_encode($result); 
?>
<?php

include 'connectMySQL.php';

$coSo = $_POST['coSo'];
$sql = "SELECT dsmonchebien.maBan, dsmonchebien.maMon, thucdon.tenMon, dsmonchebien.slMon, dsmonchebien.hoanThanh, dsmonchebien.note, dsmonchebien.coSo
FROM dsmonchebien INNER JOIN thucdon ON dsmonchebien.maMon = thucdon.maMon WHERE dsmonchebien.coSo = '".$coSo."';";
$queryResult = $connect->query($sql);

$result=array();
 
while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
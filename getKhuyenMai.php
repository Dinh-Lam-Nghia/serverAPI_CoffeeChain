<?php

include 'connectMySQL.php';
 
$coSo = $_POST['coSo'];
$sql = "SELECT * FROM `khuyenmai` WHERE `coSo` LIKE '".$coSo."'";
$queryResult = $connect->query($sql);
 
$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
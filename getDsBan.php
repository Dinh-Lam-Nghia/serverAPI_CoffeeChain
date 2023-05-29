<?php

include 'connectMySQL.php';

$coSo = $_POST['coSo'];
$sql = "SELECT * FROM `dsban` WHERE `coSo` = '".$coSo."'";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
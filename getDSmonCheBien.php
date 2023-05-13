<?php

include 'connectMySQL.php';

$sql = "SELECT dsmonchebien.maBan, dsmonchebien.maMon, thucdon.tenMon, dsmonchebien.slMon, dsmonchebien.hoanThanh, dsmonchebien.note
FROM dsmonchebien INNER JOIN thucdon ON dsmonchebien.maMon = thucdon.maMon ";
$queryResult = $connect->query($sql);

$result=array();
 
while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
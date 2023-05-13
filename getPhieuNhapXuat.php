<?php

include 'connectMySQL.php';

$sql = "SELECT * FROM phieunhapxuatkho";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){ 
	$result[]=$fetchData;
}

echo json_encode($result);

?>
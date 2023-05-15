<?php

include 'connectMySQL.php';

$maNV = $_POST['maNV'];
$sql = "SELECT * FROM `phanquyen` WHERE `maNV` = '".$maNV."'";
$queryResult = $connect->query($sql);

$result=array();
while($fetchData=$queryResult->fetch_assoc()){
    $result[]=$fetchData;
}
echo json_encode($result); 
?>
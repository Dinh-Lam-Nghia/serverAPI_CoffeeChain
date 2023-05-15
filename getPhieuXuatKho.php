<?php

include 'connectMySQL.php';
$coSo = $_POST['coSo'];
$sql = "SELECT phieuxuatkho.id, phieuxuatkho.maPhieuNX, phieuxuatkho.maNVL, nguyenvatlieu.tenNVL, 
phieuxuatkho.donViTinh, phieuxuatkho.sLuong, phieuxuatkho.donGia, phieuxuatkho.thanhTien, phieuxuatkho.coSo
FROM phieuxuatkho INNER JOIN nguyenvatlieu ON phieuxuatkho.maNVL = nguyenvatlieu.maNVL 
WHERE phieuxuatkho.coSo = '".$coSo."';";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){ 
	$result[]=$fetchData;
}

echo json_encode($result);

?>
<?php

include 'connectMySQL.php';

$sql = "SELECT phieuxuatkho.id, phieuxuatkho.maPhieuNX, phieuxuatkho.maNVL, nguyenvatlieu.tenNVL, 
phieuxuatkho.donViTinh, phieuxuatkho.sLuong, phieuxuatkho.donGia, phieuxuatkho.thanhTien 
FROM phieuxuatkho INNER JOIN nguyenvatlieu ON phieuxuatkho.maNVL = nguyenvatlieu.maNVL";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){ 
	$result[]=$fetchData;
}

echo json_encode($result);

?>
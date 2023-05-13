<?php

include 'connectMySQL.php';

$sql = "SELECT phieunhapkho.id, phieunhapkho.maPhieuNX, phieunhapkho.maNVL, nguyenvatlieu.tenNVL, 
phieunhapkho.donViTinh, phieunhapkho.sLuong, phieunhapkho.hsd, phieunhapkho.donGia, 
phieunhapkho.thanhTien FROM phieunhapkho INNER JOIN nguyenvatlieu ON phieunhapkho.maNVL = nguyenvatlieu.maNVL";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){ 
	$result[]=$fetchData;
}

echo json_encode($result);

?>
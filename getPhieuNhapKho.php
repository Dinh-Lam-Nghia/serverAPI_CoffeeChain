<?php

include 'connectMySQL.php';

$coSo = $_POST['coSo'];
$sql = "SELECT phieunhapkho.id, phieunhapkho.maPhieuNX, phieunhapkho.maNVL, nguyenvatlieu.tenNVL, phieunhapkho.donViTinh, 
phieunhapkho.sLuong, phieunhapkho.hsd, phieunhapkho.donGia, phieunhapkho.thanhTien, phieunhapkho.coSo 
FROM phieunhapkho INNER JOIN nguyenvatlieu ON phieunhapkho.maNVL = nguyenvatlieu.maNVL 
WHERE phieunhapkho.coSo = '".$coSo."';";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){ 
	$result[]=$fetchData;
}

echo json_encode($result);

?>
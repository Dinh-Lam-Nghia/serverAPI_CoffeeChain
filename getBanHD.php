<?php

include 'connectMySQL.php';

$sql = "SELECT banhoatdong.maBan, dsban.tenBan, banhoatdong.order, 
banhoatdong.nguoiPhucVu, banhoatdong.slKhach, banhoatdong.hoanThanhMon, banhoatdong.tongTien, 
banhoatdong.dangPhucVu, banhoatdong.thanhToan, banhoatdong.mangve 
FROM banhoatdong INNER JOIN dsban ON banhoatdong.maBan = dsban.maBan";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
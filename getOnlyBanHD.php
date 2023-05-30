<?php

include 'connectMySQL.php';
 
$coSo = $_POST['coSo'];
$maBan = $_POST['maBan'];

$sql = "SELECT banhoatdong.maBan, dsban.tenBan, banhoatdong.order, banhoatdong.nguoiPhucVu, banhoatdong.slKhach, 
banhoatdong.hoanThanhMon, banhoatdong.tongTien, banhoatdong.dangPhucVu, banhoatdong.thanhToan, banhoatdong.mangve, 
banhoatdong.coSo FROM banhoatdong INNER JOIN dsban ON banhoatdong.maBan = dsban.maBan 
WHERE banhoatdong.coSo = '".$coSo."' AND dsban.coSo = '".$coSo."' AND banhoatdong.maBan = '".$maBan."' AND dsban.maBan = '".$maBan."';";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
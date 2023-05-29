
<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $maMon = $_POST['maMon'];
    $hoanThanh = $_POST['hoanThanh'];
    $coSo = $_POST['coSo'];
    $sql = "UPDATE dsmonchebien SET hoanThanh = ".$hoanThanh." WHERE maBan  = '".$maBan."' AND maMon = '".$maMon."' AND coSo = '".$coSo."' ";
	$result = $connect->query($sql);

?>
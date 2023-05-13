
<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $maMon = $_POST['maMon'];
    $hoanThanh = $_POST['hoanThanh'];
    $sql = "UPDATE dsmonchebien SET hoanThanh = ".$hoanThanh." WHERE maBan  = '".$maBan."' AND maMon = '".$maMon."'";
	$result = $connect->query($sql);

?>
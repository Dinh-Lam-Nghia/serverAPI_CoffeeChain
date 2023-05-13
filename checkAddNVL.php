<?php

include 'connectMySQL.php';

$maNVL = $_POST['maNVL'];
$tenNVL = $_POST['tenNVL'];
$sql = "SELECT * FROM nguyenvatlieu WHERE maNVL = '".$maNVL."'";
$queryResult = $connect->query($sql);
$count = mysqli_num_rows($queryResult);
if ($count == 1) {
		echo json_encode("Error");
	}else{
		$connect->query("INSERT INTO nguyenvatlieu (maNVL, tenNVL) VALUES ('".$maNVL."', '".$tenNVL."')");
		echo json_encode("Success");
	}

?>
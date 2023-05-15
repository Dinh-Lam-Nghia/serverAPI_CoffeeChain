
<?php

include 'connectMySQL.php';

$maNV  = $_POST['maNV'];
$sql = "SELECT * FROM `cosocoffee` WHERE `maNV` LIKE '".$maNV."'";
$queryResult = $connect->query($sql);

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>

<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan']; 
    $coSo = $_POST['coSo']; 

    $sql = "DELETE FROM `banhoatdong` WHERE maBan= '".$maBan."' AND coSo = '".$coSo."'";
	$result = $connect->query($sql);

?> 
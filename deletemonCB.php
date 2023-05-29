
<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $maMon = $_POST['maMon']; 
    $coSo = $_POST['coSo']; 

    $sql = "DELETE FROM dsmonchebien 
    WHERE `dsmonchebien`.`maBan` = '".$maBan."' 
    AND `dsmonchebien`.`maMon` = '".$maMon."' 
    AND `dsmonchebien`.`coSo` = '".$coSo."'";
	$result = $connect->query($sql);

?> 
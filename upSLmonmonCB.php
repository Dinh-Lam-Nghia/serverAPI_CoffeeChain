
<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $maMon = $_POST['maMon'];
    $slMon = $_POST['slMon'];
    $coSo = $_POST['coSo'];

    $sql = "UPDATE `dsmonchebien` SET `slMon` = '".$slMon."' 
    WHERE `dsmonchebien`.`maBan` = '".$maBan."' 
    AND `dsmonchebien`.`maMon` = '".$maMon."' 
    AND `dsmonchebien`.`coSo` = '".$coSo."';";
	$result = $connect->query($sql);

?> 
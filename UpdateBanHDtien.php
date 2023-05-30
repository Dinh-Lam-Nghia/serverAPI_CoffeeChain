


<?php
    include 'connectMySQL.php';

    $maBan = $_POST['maBan'];
    $tongTien = $_POST['tongTien'];
    $coSo = $_POST['coSo'];
    
    $sql = "UPDATE `banhoatdong` SET `tongTien` = '".$tongTien."' 
    WHERE `banhoatdong`.`maBan` = '".$maBan."' AND `banhoatdong`.`coSo` = '".$coSo."';";
	$result = $connect->query($sql);

?> 
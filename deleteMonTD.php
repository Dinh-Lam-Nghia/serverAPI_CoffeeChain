
<?php
    include 'connectMySQL.php';
 
    $maMon = $_POST['maMon']; 
    $coSo = $_POST['coSo']; 

    $sql = "DELETE FROM thucdon WHERE `thucdon`.`maMon` = '".$maMon."' AND `thucdon`.`coSo` = '".$coSo."'";
	$result = $connect->query($sql);

?> 
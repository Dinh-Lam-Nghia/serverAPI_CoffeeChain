
<?php
    include 'connectMySQL.php';

    $id        = $_POST['id'];
    $sql = "DELETE FROM phieunhapkho WHERE `phieunhapkho`.`id` = '".$id."'";
	$result = $connect->query($sql);

?> 
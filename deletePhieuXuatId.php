
<?php
    include 'connectMySQL.php';

    $id        = $_POST['id'];
    $sql = "DELETE FROM phieuxuatkho WHERE `phieuxuatkho`.`id` = '".$id."'";
	$result = $connect->query($sql);

?> 
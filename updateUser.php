
<?php
    include 'connectMySQL.php';

    $maNV = $_POST['maNV'];
    $userTMP = $_POST['userTMP'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "UPDATE `cosocoffee` SET `user` = '".$user."', `pass` = '".$pass."' 
    WHERE `cosocoffee`.`maNV` = '".$maNV."' AND `cosocoffee`.`user` = '".$userTMP."'";

	$result = $connect->query($sql);

?> 
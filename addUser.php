
<?php
    include 'connectMySQL.php';

    $maNV = $_POST['maNV'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `cosocoffee` (`maNV`, `user`, `pass`, `coSo`) 
    VALUES ('".$maNV."', '".$user."', '".$pass."', '".$coSo."')";
    
	$result = $connect->query($sql);

?> 
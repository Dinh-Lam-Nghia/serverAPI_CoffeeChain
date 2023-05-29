
<?php
    include 'connectMySQL.php';

    $maNV = $_POST['maNV'];
    $user = $_POST['user'];
    $coSo = $_POST['coSo'];

    $sql0 = "DELETE FROM phanquyen WHERE `phanquyen`.`maNV` = '".$maNV."' AND `phanquyen`.`coSo` = '".$coSo."'";
	  $result = $connect->query($sql0);
  
    $sql1 = "DELETE FROM cosocoffee WHERE `cosocoffee`.`maNV` = '".$maNV."' AND `cosocoffee`.`user` = '".$user."'";
    $result = $connect->query($sql1);
    
    $sql2 = "DELETE FROM nhanvien WHERE `nhanvien`.`maNV` = '".$maNV."' AND `nhanvien`.`coSo` = '".$coSo."'";
	  $result = $connect->query($sql2);

?> 
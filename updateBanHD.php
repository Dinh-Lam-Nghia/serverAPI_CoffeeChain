
<?php
    include 'connectMySQL.php';

    $maBan        = $_POST['maBan'];
    $hoanThanhMon = $_POST['hoanThanhMon'];
    $sql = "UPDATE banhoatdong SET hoanThanhMon = '".$hoanThanhMon."' WHERE maBan = '".$maBan."'";
	$result = $connect->query($sql);

?> 
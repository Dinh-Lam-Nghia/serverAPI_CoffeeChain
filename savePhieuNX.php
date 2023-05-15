
<?php
    include 'connectMySQL.php';

    $maPhieuNX = $_POST['maPhieuNX'];
    $loaiPhieuNX = $_POST['loaiPhieuNX'];
    $nguoiTaoPhieuNX = $_POST['nguoiTaoPhieuNX'];
    $ngayTaoPhieuNX = $_POST['ngayTaoPhieuNX'];
    $ngayTPNX = $_POST['ngayTPNX'];
    $tuNgay = $_POST['tuNgay'];
    $denNgay = $_POST['denNgay'];
    $nguoiGiao = $_POST['nguoiGiao'];
    $nhaCungCap = $_POST['nhaCungCap'];
    $soTienNX = $_POST['soTienNX'];
    $tienThuTuDichVu = $_POST['tienThuTuDichVu'];
    $tienThuKhac = $_POST['tienThuKhac'];
    $tongTien = $_POST['tongTien'];
    $coSo = $_POST['coSo'];

    $sql = "INSERT INTO `phieunhapxuatkho` (`maPhieuNX`, `loaiPhieuNX`, `nguoiTaoPhieuNX`, `ngayTaoPhieuNX`, `ngayTPNX`, `tuNgay`, `denNgay`, `nguoiGiao`, `nhaCungCap`, `soTienNX`, `tienThuTuDichVu`, `tienThuKhac`, `tongTien`, `coSo`) 
            VALUES ('".$maPhieuNX."', '".$loaiPhieuNX."', '".$nguoiTaoPhieuNX."', '".$ngayTaoPhieuNX."', '".$ngayTPNX."', '".$tuNgay."', 
                    '".$denNgay."', '".$nguoiGiao."', '".$nhaCungCap."', '".$soTienNX."', 
                    '".$tienThuTuDichVu."', '".$tienThuKhac."', '".$tongTien."', '".$coSo."');";
	$result = $connect->query($sql);

?> 
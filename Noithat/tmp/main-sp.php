<?php
    include './admincp/config/connect_db.php';
    include './pages/main/thuong-hieu.php';
    
    $so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 12;
    $trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($trang_ht - 1) * $so_sp;

    if ($tam=='SofaArmchair') {
        $data = 'SofaArmchair';  
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=1 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=1";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='Sofa') {
        $data = 'SofaArmchair';   
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=1 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='SofaGoc') {
        $data = 'SofaArmchair';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=2 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Armchair') {
        $data = 'SofaArmchair';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=3 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GheDaiDon') {
        $data = 'SofaArmchair';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=4 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GheThuGian') {
        $data = 'SofaArmchair';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=5 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Ban') {
        $data = 'Ban';  
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=2 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=2";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='BanNuoc') {
        $data = 'Ban';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=6 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='BanAn') {
        $data = 'Ban';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=7 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='BanBen') {
        $data = 'Ban';
        $query = "SELECT * FROM tb_sanpham WHERE `ma_item`=8 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='BanLamViec') {
        $data = 'Ban';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=9 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='BanTrangDiem') {
        $data = 'Ban';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=10 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Ghe') {
        $data = 'Ghe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=3 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=3";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='GheAn') {
        $data = 'Ghe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=11 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GheBar') {
        $data = 'Ghe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=12 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='XeDay') {
        $data = 'Ghe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=13 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GiuongNgu') {
        $data = 'GiuongNgu';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=4 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=4";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='Giuong') {
        $data = 'GiuongNgu';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=14 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }if ($tam=='BanDauGiuong') {
        $data = 'GiuongNgu';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=15 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='NemGiuong') {
        $data = 'GiuongNgu';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=16 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuKe') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=5 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=5";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='TuTivi') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=17 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuLy') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=18 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuRuou') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=19 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuAo') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=20 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuAmTuong') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=21 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='TuGiay') {
        $data = 'TuKe';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=22 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='KePhongKhach') {
        $data = 'TuKe';
        $query = "SELECT * FROM tb_sanpham WHERE `ma_item`=23 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Bep') {
        $data = 'Bep';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=6 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=6";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='TuBep') {
        $data = 'TuBep';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=24 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='PhuKienBep') {
        $data = 'TuBep';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=25 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='DaoBep') {
        $data = 'TuBep';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=26 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='QuayBar') {
        $data = 'TuBep';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=27 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='HangTrangTri') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=7 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=7";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='DenTrangTri') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=28 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='DongHo') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=29 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='DungCuBep') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=30 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GoiThuBong') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=31 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='KhungGuong') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=32 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='NemHangTrangTri') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=33 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Tham') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=34 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Tranh') {
        $data = 'HangTrangTri';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=35 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='NgoaiThat') {
        $data = 'NgoaiThat';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=8 ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM `tb_sanpham` WHERE `ma_loai`=8";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='BanNgoaiTroi') {
        $data = 'NgoaiThat';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=36 ORDER BY `id` ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='GheNgoaiTroi') {
        $data = 'NgoaiThat';
        $query = "SELECT * FROM `tb_sanpham` WHERE `ma_item`=37 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }else {

    }
?>
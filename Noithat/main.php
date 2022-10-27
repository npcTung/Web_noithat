<div class="main">
    <?php
    if (isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = '';
    }
    if (isset($_GET['thuonghieu'])) {
        $nho = $_GET['thuonghieu'];
    }else{
        $nho = '';
    }
    if ($tam=='SofaArmchair' || $tam=='Sofa' || $tam=='SofaGoc'|| $tam=='Armchair' || $tam=='GheDaiDon' || $tam=='GheThuGian' || $tam=='Ban'|| $tam=='BanNuoc' || $tam=='BanAn' 
    || $tam=='BanBen' || $tam=='BanLamViec'|| $tam=='BanTrangDiem' || $tam=='Ghe' || $tam=='GheAn' || $tam=='GheBar'|| $tam=='XeDay' || $tam=='GiuongNgu'|| $tam=='Giuong'
    || $tam=='BanDauGiuong' || $tam=='NemGiuong' || $tam=='TuKe' || $tam=='TuTivi' || $tam=='TuLy' || $tam=='TuRuou' || $tam=='TuAo' || $tam=='TuAmTuong' || $tam=='TuGiay' 
    || $tam=='KePhongKhach' || $tam=='Bep' || $tam=='TuBep' || $tam=='PhuKienBep' || $tam=='DaoBep' || $tam=='QuayBar' || $tam=='HangTrangTri' || $tam=='DenTrangTri' || $tam=='DongHo' || $tam=='DungCuBep' 
    || $tam=='GoiThuBong' || $tam=='KhungGuong' || $tam=='NemHangTrangTri' || $tam=='Tham' || $tam=='Tranh' || $tam=='NgoaiThat' || $tam=='BanNgoaiTroi' || $tam=='GheNgoaiTroi'){
        include("./tmp/index-sp.php");
    }elseif ($tam=='chitiet-sp'){
        include("./tmp/chitiet-sp.php");
    }elseif ($tam=='diachi'){
        include("./pages/main/diachi.php");
    }elseif ($tam=='hotro') {
        include("./pages/main/thuong-hieu.php");
        include("./pages/main/hotro.php");
    }elseif ($tam=='cart'){
        include("./pages/main/cart/index-cart.php");
    }elseif ($tam=='page1'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }elseif ($tam=='page2'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }elseif ($tam=='page3'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }
    else{
        include("./pages/main/index.php");
    }
    ?>
</div>
<div class="clear"></div>
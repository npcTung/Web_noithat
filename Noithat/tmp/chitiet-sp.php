<?php
    include './admincp/config/connect_db.php';

    $query = "SELECT * FROM `tb_sanpham` WHERE `id`=$id";
    $mysql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($mysql);

    if ($row['soluongton']<1){
        $soluong = 'Hết hàng';
    }else{
        $soluong = number_format($row['soluongton'], 0, ",", ".");
    }

?>
<div class="cach"></div>
<div class="chitiet-sp">
    <div class="thongtin-sp">
        <h1><?=$row['tensp']?></h1>
        <div class="star">
            <span class="star-item"><i class="bi bi-star-fill"></i></span>
            <span class="star-item"><i class="bi bi-star-fill"></i></span>
            <span class="star-item"><i class="bi bi-star-half"></i></span>
            <span class="star-item"><i class="bi bi-star"></i></span>
            <span class="star-item"><i class="bi bi-star"></i></span>
        </div>
        <div class="flex mb-4">
            <div class="a2a_kit a2a_kit_size_24 a2a_default_style" data-a2a-icon-color="transparent,#40ABB0">
                <a class="a2a_button_copy_link"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div><hr>
        <?php if ($row['gia'] > 0) {?>
            <h3><?=number_format($row['gia'], 0, ",", ".")?><samp>đ</samp></h3><hr>
        <?php } else {?>
        <?php }?>
        <?php if ($row['kichthuoc'] != "" || $row['chatlieu'] != "") {?>
            <div>
                <?php if ($row['kichthuoc'] != "") {?>
                    <label><b>Kích thước: </b><pre><?=$row['kichthuoc']?></pre></label><br><hr>
                <?php } else {?>
                <?php }?>
                <?php if ($row['chatlieu'] != "") {?>
                    <label><b>Chất liệu: </b><pre><?=$row['chatlieu']?></pre></label>
                <?php } else {?>
                <?php }?>
            </div><hr>
        <?php } else {?>
        <?php }?>
        <?php if ($row['soluongton'] > 0) {?>
            <p>Số lượng trong kho: <span><?=$soluong?></span></p><hr>
        <?php } else {?>
        <?php }?>
        <?php if ($row['gia'] > 0) {?>
            <div class="giohang">
                <form action="../index.php?quanly=cart&action=add" method="POST">
                    <input class="giohang-number" name="soluong[<?=$row['id']?>]" type="number" value="1">
                    <input class="giohang-button" name="submit" type="submit" value="Thêm vào giỏ">
                </form>
            </div><hr style="margin-top: 70px;">
        <?php } else {?>
        <?php }?>
        <label><i class="bi bi-check2"></i> Miễn phí giao hàng & lắp đặt tại tất cả quận huyện thuộc TP.HCM, Hà Nội, Biên Hòa và một số quận thuộc Bình Dương (*)</label>
        <label><i class="bi bi-check2"></i> Miễn phí 1 đổi 1 - Bảo hành 2 năm - Bảo trì trọn đời (**)</label>
        <label>(*) Không áp dụng cho danh mục Đồ Trang Trí</label>
        <label>(**) Không áp dụng cho các sản phẩm Clearance. Chỉ bảo hành 01 năm cho khung ghế, mâm và cần đối với Ghế Văn Phòng</label>
    </div>
    <div class="image-sp">
        <img src="<?=$row['img']?>" alt="<?=$row['tensp']?>">
    </div>
</div>
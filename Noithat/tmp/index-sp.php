<div class="cach"></div>
<?php include 'main-sp.php';?>
<div class="main-adidas">
    <ul class="product">
        <?php while ($row = mysqli_fetch_array($mysql)) { ?>
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="../index.php?quanly=chitiet-sp&id=<?=$row['id']?>&thuonghieu=<?=$data?>">
                        <img src="<?=$row['img']?>" alt="<?=$row['tensp']?>">
                    </a>
                </div>
                <div class="product-info">
                    <a href="../index.php?quanly=chitiet-sp&id=<?=$row['id']?>&thuonghieu=<?=$data?>" class="product-name"><?= $row['tensp'] ?></a>
                    <div class="star">
                        <span class="star-item"><i class="bi bi-star-fill"></i></span>
                        <span class="star-item"><i class="bi bi-star-fill"></i></span>
                        <span class="star-item"><i class="bi bi-star-half"></i></span>
                        <span class="star-item"><i class="bi bi-star"></i></span>
                        <span class="star-item"><i class="bi bi-star"></i></span>
                    </div>
                    <?php if($row['gia'] > 0) {?>
                        <a href="../index.php?quanly=chitiet-sp&id=<?=$row['id']?>&thuonghieu=<?=$data?>" class="product-price"><?= number_format($row['gia'], 0, ",", ".") ?><samp>đ</samp></a>
                    <?php } else {?>
                    <?php }?>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
    <div class="number_page">
        <?php if ($trang_ht > 1) {
            $prev_page = $trang_ht - 1;
        ?>
        <a href="../../index.php?quanly=<?=$data?>&id=1&per_page=<?=$so_sp?>&page=<?=$prev_page?>" class="page-item"> <- </a>
        <?php } if ($tam=='SofaArmchair' || $tam=='Ban' || $tam=='Ghe' || $tam=='GiuongNgu' || $tam=='TuKe' || $tam=='Bep' || $tam=='HangTrangTri' || $tam=='NgoaiThat') {
            for ($num = 1; $num <= $so_trang; $num++) { ?>
        <?php if ($num != $trang_ht) { ?>
            <?php if ($num > $trang_ht - 1 && $num < $trang_ht + 2) { ?>
                <a class="page-item" href="../../index.php?quanly=<?=$data?>&id=1&per_page=<?=$so_sp?>&page=<?=$num?>"><?=$num?></a>
            <?php } ?>
        <?php } else { ?>
            <strong class="dam page-item"><?= $num ?></strong>
        <?php } ?>
        <?php } } if ($tam=='SofaArmchair' || $tam=='Ban' || $tam=='Ghe' || $tam=='GiuongNgu' || $tam=='TuKe' || $tam=='Bep' || $tam=='HangTrangTri' || $tam=='NgoaiThat') {
            if ($trang_ht < $so_trang - 1) {
                $next_page = $trang_ht + 1; ?>
                    <a href="../../index.php?quanly=<?= $data ?>&id=1&per_page=<?= $so_sp ?>&page=<?= $next_page ?>" class="page-item">-></a>
            <?php }
        } ?>
    </div>
</div>
<!-- <img src="../asset/image/Phong-Khach/Ban_Sofa – Ban_Cafe – Ban_Tra_Go-Cao-Su-601-Trang(1).jpg" alt="hihihihiiii"/> -->
<?php include 'gioithieu.php'; ?>
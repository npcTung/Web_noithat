<?php include './admincp/config/connect_db.php';?>
<?php
$loai = mysqli_query($conn, "SELECT * FROM `tb_loai` ORDER BY `id` ASC");
$item = mysqli_query($conn, "SELECT * FROM `tb_item` ORDER BY `id` ASC");

while($loai_row = mysqli_fetch_array($loai)){
    if ($tam == $loai_row['quanlyloai']){ ?>
        <div style="width: 100%;height: 500px;background: url(<?=$loai_row['background_loai']?>);background-position: 47% 92%;background-size: 100%;">
            <div style="width: 100%;height: 100%; background: rgba(0,0,0,0.45);padding: 40px;">
                <h1 class="thuong_hieu"><?=$thuong_hieu=$loai_row['tenloai']?></h1>
                <div class="is-small"><nav><a href="../../index.php">Trang chủ</a><span>/</span><b><?=$loai_row['tenloai']?></b></nav></div>
            </div>
        </div>
<?php } while ($item_row = mysqli_fetch_array($item)){
        if ($tam == $item_row['quanlyitem']) { ?>
            <div style="width: 100%;height: 500px;background: url(<?=$item_row['background_item']?>);background-position: 0 46%;background-size: 100%;">
                <div style="width: 100%;height: 100%; background: rgba(0,0,0,0.45);padding: 40px;">
                    <h1 class="thuong_hieu"><?=$thuong_hieu=$item_row['tenitem']?></h1>
                    <div class="is-small"><nav><a href="../../index.php">Trang chủ</a><span>/</span><a href="../../index.php?quanly=<?=$loai_row['quanlyloai']?>&id=1&per_page=12&page=1"><?=$loai_row['tenloai']?></a><span>/</span><b><?=$item_row['tenitem']?></b></nav></div>
                </div>
            </div>
<?php } } } ?>
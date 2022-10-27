<h1>Giỏ hàng</h1>
<?php if (!empty($error)) {?>
    <div class="error">
        <p><i class="bi bi-x-circle"></i><span><?=$error?></span>.<a href="javascript:history.back()">Quay lại</a></p>
    </div>
<?php } elseif (!empty($ordered)) {?>
    <div class="ordered">
        <p><i class="bi bi-check2-circle"></i><span><?=$ordered?></span>.<a href="../../../index.php">Tiếp tục mua hàng</a></p>
    </div>
<?php } else {?>
    <form action="../../index.php?quanly=cart&action=submit" method="POST">
        <table>
            <tr>
                <th class="giohang-stt">STT</th>
                <th class="giohang-tensp">Tên sản phẩm</th>
                <th class="giohang-img">Ảnh sản phẩm</th>
                <th class="giohang-dongia">Đơn giá</th>
                <th class="giohang-soluong">Số lượng</th>
                <th class="giohang-thanhtien">Thành tiền</th>
                <th class="giohang-delete">Xóa</th>
            </tr>
            <?php $num=1; $tong=0; while($row = mysqli_fetch_array($mysql)) { ?>
                <tr>
                    <td class="giohang-stt"><?=$num?></td>
                    <td class="giohang-tensp"><?=$row['tensp']?></td>
                    <td class="giohang-img"><img src="<?=$row['img']?>" alt="<?=$row['tensp']?>"></td>
                    <td class="giohang-dongia"><?=number_format($row['gia'], 0, ",", ".")?><sup>đ</sup></td>
                    <td class="giohang-soluong"><input type="number" value="<?=$_SESSION["cart"][$row['id']]?>" name="soluong[<?=$row['id']?>]" /></td>
                    <td class="giohang-thanhtien"><?=number_format($row['gia'] * $_SESSION["cart"][$row['id']], 0, ",", ".")?><sup>đ</sup></td>
                    <td class="giohang-delete"><a href="../../index.php?quanly=cart&action=delete&id=<?=$row['id']?>"><i class="bi bi-x-circle"></i></a></td>
                </tr>
            <?php $num++; $tong = $tong + ($row['gia'] * $_SESSION["cart"][$row['id']]);} ?>
        </table>
        <div class="total">
            <label class="total">Tổng tiền:</label>
            <label class="total-number"><?=number_format($tong, 0, ",", ".")?><sup>VND</sup></label>
        </div>
        <div id="form-button">
            <input type="submit" name="update_click" value="Cập nhật" />
        </div>
        <div class="clear"></div>
        <hr>
        <div class="order-border">
            <h3>Điền thông tin nhận hàng</h3>
            <div>
                <label>Người nhận </label><br>
                <input type="text" value="" name="name" />
            </div>
            <div>
                <label>Điện thoại </label><br>
                <input type="number" value="" name="phone" />
            </div>
            <div>
                <label>Địa chỉ </label><br>
                <input type="text" value="" name="address" />
            </div>
            <div>
                <label>Ghi chú </label><br>
                <textarea name="note" cols="87" rows="7" ></textarea>
            </div>
            <input type="submit" name="order_click" value="Đặt hàng" />
        </div>
    </form>
<?php }?>
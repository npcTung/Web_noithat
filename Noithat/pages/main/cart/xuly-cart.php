<?php
include './admincp/config/connect_db.php';

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}
if (isset($_GET['action'])){
    function update_cart($add=false){
        foreach ($_POST['soluong'] as $id => $soluong) {
            if ($soluong == 0){
                unset($_SESSION["cart"][$id]);
            }else{
                if ($add){
                    $_SESSION["cart"][$id] += $soluong;
                }else{
                    $_SESSION["cart"][$id] = $soluong;
                }
            }
        }
    }
    switch($_GET['action']){
        case "add":
            update_cart(true);
            break;
        case "delete":
            if (isset($id)){
                unset($_SESSION["cart"][$id]);
            }
            break;
        case "submit":
            $error = false;
            if (isset($_POST['update_click'])){
                update_cart();
            }elseif (isset($_POST['order_click'])){
                if (empty($_POST['name'])&&empty($_POST['phone'])&&empty($_POST['address'])){
                    $error = 'Bạn cần điền đầy đủ thông tin trước khi đặt hàng';
                }elseif (empty($_POST['name'])){
                    $error = 'Bạn chưa nhập tên của người nhận';
                }elseif (empty($_POST['phone'])){
                    $error = 'Bạn chưa nhập số điện thoại của người nhận';
                }elseif (empty($_POST['address'])){
                    $error = 'Bạn chưa nhập địa chỉ của người nhận';
                }elseif (empty($_POST['soluong'])){
                    include 'null-cart.php';
                }else{
                    $ordered = 'Bạn đã đặt hàng thành công';
                }
                if ($error == false && !empty($_POST['soluong'])){
                    $querys = "SELECT * FROM `tb_sanpham` WHERE `id` IN (".implode(",", array_keys($_POST["soluong"])).")";
                    $sql = mysqli_query($conn,$querys);
                    $tong = 0;
                    $orderSanpham = array();
                    while($row = mysqli_fetch_array($sql)){
                        $orderSanpham[] = $row;
                        $tong++;
                        $tong = $tong + ($row['gia'] * $_POST['soluong'][$row['id']]);
                    }
                    //cách lấy ngày trong databases
                    // echo date("d/m/Y H:i", 1666258280); exit;
                    $insertOrrder = "INSERT INTO `tb_giohang` (`id`, `ten`, `phone`, `diachi`, `ghichu`, `tongtien`, `created_time`, `last_updated`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['note']."', '".$tong."', '".time()."', '".time()."')";
                    $mysql_insert = mysqli_query($conn, $insertOrrder);
                    $orderId = $conn->insert_id;
                    $insertString = "";
                    foreach ($orderSanpham as $key => $sanpham) {
                        $insertString .= "(NULL, '".$orderId."', '".$sanpham['id']."', '".$_POST['soluong'][$sanpham['id']]."','".$sanpham['gia']."' '".time()."', '".time()."')";
                        if ($key != count($orderSanpham) - 1){
                            $insertString .= ",";
                        }
                    }
                    $insertOrrder = "INSERT INTO `tb_giohang_chitiet` (`id`, `ma_giohang`, `ma_sanpham`, `soluongmua`, `gia`, `created_time`, `last_updated`) VALUES ".$insertString.";";
                    $mysql_order = mysqli_query($conn, $insertOrrder);
                }
            }
            break;
    }
}
if (!empty($_SESSION["cart"])){
    //sản phẩm
    $query = "SELECT * FROM `tb_sanpham` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).") ORDER BY `id` ASC";
    $mysql = mysqli_query($conn, $query);
    include 'cart.php';
}else{
    include 'null-cart.php';
}
?>
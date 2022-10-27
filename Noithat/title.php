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
if (isset($_GET['thuonghieu'])){
    $nho = $_GET['thuonghieu'];
}else{
    $nho = '';
}
if ($tam == 'Adidas'){
    $ten = 'Giày Adidas Việt Nam';
}elseif ($tam=='chitiet-sp'&&$nho=='Adidas'){
    $ten = 'Giày Adidas Việt Nam';
}elseif ($tam == 'SuperStar'){
    $ten = 'Giày Adidas Super Star';
}elseif ($tam == 'Stan-Smith'){
    $ten = 'Giày Adidas Stan Smith';
}elseif ($tam == 'Alphabounce'){
    $ten = 'Giày Adidas Alphabounce';
}elseif ($tam == 'NMD'){
    $ten = 'Giày Adidas NMD';
}elseif ($tam == 'Prophere'){
    $ten = 'Giày Adidas Prophere';
}elseif ($tam == 'Ultraboost'){
    $ten = 'Giày Adidas Ultraboost';
}elseif ($tam == 'Falcon'){
    $ten = 'Giày Adidas Falcon';
}elseif ($tam == 'Yeezy'){
    $ten = 'Giày Adidas Yeezy';
}elseif ($tam == 'Nike'){
    $ten = 'Giày thể thao Nike';
}elseif ($tam=='chitiet-sp'&&$nho=='Nike'){
    $ten = 'Giày thể thao Nike';
}elseif ($tam == 'AirForce1'){
    $ten = 'Nike Air Force 1';
}elseif ($tam == 'Jordan'){
    $ten = 'Giày Nike Jordan';
}elseif ($tam == 'AirMax'){
    $ten = 'Giày Nike Air Max';
}elseif ($tam == 'AirMax97'){
    $ten = 'Giày Nike Air Max 97';
}elseif ($tam == 'AirMax270'){
    $ten = 'Giày Nike Air Max 270';
}elseif ($tam == 'AirMax90'){
    $ten = 'Giày Nike Air Max 90';
}elseif ($tam == 'M2KTekno'){
    $ten = 'Giày Nike M2K Tekno';
}elseif ($tam == 'cart'){
    $ten = 'Giỏ hàng';
}elseif ($tam == 'diachi'){
    $ten = 'Địa chỉ liên hệ';
}else{
    $ten = 'Trang chủ';
}
?>
<?php
include '../config/connect_db.php';

$err = '';
$error = [];
//đăng nhập
if (isset($_POST['signin'])) {
    // lấy dữ liệu từ form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //lấy dữ liệu từ databases và truy vấn dữ liệu
    $select = "SELECT * FROM `tb_register` WHERE user='$user' AND pass='$pass'";
    $mysql = mysqli_query($conn, $select);
    //kiểm tra thông tin đăng nhập
    if (!empty($user) && !empty($pass)) {
        if (mysqli_num_rows($mysql) > 0) {
            $row = mysqli_fetch_array($mysql);
            if ($row['user']=='ad' && $row['pass']=='admin'){
                header("Location:../index-admin.php");
            }else {
                header("Location:../../index.php");
            }
        }else {
            $err = 'Tài khoản hoặc mật khẩu không đúng';
        }
    }elseif (empty($user)){
        $error['user'] = 'Chưa nhập tài khoản';
    }else{
        $error['pass'] = 'Chưa nhập mật khẩu';
    }
}
//đăng ký
if (isset($_POST['signup'])) {
    // lấy dữ liệu từ form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $cf_pass = $_POST['cf_pass'];

    //lấy dữ liệu từ databases
    $select = "SELECT * FROM `tb_register` ORDER BY id ASC";
    $mysqls = mysqli_query($conn, $select);
    //kiểm tra thông tin đăng ký
    if (!empty($user) && !empty($pass) && !empty($email) && !empty($number) && !empty($cf_pass) && ($pass==$cf_pass)){
        // $row = mysqli_fetch_array($mysqls);
        // if ($user==$row['user']) {
        //     echo "User này đã được đăng ký trước đó rồi".$conn->error;
        //     require_once 'login.php';
        // }elseif ($email==$row['email']) {
        //     echo "Email này đã được đăng ký trước đó rồi".$conn->error;
        //     require_once 'login.php';
        // }
        // if ($pass!=$cf_pass){
        //     $error['cf_pass'] = 'Không khớp với mật khẩu đã nhập';
        // }else{
            //nhập dữ liệu vào databases
            $insert = "INSERT INTO `tb_register` (`id`, `user`, `email`, `sđt`, `pass`) VALUES (NULL, '$user', '$email', '$number', '$pass')";
            $mysqli = mysqli_query($conn, $insert);
            //kiểm tra
            if ($mysqli===true) {
                header("Location: index-login.php?quanly=login");
            }else {
                $err = "Lỗi{$mysqli}".$conn->error;
            }
        // }
    }elseif (empty($user)){
        $error['user'] = 'Chưa điền tài khoản';
    }elseif (empty($email)){
        $error['email'] = 'Chưa điền email';
    }elseif (empty($number)){
        $error['number'] = 'Chưa điền số điện thoại';
    }elseif (empty($pass)){
        $error['pass'] = 'Chưa điền mật khẩu';
    }elseif (empty($cf_pass)){
        $error['cf_pass'] = 'Chưa điền lại mật khẩu';
    }elseif ($pass!=$cf_pass){
        $error['cf_pass'] = 'Không khớp với mật khẩu đã nhập';
    }
    // elseif ($check===false){
    //     $error['checkbox'] = 'Bạn có điều gì còn thắc mắc trong điều khoản? <a href="../../index.php?quanly=hotro">Đóng góp ngay đến với chúng tôi</a>';
    // }
}
?>
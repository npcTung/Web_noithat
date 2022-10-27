<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../asset/css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../asset/css/login.css">
</head>
<body>
    <?php
    if (isset($_GET['quanly'])){
        $data = $_GET['quanly'];
    }
    if ($data == 'sign-in'){
        include('login.php');
    }elseif ($data == 'sign-up'){
        include('register.php');
    }
    ?>
</body>
</html>
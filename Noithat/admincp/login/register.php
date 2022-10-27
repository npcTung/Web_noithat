<?php
include 'xuly.php'
?>

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Đăng ký</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="user" id="name" placeholder="<?php echo (isset($error['user']))?$error['user']:'Nhập tài khoản'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="<?php echo (isset($error['email']))?$error['email']:'Nhập Email'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="number"><i class="zmdi zmdi-phone"></i></i></label>
                        <input type="number" name="number" id="number" placeholder="<?php echo (isset($error['number']))?$error['number']:'Nhập SĐT'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="<?php echo (isset($error['pass']))?$error['pass']:'Nhập mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="cf_pass" id="re_pass" placeholder="<?php echo (isset($error['cf_pass']))?$error['cf_pass']:'Nhập lại mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Tôi đồng ý với  <a href="#" class="term-service">Điều khoản và Dịch vụ</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="../../asset/image/background/signup-image.jpg" alt="sing up image"></figure>
                <a href="index-login.php?quanly=sign-in" class="signup-image-link">Tôi có tài khoản</a>
            </div>
        </div>
    </div>
</section>
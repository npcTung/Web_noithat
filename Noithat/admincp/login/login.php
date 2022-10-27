<?php
include 'xuly.php';
?>
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="../../asset/image/background/signin-image.jpg" alt="sing up image"></figure>
                <a href="./index-login.php?quanly=sign-up" class="signup-image-link">Tạo tài khoản</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Đăng nhập</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="user" id="your_name" placeholder="<?php echo (isset($error['user']))?$error['user']:'Tài khoản'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="your_pass" placeholder="<?php echo (isset($error['pass']))?$error['pass']:'Mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Nhớ mật khẩu</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Hoặc đăng nhập bằng</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
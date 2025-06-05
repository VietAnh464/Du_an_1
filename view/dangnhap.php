
<div class="all">
    <div class="container">
        <div id="wrapper">
            <form action="index.php?act=dangnhap" method="post" id="form-login">
                <h1 class="form-heading">
                    <span class="page-signup-title page-signup-title-darkblue">ĐĂNG</span>
                    <span class="page-signup-title page-signup-title-yellow">NHẬP</span>
                </h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="email" class="form-input" name="email" placeholder="Tài khoản" >
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-input" name="password" placeholder="Mật khẩu">
                   
                </div>
                <input type="submit" style="border: none;" name="btn_submit" value="Đăng nhập" class="form-submit">
                <?php
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: red; text-align: center'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
        echo "<p style='color: red; text-align: center'>$thongbao_loi</p>";
    }
    ?>
                <h6 class="forgot">
                    <a class="d-none d-md-block" href="index.php?act=quenmatkhau">Quên mật khẩu</a>
</h6>
                <!-- <h6>Hoặc đăng nhập bằng</h6>
                <div class="d-flex justify-content-center page-signup-social-wrapper">
            
                    <div class="page-signup-social">
                    <a href="#" class="social-login--google"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_google.svg?1711329955342" class="bg-white"></a>
                    </div>
                    <div class="page-signup-social">
                    <a href="#" class="social-login--facebook"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_facebook.svg?1711329955342" class="bg-white"></a>
                    </div>
                    </div> -->
                <div class="register">
                Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký ngay!</a>
                </div>
        

            </form>
        </div>
    </div>
</div>
   
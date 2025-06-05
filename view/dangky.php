

<div class="all">
    <div class="container">
        <div id="wrapper">
            <form action="index.php?act=dangky" method="post" id="form-login">
                <h1 class="form-heading">
                    <span class="page-signup-title page-signup-title-darkblue">ĐĂNG</span>
                    <span class="page-signup-title page-signup-title-yellow">KÝ</span>
                </h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" class="form-input" name="user_name" placeholder="Họ và tên" >
                     
                </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="tel" class="form-input" name="phone" placeholder="Số điện thoại" >
                 
                </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" class="form-input" name="email" placeholder="Tài khoản email" >
                   
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-input" name="password" placeholder="Mật khẩu" >
                  
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <input type="submit" style="border: none;" value="Đăng ký" name="btn_submit" class="form-submit">
                <?php
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: green; text-align: center'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
        echo "<p style='color: red; text-align: center'>$thongbao_loi</p>";
    }
    ?>
                <!-- <h6>Hoặc đăng kí bằng</h6>
                <div class="d-flex justify-content-center page-signup-social-wrapper">
            
                    <div class="page-signup-social">
                    <a href="#" class="social-login--google"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_google.svg?1711329955342" class="bg-white"></a>
                    </div>
                    <div class="page-signup-social">
                    <a href="#" class="social-login--facebook"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_facebook.svg?1711329955342" class="bg-white"></a>
                    </div>
                    </div> -->
                <div class="register">
                Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập ngay!</a>
                </div>
        

            </form>
            
        </div>
    </div>
        
</div>
    
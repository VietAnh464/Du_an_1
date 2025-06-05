
<div class="all">
    <div class="container">
        <div id="wrapper">
            <form action="index.php?act=edit_taikhoan" method="post" id="form-login">
                <h1 class="form-heading">
                    <span class="page-signup-title page-signup-title-darkblue">CẬP NHẬT </span>
                    <span class="page-signup-title page-signup-title-yellow">THÔNG TIN </span>
                </h1>
                
                    <input type="hidden" class="form-input" name="id_user" value="<?= $_SESSION['dangnhap']['id_user'] ?>"  >
         
                <div class="form-group">
                <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-input" name="user_name"  value="<?= $_SESSION['dangnhap']['user_name'] ?>" >
                </div>
                <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                    <input type="text" class="form-input" name="email"  value="<?= $_SESSION['dangnhap']['email'] ?>" >
                </div>
                <div class="form-group">
                <i class="fas fa-key"></i>
                    <input type="text" class="form-input" name="password" value="<?= $_SESSION['dangnhap']['password'] ?>" >
                </div>
                <div class="form-group">
                <i class="fa-solid fa-phone"></i>
                    <input type="tel" class="form-input" name="phone" value="<?= $_SESSION['dangnhap']['phone'] ?>" >
                    
                </div>
                <input type="submit" name="btn_submit" value="Xác nhận" class="form-submit">
                <p>
                    <?php
    if(isset($thongbao_ok) && $thongbao_ok!=""){
        echo "<p style='color: green; text-align: center'>$thongbao_ok</p>";
    }
    if(isset($thongbao_false) && $thongbao_false!=""){
        echo "<p style='color: red; text-align: center'>$thongbao_false</p>";
    }
    ?>
                </p>
                
                
                

            </form>
        </div>
    </div>
</div>
   
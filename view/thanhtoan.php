<?php

// print_r( $_SESSION['cart']);
$thanhtoan_cart = $_SESSION['cart'];

?>

<div class="container-tt ">
<div class="main">
        <div class="col col-two">
            <div class="section-header">
                <p class="des-header">Thông tin giao hàng</p>
            </div>
            
            <form action="index.php?act=thanhtoan" method="post">
                  <!-- MỞ FORM   -->

                    <!-- BẮT ĐẦU SESION['dangnhap]  -->
            <?php 
            if(isset($_SESSION['dangnhap'])){
               extract($_SESSION['dangnhap']);
            }
            ?>
              <!--  KẾT THÚC SESION['dangnhap]  -->
        
            
            <div class="main-form">
               
            <div class="input-wrapper">
              
              <span>Họ tên:</span>  <input type="text" name="user_name" id="name"  value="<?= $_SESSION['dangnhap']['user_name'] ?>">
            </div> <br>
            <div class="input-wrapper">
            <span>Số điện thoại:</span>   <input type="text" name="user_phone" id="phone"  value="<?= $_SESSION['dangnhap']['phone'] ?>" >
            </div> <br>
            <div class="input-wrapper">
            <span>Email:</span>     <input type="email" name="user_email" id="email"  value="<?= $_SESSION['dangnhap']['email'] ?>">
            </div> <br>
            <div class="input-wrapper">
            <span>Địa chỉ:</span>     <input type="text" name="user_adress" id="address"  value="<?= $_SESSION['dangnhap']['adress'] ?>">
            </div> 
            
            </div>

        </div>
        <div class="col col-two">
        <p class="des-header">Thanh toán</p>
        <div class="content-box-all">
   
    
    <div class="content-box row">
        <div class="radio-input">
            <input type="radio" name="pttt" id="payment3" value="1">
            <label for="payment3" class="radio__label__primary">Thanh toán Online<div><br></div></label>
        </div>
    </div>
    <div class="content-box row">
        <div class="radio-input">
            <input type="radio" name="pttt" id="payment4" value="2">
            <label for="payment4" class="radio__label__primary">Thanh toán khi nhận hàng (COD)<div><br></div></label>
        </div>
    </div>
</div>
        </div>
       
    </div>
<div class="aside">
    <div class="sidebar-header">
        <span class="sidebar-description">Đơn hàng</span>
    </div>
    <div class="product">
        <?php foreach ($thanhtoan_cart as $donhang) {
          $products =  show_one_product($donhang['id_product']);
          extract($products);
        //   echo $name_product;
            ?>  
    <div class="product-line" style="display: flex;">
    <div class="product-image" style="flex: 0.25;" >
        <img src="../upload/<?= $image ?>" alt="" width="30" height="65">
    </div>
    <div class="product-description" style="flex: 0.5;">
        <span><?= $name_product ?></span>
        <div class="input-quantity"><input type="text" readonly>
     
        <span class="muted-text">Số lượng: <?= $donhang['quantity'] ?></span>
        
    </div>
    <span style="padding-right:150px"  class="muted-text">Size: <?= $donhang['size'] ?></span>
    </div>
    
    <div class="product-price" style="flex: 0.25;">
        <span><?= number_format($price)  ?> đ</span>
    </div>
    </div>
    
    <?php } ?>

    <div class="payment" style="display: flex;">
        <div class=payment-due>
            <span>Tổng cộng</span>
        </div>
        <div class="payment-price">
            <?= (isset($_SESSION['total'])) ? number_format($_SESSION['total']) : '0' ?> đ
        </div>

        <input type="hidden" name="total_bill" value="<?= number_format($_SESSION['total']) ?>">
    </div>
    <div class="submit-end" style="display: flex;">
        <a class="link-back" href="index.php?act=cart">< Quay về giỏ hàng</a>
        <div class="input-submit-end">
            <input type="submit" name="dat_hang" class="input-submit" value="ĐẶT HÀNG">
        </div>

 </form>
   <!-- Đóng Form  -->
    </div>

    </div>
</div>
</div>


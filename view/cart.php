<div class="synthetic-cart">

 <!-- ĐẦU FORM  -->
<form action="index.php?act=update_cart" method="post">


<div class="modal-body">

  <div class="mation-tt">
    <span>
        <h5>GIỎ HÀNG</h5>
    </span>
    
  </div>
  <div class="mation-te">
      <div><p><i class="fa-solid fa-fire" style="color: #fa0000;padding-right: 15px;"></i>Ưu đãi giỏ hàng sắp kết thúc!! Thanh toán trong 05 : 20 phút nữa trước khi hết hàng.</p></div>
      <div><p><i class="fa-solid fa-star" style="color: #FFD43B;padding-right: 15px;"></i>Hãy chia thành nhiều đơn nhỏ để áp dụng nhiều lần khuyến mãi</p></div>
  </div>
    

   <?php
   if(isset($_SESSION['dangnhap'])){ ?>

   <div class="cart-row">

        <span class="cart-item cart-header cart-column" >Sản Phẩm</span> 
        <span class="cart-size cart-header cart-column" style="margin-left: -7%;">Size</span>   
        <span class="cart-price cart-header cart-column" style="margin-left: -1.5%;" >Giá</span>
        <span class="cart-quantity cart-header cart-column" style="margin-left: 0.5%;">Số Lượng</span>
        <span class="cart-tprice cart-header cart-column" style="margin-left: 9%;">Thành tiền</span>

    </div>
    <div class="cart-items">   
       <?php 
     
       $total_cart = 0;
       $soluong_array = [];
         foreach ($list_cart as $all_cart) { 
        extract($all_cart);
        $soluong_array[] = $soluong;

        $total_one_product = $price * $soluong;
        $total_cart += $total_one_product;
        ?> 
      

         <div class="cart-row" >
        <div class="cart-item cart-column" style="max-width: 166px; max-height: 115px; width: 46%;">
            <img  class="cart-item-image" src="../upload/<?= $image ?>" width="100" height="100"> 
           <!-- <span class="cart-item-title"></span> -->
                <div class="cart-item-title" style="font-size: 14px;"><a href="index.php?act=chitiet_sanpham&id=<?= $id_product ?>"><?= $name_product ?></a></div>
             <!-- <span class="cart-item-title"></span> -->
             
        </div>
        <span class="cart-price cart-column" style="padding-top: 20px;"><?= $size?></span>
        <span class="cart-price cart-column" style="padding-top: 20px; margin-right: 39px;"><?= number_format($price)?></span>
        <div class="cart-quantity cart-column" style="padding-top: 16px;">
            <input class="cart-quantity-input" name="soluong[]" min ="1" type="number" value="<?= $soluong ?>"> 
            <input class="cart-quantity-input" name="id_product[]"  type="hidden" value="<?= $id_product ?>"> 
        </div>

        <span class="cart-tprice" style="    padding-top: 3.1%;margin-left: 8%;"><?= number_format($total_one_product) ?></span>

            <!-- nút xóa -->
            <div class="cart-delette" style="margin-top: 14px;">
                <a href="index.php?act=delete_cart&id_cart=<?= $id_cart ?>"> <input  class="btn btn-danger"  type="button" value="Xóa"> </a>
            </div>
    </div> 
    
    <?php } ?>
            

    
    
    <div class="cart-total">
        <strong class="cart-total-title">Tổng cộng:</strong>
        <span class="cart-total-price" style="color: #fa0000; font-weight:bold; font-size:25px"> <?= number_format($total_cart)  ?> đ  </span>
        <div class="nut_cap_nhat" style="margin-top: 30px;" >
            <input style="background-color: #FFD43B; padding: 5px 10px; font-weight:bold; border:none;outline:none" type="submit"  name ="update_cart" value="Cập nhật giỏ hàng">
        </div> <br>
        <div class="nut_cap_nhat">
            <a href="index.php"><input style="background-color: #FFD43B; padding: 5px 10px; font-weight:bold; border:none;outline:none" type="button" value="Tiếp tục mua hàng"></a>
        </div>
    </div>

    </div>     
    
    
    
    
</div>

</form>
<!-- CUỐI FORM  -->

<div class="modol-cart">
    <div class="oder_t">
        

    
        <div class="oder_t-button">
            <?php if(isset($id_cart) && isset($_POST['update_cart'])  ){
                echo '
                <a href="index.php?act=thanhtoan"><input type="button" style="width: 100%; background-color:#FFD43B; line-height:35px; border:none" value="ĐẶT HÀNG NGAY "> </a> 
                ';
            } ?>
           
             
        </div>
    </div>

  <?php  } else { ?>
    <div class="cart-row">

<span class="cart-item cart-header cart-column" >Sản Phẩm</span>    
<span class="cart-price cart-header cart-column">Giá</span>
<span class="cart-quantity cart-header cart-column">Số Lượng</span>
<span class="cart-tprice cart-header cart-column" style="margin-left: 8%;">Thành tiền</span>

</div>
    
 <?php } ?>
   
    
    <div class="oder-a">
        <div><i class="fa-solid fa-tag" style="padding-right: 15px; "></i>Sử dụng mã giảm giá ở bước thanh toán</div>
        <div><i class="fa-regular fa-square-check" style="padding-right: 15px;"></i>Thông tin bảo mật và mã̃ hóa</div>
        <div><i class="fa-regular fa-clock" style="padding-right: 15px;"></i>Giao hàng:1-3 ngày</div>
        <div><i class="fa-solid fa-arrow-right-arrow-left" style="padding-right: 15px;"></i>Miễn phí đổi trả: tại 250+ cửa hàng trong 15 ngày</div>

    </div>
</div>
     
</div>

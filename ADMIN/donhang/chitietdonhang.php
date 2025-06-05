<style>
    .order-details {
        padding: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
        /* display: grid; */
        background-color: white;
        /* grid-template-columns: 1fr 1fr; */
        gap: 50px;
        border-bottom: 1px solid #7a7fe2;
        border-radius: 20px;
        padding-bottom: 20px;
    }

    .order-details .form input {
        width: 100%;
        padding: 10px 20px;
        box-sizing: border-box;
        border-radius: 10px;
        margin-top: 10px;
        border: none;
        background-color: pink;
        color: black;
    }

    .order-details .right .return .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        color: black;
    }

    .checkoutLayout {
        gap: 50px;
        padding: 20px;
    }

    .returnCart h1 {
        border-top: 1px solid #eee;
        padding: 20px 0;
    }

    .returnCart .list .item img {
        height: 80px;
        padding: 5px;
        border-radius: 10px;
    }

    .returnCart .list .item {
        display: grid;
        grid-template-columns: 80px 1fr 50px 80px;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
        padding: 0 10px;
        box-shadow: 0 10px 20px #5555;
        border-radius: 20px;
    }

    .returnCart .list .item .name,
    .returnCart .list .item .returnPrice {
        font-size: large;
        font-weight: bold;
    }

    .checkoutLayout {
        background-color: #fff;
        border-radius: 20px;
        padding: 40px;
        color: black;
    }

    .check_road .road_shipping {
        display: grid;
        border-radius: 10px;
        color: black;
        gap: 10px;
        padding: 10px;
        margin-top: 10px;
        width: 100%;
    }

    .road_shipping h2 {
        padding: 5px;
        background-color: hsl(202, 15%, 54%);
        ;
        border-radius: 20px;
    }

    .circle {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #fff;
        margin-right: 5px;
    }

    .circle.active {
        background-color: yellow;
    }
    label{
        font-weight: bold;
    }
</style>
<aside>
   
   
    <form method="post" action="index.php?act=update_order" enctype="multipart/form-data">
   
  <input type="hidden" name="id_order" value="<?=$id_order?>">
<div class="form-group">
    <label for="exampleInputPassword1">Thời gian đặt hàng</label>
    <input type="text" name="date" value="<?= $date ?>" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Người nhận</label>
    <input type="text" name="user_name" value="<?= $user_name ?>" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
   
  <div class="form-group">
    <label for="exampleInputPassword1">Số điện thoại</label>
    <input type="number" name="phone" value="<?= $user_phone?>" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Địa chỉ</label>
    <input type="text" name="adress" value="<?= $user_adress ?>" class="form-control" id="exampleInputPassword1" >
    
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Trạng thái đơn hàng</label>
    <select class="form-select"  name="status" id="">
  <?php
  if($status == "Đang xử lý"){
    echo '<option value = "Đang xử lý" selected >Đang xử lý</option>';
    echo '<option value = "Sẵn sàng giao" >Sẵn sàng giao</option>';
    echo '<option value = "Đang giao" >Đang giao</option>';
    echo '<option value = "Hoàn thành" >Hoàn thành</option>';
    echo '<option value = "Đã hủy" >Đã hủy</option>';
  }elseif($status == "Sẵn sàng giao"){
      echo '<option value = "Sẵn sàng giao" selected >Sẵn sàng giao</option>';
    echo '<option value = "Đang xử lý"  >Đang xử lý</option>';
    echo '<option value = "Đang giao" >Đang giao</option>';
    echo '<option value = "Hoàn thành" >Hoàn thành</option>';
    echo '<option value = "Đã hủy" >Đã hủy</option>';


  }elseif($status == "Đang giao"){
    echo '<option value = "Sẵn sàng giao" >Sẵn sàng giao</option>';
  echo '<option value = "Đang xử lý"  >Đang xử lý</option>';
  echo '<option value = "Đang giao"  selected >Đang giao</option>';
  echo '<option value = "Hoàn thành" >Hoàn thành</option>';
  echo '<option value = "Đã hủy" >Đã hủy</option>';


}elseif($status == "Hoàn thành"){
    echo '<option value = "Sẵn sàng giao" >Sẵn sàng giao</option>';
  echo '<option value = "Đang xử lý"  >Đang xử lý</option>';
  echo '<option value = "Đang giao" >Đang giao</option>';
  echo '<option value = "Hoàn thành" selected  >Hoàn thành</option>';
  echo '<option value = "Đã hủy" >Đã hủy</option>';


}elseif($status == "Đã hủy"){
    echo '<option value = "Sẵn sàng giao"  >Sẵn sàng giao</option>';
  echo '<option value = "Đang xử lý"  >Đang xử lý</option>';
  echo '<option value = "Đang giao" >Đang giao</option>';
  echo '<option value = "Hoàn thành" >Hoàn thành</option>';
  echo '<option value = "Đã hủy" selected >Đã hủy</option>';


}
   
  
  
  ?>

    </select>
  </div> <br>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Phương thức thanh toán</label>
  <?php
  if($pttt == 2){
    $pttt_text = "Thanh toán online";
  }elseif($pttt == 1){
    $pttt_text = "Thanh toán khi nhận hàng";
  }
  
  ?>
  <input type="text" name="pttt" value="<?= $pttt_text ?>" class="form-control" id="exampleInputPassword1" >
</div>

     <!-- Thông tin các sản phẩm trong đơn  -->
     <div class="checkoutLayout">
        <div class="returnCart">
            <!-- <a href="../view/index.php">Tiếp tục mua hàng</a> -->
            <h1>Đơn hàng của bạn </h1>
            <?php
            $order_history = select_his_cart($id_order, $id_user);
            foreach ($order_history as $order) {
                extract($order);
                $box_product = show_one_product($id_product);
                extract($box_product);
                echo '
      
        <div class="list">

            <div class="item">
                <img src="../upload/' . $image . '" >
                <div class="info">
                    <div class="name">' . $name_product . '</div>
                    <div class="price">'  .number_format($price) . 'đ/1 product/ Size:'.$order['size'].'</div>
                </div>
                <div class="quantity">' . $order['soluong'] . '</div>
                <div class="returnPrice">' . number_format($order['soluong']  * $price) . 'đ</div>
            </div>

        </div>
              ';
            }
            ?>
        </div>
    </div>

  <input id="nut_them" name="btn_submit"  type="submit" value="Cập nhật đơn hàng ">
  <a href="index.php?act=list_donhang"><input id="nut_danhsach"  type="button" value="Quay về danh sách đơn hàng"></a>
</form>
  

   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->
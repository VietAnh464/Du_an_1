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
<div class="container">
    <h2 style="color:black;font-weight: bold;text-align:center">CHI TIẾT ĐƠN HÀNG</h2>
    <div class="order-details">
        <div class="right">

            <div class="form">
            <div class="group">
                    <label for="address">THỜI GIAN ĐẶT HÀNG</label>
                    <input type="text" name="address" id="address" value="<?= $date ?>" disabled>
                </div>
                <div class="group">
                    <label for="name">HỌ VÀ TÊN</label>
                    <input type="text" name="name" id="name" value="<?= $user_name ?>" disabled>
                </div>

                <div class="group">
                    <label for="phone">SỐ ĐIỆN THOẠI </label>
                    <input type="text" name="phone" id="phone" value="<?= $user_phone ?>" disabled>
                </div>

                <div class="group">
                    <label for="address">ĐỊA CHỈ</label>
                    <input type="text" name="address" id="address" value="<?= $user_adress ?>" disabled>
                </div>
                <div class="group">
                    <label for="address">PHƯƠNG THỨC THANH TOÁN </label>
                    <?php 
                    if($pttt = 1){
                        $kieu_thanhtoan = "Thanh toán online";
                    }else{
                        $kieu_thanhtoan = "Thanh toán khi nhận hàng";
                    }
                    ?>
                    <input type="text" name="address" id="address" value="<?= $kieu_thanhtoan ?>" disabled>
                </div>
            </div>
            <div class="return">
                
                <div class="row">
                    <div>TỔNG ĐƠN HÀNG</div>
                    <div class="totalPrice"><?= $total_bill ?>đ</div>
                </div>
            </div>

        </div>
        <!-- <div class="check_road">
            <h1>Checkout</h1>
            <div class="road_shipping">

                <h2><span class="circle active"></span>- Đang xử lý : <?= $date ?></h2>
                <h2> <span class="circle"></span>- Sẵn sàng giao hàng</h2>
                <h2> <span class="circle"></span>- Đang giao hàng</h2>
                <h2> <span class="circle"></span>- Hoàn Tất</h2>
            </div>


        </div> -->
    </div>


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

</div>
<!-- ------------------------------------------- -->
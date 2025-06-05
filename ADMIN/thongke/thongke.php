
<aside>

<table class="table table-dark table-striped-columns">
  <thead>
    <tr >
      
      <!-- <th scope="col">asdasdas</th> -->
      <th  scope="col">Tổng số đơn</th>
      <th  scope="col">Đang xử lý</th>
      <th  scope="col">Đang trong quá trình giao hàng</th>
      <th scope="col">Đơn hoàn thành</th>
      <th  scope="col">Đơn hủy</th>
    </tr>
  </thead>
  <?php
  $thongke = count_status_thongke();
  foreach ($thongke as $tk){
    extract($tk); ?>

 
  <tbody>
    <tr>
      <!-- <th scope="row"><?= $total_complete?></th> -->
     
      <td><?= $total_orders?></td>
      <td><?= $total_starting_orders?></td>
      <td><?= $total_shipping_orders?></td>
       <td><?= $total_complete?></td>
      <td><?= $total_cancel?></td>
    </tr>
    
  </tbody>
  <?php }
  
  ?>
</table>

<table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      
      <!-- <th scope="col">asdasdas</th> -->
      <th scope="col">Sản phẩm</th>
      <th scope="col">Lượng mua ít nhất</th>
      <th scope="col">Lượng mua nhiều nhất</th>
    </tr>
  </thead>
  <?php
  $thognke_sanpham = statistic_product();
  foreach ($thognke_sanpham as $tk_sp){
    extract($tk_sp); ?>

 
  <tbody>
    <tr>
      <!-- <th scope="row"><?= $total_complete?></th> -->
     
      <td><?= $name_product?></td>
       <td><?= $quantity_min?></td>
      <td><?= $quantity_max?></td>
    </tr>
    
  </tbody>
  <?php }
  
  ?>
</table>

<table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      
      <!-- <th scope="col">asdasdas</th> -->
      <th scope="col">Khách hàng</th>
      <th scope="col">Đơn hàng thấp nhất</th>
      <th scope="col">Đơn hàng cao nhất </th>
      <th scope="col">Tổng số đơn hàng</th>
    </tr>
  </thead>
  <?php
  $thognke_khachhang = statistic_order();
  foreach ($thognke_khachhang as $tk_user){
    extract($tk_user); ?>

 
  <tbody>
    <tr>
      <th scope="row"><?= $user_name?></th>
     
      <td><?= $price_min?></td>
       <td><?= $price_max?></td>
      <td><?= $order_count?></td>
    </tr>
    
  </tbody>
  <?php }
  
  ?>
</table>
</aside>

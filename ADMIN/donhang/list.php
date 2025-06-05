<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      
      <th>Mã đơn hàng </th>
      <th>Tên tài khoản </th>
      <th>Ngày đặt  </th>
      <th>Tổng đơn</th>
      <th>Trạng thái</th>
      <th>Chi tiết đơn hàng</th>
  
    </tr>
    <?php
    foreach ($list_donhang as $donhang) { 
        //var_dump($taikhoan);
        extract($donhang);
        $xoaOrder="index.php?act=delete_order&id_order=".$id_order;
        
    
        echo '<tr>
           
            <td>'.$madh.'</td>
            <td>'.$user_name.'</td>
            <td>'.$date.'</td>
            <td>'.$total_bill.'đ</td>
            <td>'.$status.'</td>
            <td><a href = "index.php?act=chitiet_donhang&id_order='.$id_order.'" >Chi tiết đơn hàng</a></td>
           
            
              </tr>';
     } 
      
     ?>
        
   
   
    
    
   </table>
  
  </aside>
<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      
      <th>Sản phẩm</th>
      
      <th>Số lượng bình luận  </th>
   
      <th>Thời gian</th>
      
      <th>Hành động </th>
    </tr>
    <?php
    foreach ($list_comment as $comment) { 
        //var_dump($taikhoan);
        extract($comment);
        // $xoa_cm="index.php?act=delete_cm&id=".$id_comment;
       
    
        echo '<tr>
           
        <td>' . $name_product . '</td>
        <td>' . $quantity . '</td>
        <td>' . $newest_comment_date . '</td>
  
            <td><a href="index.php?act=chitietbinhluan&id_product='.$id_product.'"> Xem chi tiết bình luận  </a></td>
           
           
            
              </tr>';
     } 
      
     ?>
        

   
   
    
    
   </table>
  
  </aside>
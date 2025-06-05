<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      
      <th>Mã </th>
      <th>Nội dung </th>
      <th>Sản phẩm </th>
      <th>Khách hàng </th>
      <th>Ngày bình luận</th>
      <th>Hành động </th>
    </tr>
    <?php
           foreach($show_all_thongtin_comment as $comment) { 
        //var_dump($taikhoan);
             extract($comment);
             $xoa_comment = "index.php?act=delete_cm&id=".$id_comment;
           
       
    
        echo '<tr>
           
            <td>'.$id_comment.'</td>
            <td>'.$noi_dung.'</td>
            <td>'.$name_product.'</td>
            <td>'.$user_name.'</td>
            <td>'.$date.'</td>
          <td>  <a onclick="return confirm(\'Có chắc muốn xóa không\')" href="'.$xoa_comment.'"><input id="nut_xoa" type="button" value="Xóa"></a>  </td>
           
            
              </tr>';
     } 
      
     ?>
        
   
   
    
    
   </table>
  
  </aside>
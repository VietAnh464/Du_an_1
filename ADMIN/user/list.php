<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      
      <th>Mã tài khoản </th>
      <th>Tên tài khoản </th>
      <th>Mật khẩu </th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Phone </th>
      <th>Vai trò </th>
      <th>Hành động  </th>
    </tr>
    <?php
    foreach ($list_taikhoan as $taikhoan) { 
        //var_dump($taikhoan);
        extract($taikhoan);
        $xoatk="index.php?act=delete_user&id=".$id_user;
        $suatk="index.php?act=sua_user&id=".$id_user;
        ($role === 1) ? $phan_loai = "Quản trị" : $phan_loai = "Khách hàng";
    
        echo '<tr>
           
            <td>'.$id_user.'</td>
            <td>'.$user_name.'</td>
            <td>'.$password.'</td>
            <td>'.$email.'</td>
            <td>'.$adress.'</td>
            <td>'.$phone.'</td>
            <td>'.$phan_loai.'</td>
            <td><a onclick="return confirm(\' Xác nhận xóa tài khoản này \')" href="'.$xoatk.'"><input id="nut_xoa" type="button" value="xóa"></a> <a href="'.$suatk.'"><input id="nut_sua" type="button" value="Sửa"></a>  </td>
            
              </tr>';
     } 
      
     ?>
        
   
   
    
    
   </table>
  
  </aside>
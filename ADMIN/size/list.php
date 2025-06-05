<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      <th>Mã</th>
      <th>SIZE  </th>
      <th>Hành động </th>
    </tr>
    <?php
    foreach ($list_size as $size){ 
      
      ?>  
   
    <tr>
      <td><?= $size['id_size'] ?></td>
      <td><?= $size['name_size'] ?></td>
      <td>
       <a onclick="return confirm('Xác nhận xóa mục này ?')" href="index.php?act=delete_size&id=<?= $size['id_size'] ?>"><input id="nut_xoa" type="button" value="Xóa"></a></td>
    </tr>

    <?php } ?>
   </table>
   
  </aside>
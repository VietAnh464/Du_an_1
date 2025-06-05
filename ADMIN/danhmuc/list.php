<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      <th>Mã danh mục </th>
      <th>Tên danh mục </th>
      <th>Hành động </th>
    </tr>
    <?php
    foreach ($list_category as $list_dm){ ?>  
   
    <tr>
      <td><?= $list_dm['id_category'] ?></td>
      <td><?= $list_dm['name_category'] ?></td>
      <td><a href="index.php?act=sua_danhmuc&id=<?= $list_dm['id_category'] ?>"><input id="nut_sua" type="button" value="Sửa"></a> 
       <a onclick="return confirm('Có chắc muốn xóa không')" href="index.php?act=delete_danhmuc&id=<?=$list_dm['id_category']?>"><input id="nut_xoa" type="button" value="Xóa"></a></td>
    </tr>

    <?php } ?>
   </table>
   <a href="index.php?act=add_danhmuc"><input id="nut_them"  type="button" value="Thêm"></a>
  </aside>
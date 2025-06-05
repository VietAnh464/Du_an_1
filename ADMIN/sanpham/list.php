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
      <th>Ảnh sản phẩm </th>
      <th>Tên sản phẩm </th>
      <th>Đơn giá </th>
      <th>Số lượng </th>
      <th>Loại sản phẩm </th>
      <th>Hành động </th>
    </tr>
   
    
   <?php foreach ($list_product as $list_pro) {?>
            <?php extract($list_pro) ?> 
    <?php 
     $hinhpath = "../upload/".$image;

     if(is_file($hinhpath)){
         $hinh_anh = "<img src='".$hinhpath."' height='80' width='80' >";
     }else{
         $hinh_anh = "No photo";
     }
   ?>
    <tr>
      <td><?=$list_pro['id_product']?></td>
      <td><?=$hinh_anh?></td>
      <td><?=$list_pro['name_product']?></td>
      <td><?=$list_pro['price']?></td>
      <td><?=$list_pro['quantity']?></td>
      <td><?=$list_pro['name_category']?></td>
      
      <td><a href="index.php?act=sua_sanpham&id=<?=$id_product?>"><input id="nut_sua" type="button" value="Sửa"></a> 
       <a onclick="return confirm('Có chắc muốn xóa không')" href="index.php?act=delete_sanpham&id=<?=$id_product?>"><input id="nut_xoa" type="button" value="Xóa"></a></td>
    </tr>
    <?php  } ?>

   
   </table>
   <a href="index.php?act=add_sanpham"><input id="nut_them"  type="button" value="Thêm"></a>
  </aside>
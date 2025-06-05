<!-- PHẦN MAIN  -->
  

  
<!-- NỘI DUNG CHÍNH  -->
<aside>
    <!-- <form action="" method="post">
        <label for="">Mã danh mục  </label> <br>
  <input type="text" disabled>
  <label for=""> Tên danh mục </label> <br>
  <input type="text" name="name_category" id="">
    </form> -->
    <?php
    if(is_array($list_one_category)){
        extract($list_one_category);
    }
    ?>
    <form method="post" action="index.php?act=update_danhmuc">
  <div class="form-group">
    <label for="exampleInputEmail1">Mã danh mục</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Mã danh mục" value="<?= $list_one_category['id_category'] ?>" >
    <input type="hidden" name="id_category" value="<?= $list_one_category['id_category'] ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tên danh mục</label>
    <input type="text" name="name_category" class="form-control" id="exampleInputPassword1" value="<?= $list_one_category['name_category'] ?>">
    
    <?php
   
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: green;'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
      echo "<p style='color: red;'>$thongbao_loi</p>";
  }
    ?>
    
  </div> <br>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Cập nhật ">
  <a href="index.php?act=list_danhmuc"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->
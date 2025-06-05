<!-- PHẦN MAIN  -->
  

  
<!-- NỘI DUNG CHÍNH  -->
<aside>
    <!-- <form action="" method="post">
        <label for="">Mã danh mục  </label> <br>
  <input type="text" disabled>
  <label for=""> Tên danh mục </label> <br>
  <input type="text" name="name_category" id="">
    </form> -->
    
    <form method="post" action="index.php?act=add_sanpham" enctype="multipart/form-data">
    <select class="form-select" name="id_category" aria-label="Default select example">
        <option selected>Tất cả</option>
        <?php foreach($list_category as $item) {
                  extract($item) ?>
           
          <option value="<?=$item['id_category']?>"><?= $item['name_category'] ?></option>
        <?php } ?>
</select>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Tên sản phẩm</label>
    <input type="text" name="name_product" class="form-control" id="exampleInputPassword1" >
    
  </div> <br>
  <div class="input-group mb-3">
    
      <input type="file" name="hinh_anh" class="form-control" id="inputGroupFile02">
      
    </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Đơn giá</label>
    <input type="text" name="price" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Số lượng</label>
    <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" >
    
  </div> <br>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div> <br>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Thêm">
  <a href="index.php?act=list_sanpham"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->
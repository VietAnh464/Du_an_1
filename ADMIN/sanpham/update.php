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
    if(is_array($list_one_product)){
        extract($list_one_product);
    }
    $hinhpath = "../upload/".$image;

    if(is_file($hinhpath)){
        $hinh_anh = "<img src='".$hinhpath."' height='80' width='80' >";
    }else{
        $hinh_anh = "No photo";
    }
    ?>
    <form method="post" action="index.php?act=update_sanpham" enctype="multipart/form-data">
    <select class="form-select" name="id_category" aria-label="Default select example">
        <option selected>Tất cả</option>
        <?php foreach($list_category as $item) {
                  extract($item) ?>
           <?php if($list_one_product['id_category'] == $item['id_category']) { ?>
             <option value="<?=$item['id_category']?>" selected><?= $item['name_category'] ?></option>
             <?php } else { ?> 
              <option value="<?=$item['id_category']?>"><?= $item['name_category'] ?></option>
            <?php }?>
         
        <?php } ?>
</select>
  <input type="hidden" name="id_product" value="<?= $list_one_product['id_product'] ?>">
<div class="form-group">
    <label for="exampleInputPassword1">Tên sản phẩm</label>
    <input type="text" name="name_product" value="<?= $list_one_product['name_product'] ?>" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="input-group mb-3">
    
      <input type="file" name="hinh_anh" class="form-control" id="inputGroupFile02">
     
    </div> 
    <div>
       <?=$hinh_anh?>
    </div><br>
  <div class="form-group">
    <label for="exampleInputPassword1">Đơn giá</label>
    <input type="text" name="price" value="<?= $list_one_product['price'] ?>" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Số lượng</label>
    <input type="text" name="quantity" value="<?= $list_one_product['quantity'] ?>" class="form-control" id="exampleInputPassword1" >
    
  </div> <br>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?= $list_one_product['description']  ?></textarea>
</div> <br>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Cập nhật ">
  <a href="index.php?act=list_sanpham"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->
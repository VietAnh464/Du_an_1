<main class="container">
  

  <div class="san_pham_tong">
    <h5 style="color:  #2A2A86;">Sản phẩm quần áo mới nhất</h5>
   <div class="item">
    <?php foreach ($sanpham_trangchu_Nam as $list_sp_Nam) { 
      extract($list_sp_Nam);
      $hinh_hienthitrangchu = $img_path.$image;
      ?>
  
      <div class="product">
        <div class="product_img">
        <a href="index.php?act=chitiet_sanpham&id=<?=$list_sp_Nam['id_product']?>"> <img src="<?= $hinh_hienthitrangchu ?>" alt=""> </a>
        </div>
      <!-- <a href="index.php?act=chitiet_sanpham&id=<?=$list_sp_Nam['id_product']?>"> <img src="<?= $hinh_hienthitrangchu ?>" alt=""> </a> -->
      <h5><?= $list_sp_Nam['name_product'] ?></h5>
      <p style="color: red;"><?=number_format($list_sp_Nam['price'])  ?> <sup style="font-size: 16px;" >đ</sup></p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>

    <?php   }  ?>
    <!-- <div class="product">
      <a href=""> <img src="../img/anhsanpham2.webp" alt=""> </a>
=======
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/anhsanpham2.webp" alt=""> </a>
 ecb37d948ebe7632dcb768aec85a65f0acce6792
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/anhsanpham3.webp" alt=""> </a>
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
       -->
    </div>

    <!-- <div class="product">
      <a href=""> <img src="../img/anhsanpham4.webp" alt=""> </a>
=======
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/anhsanpham4.webp" alt=""> </a>
>>>>>>> ecb37d948ebe7632dcb768aec85a65f0acce6792
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div> -->
   </div> <br>
   <!-- <h5 style="color:  #2A2A86;">Thời trang trẻ em</h5> -->
   <div class="item">
   <?php foreach ($sanpham_trangchu_Tre_em as $list_sp_Tre_em) { 
      extract($list_sp_Tre_em);
      $hinh_hienthitrangchu = $img_path.$image;
      ?>
    <div class="product">

      <a href="index.php?act=chitiet_sanpham&id=<?=$list_sp_Tre_em['id_product']?>"> <img src="<?= $hinh_hienthitrangchu ?>" alt=""> </a>
      <h5><?= $list_sp_Tre_em['name_product'] ?></h5>
      <p style="color: red;"><?= number_format($list_sp_Tre_em['price'])  ?> <sup style="font-size: 16px;" >đ</sup></p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>
    <?php   }  ?>
    <!-- <div class="product">
      <a href=""> <img src="../img/polo2.webp" alt=""> </a>
=======
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/polo1.webp" alt=""> </a>
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/polo2.webp" alt=""> </a>
>>>>>>> ecb37d948ebe7632dcb768aec85a65f0acce6792
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/polo4.webp" alt=""> </a>
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div>
    <div class="product">
      <a href="index.php?act=chitiet_sanpham"> <img src="../img/polo3.webp" alt=""> </a>
      <h5>Sản phẩm 1 </h5>
      <p style="color: red;">249.000</p>
      <span class="chay_hang">Sắp cháy hàng</span>
      
    </div> -->
   </div>
     
     
  </div> <br>
  <div>
    <h4>BỘ SƯU TẬP</h5>
  </div>
  <div class="BST container">
    <div class="item_BST">
      <img src="../img/home_bst_1_image.webp" alt="">
    </div>
    <div class="item_BST">
      <img src="../img/home_bst_2_image.webp" alt="">
    </div>
    <div class="item_BST">
      <img src="../img/home_bst_3_image.webp" alt="">
    </div>
  </div>

  
</main>
<div class="container">
    <h4 class="td_sp">XIN CHÀO QUÝ KHÁCH</h4>
       

        <div class="list_sp">
            <div class="san_pham_tong">
                <h5 style="padding-left:15px ;padding-bottom:25px ; color: #2A2A86; ">Sản phẩm bạn tìm kiếm </h5>
                <div class="item">
                    <?php foreach ($product as $sanpham) { 
                         extract($sanpham);
                         $hinh_hienthitrangchu = $img_path.$image;
                        ?>
                     
                    <div class="product">
                        <a href="index.php?act=chitiet_sanpham&id=<?= $sanpham['id_product'] ?>"> 
                        <img src="<?= $hinh_hienthitrangchu ?>" alt=""> </a> <br>
                        <h8 ><?= $sanpham['name_product'] ?></h8>
                        <div>
                            <span style="color:red;padding-right:9px"><?= number_format($sanpham['price'])  ?>đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span style="color: blue;"> Số lượng sản phẩm : <?= $sanpham['quantity'] ?></span> <br>
                        <span class="chay_hang">Sắp cháy hàng</span>
                    
                    </div>
                    <?php   }  ?>
                    <!-- <div class="product">
                        <a href=""> <img src="../img/nam2.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                        
                    </div>
                    <div class="product">
                        <a href=""> <img src="../img/nam3.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim  </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                        
                    </div>
                    <div class="product">
                        <a href=""> <img src="../img/nam5.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                        
                    </div> -->
            </div> <br>
            
            <!-- <div class="item">
                <div class="product">
                <a href=""> <img src="../img/polo1.webp" alt=""> </a>
                <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                <span class="chay_hang">Sắp cháy hàng</span>
                
                </div>
                <div class="product">
                <a href=""> <img src="../img/polo2.webp" alt=""> </a>
                <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                <span class="chay_hang">Sắp cháy hàng</span>
                
                </div>
                <div class="product">
                <a href=""> <img src="../img/polo4.webp" alt=""> </a>
                <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                <span class="chay_hang">Sắp cháy hàng</span>
                
                </div>
                <div class="product">
                <a href=""> <img src="../img/nam4.png" alt=""> </a>
                <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                <span class="chay_hang">Sắp cháy hàng</span>
                
                </div>
                <div class="product">
                        <a href="index.php?act=chitiet_sanpham"> <img src="../img/nam1.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                    
                    </div>
                    <div class="product">
                        <a href=""> <img src="../img/nam2.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                        
                    </div>
                    <div class="product">
                        <a href=""> <img src="../img/nam3.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim  </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                        
                    </div>
                    <div class="product">
                        <a href="index.php?act=chitiet_sanpham"> <img src="../img/nam1.jpg" alt=""> </a>
                        <h8>Áo Polo Nam Pique Mắt Chim Basic </h8>
                        <div>
                            <span style="color:red;padding-right:9px">250.000đ</span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                    
                    </div>
            </div> -->
        </div>
</div>
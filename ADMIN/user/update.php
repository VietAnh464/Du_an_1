<!-- PHẦN MAIN  -->
  

  
<!-- NỘI DUNG CHÍNH  -->
<aside>
    
    <?php
    if(is_array($list_one_user)){
        extract($list_one_user);
    }
    ?>
    <form method="post" action="index.php?act=update_user">
  <div class="form-group">
    <label for="exampleInputEmail1">Mã  tài khoản</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Mã danh mục" value="<?= $id_user ?>" >
    <input type="hidden" name="id_user" value="<?= $id_user ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tên tài khoản </label>
    <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" value="<?= $user_name ?>">
   
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Mật khẩu</label>
    <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="<?= $password ?>">
   
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1"> Email </label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= $email ?>">
   
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Địa chỉ</label>
    <input type="text" name="adress" class="form-control" id="exampleInputPassword1" value="<?= $adress ?>">
   
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Số điện thoại</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?= $phone ?>">
   
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Vai trò </label>
    <select class="form-select" name="role" id="" aria-label="Default select example">
                     <?php
                     if($role==1){
                      echo'<option  value="1">Quản trị</option>
                      <option value="0">Khách hàng</option>';
                     }else{
                      echo'<option  value="0">Khách hàng</option>
                      <option value="1">Quản trị</option>';
                     }
                     
                     
                     ?>

                    </select>
   
  </div> <br>

  <?php
   
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: green;'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
      echo "<p style='color: red;'>$thongbao_loi</p>";
  }
    ?>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Cập nhật ">
  <a href="index.php?act=list_taikhoan"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->
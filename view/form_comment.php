<?php

session_start();
include "../model/comment.php";
include "../model/pdo.php";
$id_product= $_REQUEST['id_product'];
$list_comment_by_product =  show_comment_by_id_product($id_product);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/chitietsp.css">
    <link rel="stylesheet" href="../css/dangnhap.css">
</head>
<body>
    <table class="content_comment">
               <?php
                
                foreach ($list_comment_by_product as $comment) {
                  extract($comment);
                  
                  echo '<tr><td>'.$user_name.'</td>';
                  echo '<td>'.$noi_dung.'</td>';
                  echo '<td>'.$date.'</td></tr>';
                };
                
                ?>
    </table>
    <?php if(isset($_SESSION['dangnhap'])) { ?>
    <div class="form_binhluan">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
              <input type="hidden" name="id_product" value="<?=$id_product?>">
              <input type="text" name="noi_dung" >
              <input type="submit" name="submit_comment" value="Gửi">
              
    </form>
    </div>
    
    <?php  } else { ?> 
    <div class="yeu_cau_dang_nhap">
        <h6 style="color: red;">Cần đăng nhập để đánh giá sản phẩm </h6>
    </div>
    <?php }   ?>

    <?php
           if(isset($_POST['submit_comment']) && ($_POST['submit_comment'])){
            $noi_dung = $_POST['noi_dung'];
            $id_product = $_POST['id_product'];
            $id_user = $_SESSION['dangnhap']['id_user'];
            $date = date('Y/m/d');
            add_comment($noi_dung,$id_product,$id_user,$date);
            header("Location:".$_SERVER['HTTP_REFERER']);
           }
           
        
       
           ?>
             
</body>
</html>
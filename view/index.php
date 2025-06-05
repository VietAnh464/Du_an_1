<?php
session_start();
include '../model/pdo.php';
include '../model/danhmuc.php';
$show_category_trangchu = show_all_category();

include 'header.php';

include '../global.php';
include '../model/sanpham.php';
include '../model/size.php';
include '../model/user.php';
include '../model/cart.php';
include '../model/order.php';
// include '../model/comment.php';


$sanpham_trangchu_Nam = show_all_sp_trangchu_Nam();
$sanpham_trangchu_Tre_em = show_all_sp_trangchu_Tre_em();

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];



if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'sanpham_tungloai':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id_category = $_GET['id'];
                $sanpham_theo_danhmuc = sanpham_theo_danhmuc($id_category);
                include 'sanphamtheoloai.php';
            } else {
                include 'slide_show.php';
                include 'trangchu.php';
            }

            break;

        case 'chitiet_sanpham':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                // $id_sanpham=$_GET['id'];
                //   $ma_hang=$_GET['id'];
                $show_sanpham_chitiet = show_one_product($_GET['id']);
                extract($show_sanpham_chitiet);
                $show_sanpham_cungloai = show_san_pham_cung_loai($id_category);
                $list_size = show_size();
                // $list_comment_by_product = show_comment_by_id_product($_GET['id']);
               

                include 'chitietsanpham.php';
            } else {
                include 'slide_show.php';
                include 'trangchu.php';
            }

            break;

        case 'search':
            if (isset($_POST['btn_search']) && $_POST['btn_search']) {
                $search = $_POST['search'];
            } else {
                $search = "";
            }
            $product = search_product($search);
            include 'timkiemsanpham.php';
            break;

        case 'dangky':

            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user_name = $_POST['user_name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // if($user_name =""){
                //     $loi_username = "Không được để trống";
                // }elseif($phone=""){
                //     $loi_phone = "Không được để trống";
                // }elseif($email=""){
                //   $loi_email = "Không được để trống";
                // }elseif($password=""){
                //     $loi_password = "Không được để trống";
                // }else{
                //     $thong_bao = "Đăng ký thành công";
                //     add_user($user_name,$password,$email,$phone);
                // }
                if ($user_name == "" && $phone == "" && $email == "" && $password == "") {
                    $thongbao_loi = "Không được để trống";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $thongbao_loi = "Email không đúng định dạng";
                } elseif (email_exist($email)) {
                    $thongbao_loi = "Email đã tồn tại";
                } else {
                    add_user($user_name, $password, $email, $phone);
                    $thongbao = "Đăng ký thành công";
                }
            }

            include 'dangky.php';
            break;

        case 'dangnhap':
            if (isset($_POST['btn_submit']) && $_POST['btn_submit']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if($email!="" && $password!=""){
                     $check_dangnhap = check_taikhoan($email, $password);
                if (is_array($check_dangnhap)) {
                    $_SESSION['dangnhap'] = $check_dangnhap;
                    header("Location: index.php");
                } else {
                    $thongbao_loi = "Đăng nhập không thành công ! Vui lòng kiểm tra lại thông tin ";
                }
                }else{
                    $thongbao = "Không được để trống";
                }
               
            }
            include 'dangnhap.php';
            break;

        case 'quenmatkhau':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $email = $_POST['email'];

                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao_quenmk = "Mật khẩu của bạn là" . $check_email['password'];
                } else {
                    $thongbao_quenmk_loi = "Email không tồn tại ! Vui lòng kiểm tra lại";
                }
            }

            include 'quenmatkhau.php';
            break;

        case 'edit_taikhoan':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $id_user = $_POST['id_user'];

                if ($user_name!= "" && $email!= "" && $password != ""  && $phone != "") {

                     update_taikhoan($id_user, $user_name, $password, $email, $phone);
                     $_SESSION['dangnhap'] = check_taikhoan($email, $password);
                    header("Location: index.php?act=edit_taikhoan");
                    $thongbao_ok = " Cập nhật thành công ";

                } else {
                       $thongbao_false = "Không được để trống";
                  
                }

               
            }
            include 'edit_taikhoan.php';
            break;

        case 'thoat':
            session_unset();
            header("Location: index.php");
            break;
////// GIỎ HÀNG , THANH TOÁN GIỎ HÀNG , THANH TOÁN GIỎ HÀNG , THANH TOÁN GIỎ HÀNG , THANH TOÁN //////////
        case 'cart':
            
           if(isset($_SESSION['dangnhap'])){
            $id_user = $_SESSION['dangnhap']['id_user'];
             $list_cart = show_cart($id_user);
           }
           
            include 'cart.php';
            break;
            
        case 'add_to_cart':
            if(isset($_SESSION['dangnhap'])){
                $id_user = $_SESSION['dangnhap']['id_user'];
           
                if (isset($_GET['id_product'])) {
                    // print_r($_POST['select_size']) ;
                    $soluong = 1;
                    $choose_size = $_POST['select_size'];
                    $id_product = $_GET['id_product'];
                     if(check_product_in_cart($id_product,$id_user,$choose_size)){
                        $soluong+=get_quantity_product_in_cart($id_user, $id_product , $choose_size);
                        
                        update_cart($id_product,$soluong,$id_user,$choose_size);
                       
                    }else{ 
                        add_cart($id_user,$id_product,$soluong,$choose_size);
                    
              
                        // echo "<script> alert('Sản phẩm đã có trong giỏ hàng'); </script>";
                     }
                   
                }
                 echo "<script> alert('Thêm vào giỏ hàng thành công ! '); </script>";
                $list_cart = show_cart($id_user);
          
            }else{
                echo "<script> alert('Vui lòng đăng nhập để mua hàng ! '); </script>";
                // include 'timkiemsanpham.php'; 
            }
            // header("Location: index.php");
            include 'cart.php';
            break;

            case'update_cart':
                     
                if(isset($_POST['update_cart'])){
                   
                    $soluong_array = array();

                    for ($i = 0; $i < count($_POST['id_product']); $i++) {
                        // Lấy ID sản phẩm
                        $id_product = $_POST['id_product'][$i];
                    
                        // Lấy số lượng sản phẩm
                        $soluong = $_POST['soluong'][$i];
                    
                        // Lưu số lượng vào mảng
                        $soluong_array[$id_product] = $soluong;
                    
                        // Cập nhật số lượng sản phẩm trong giỏ hàng (tùy chọn)
                        // update_cart($id_product, $soluong); // Thay $soluong bằng $quantity
                    }
                    
                  
                      

                }
                
            $list_cart = show_cart($id_user); 
            
            $_SESSION['cart'] = $cart = array_map(function ($quantity, $item) {
                    
                            return [
                                'id_product' => $item['id_product'],
                                'quantity' => $quantity,
                                'size' => $item['size'],
                                'price' => $item['price'],
                                'subtotal' => $quantity * $item['price'],
                            ];
                        }, $soluong_array, $list_cart); 
                        
                        $total = 0;
                        foreach ($cart as $item) {

                          $_SESSION['id_product'] = $item['id_product'] . "<br>"; 
                          $_SESSION['quantity'] = $item['quantity'] . "<br>";
                            $_SESSION['subtotal'] = $item['subtotal'] . "<br>";  
                         $total += $item['subtotal'];
                           
                        }
                        $_SESSION['total'] = $total;


        
                include 'cart.php';
                break;


        case 'delete_cart':
            $id_user = $_SESSION['dangnhap']['id_user'];
            if (isset($_GET['id_cart']) && $_GET['id_cart'] > 0) {
                delete_cart($_GET['id_cart']);
            }
            $list_cart = show_cart($id_user);
            include 'cart.php';
            break;
      
                        case 'thanhtoan':
                             
                            if(isset($_POST['dat_hang']) && ($_POST['dat_hang'])){
                                $total_bill = $_POST['total_bill'];
                                // $id_user = $_POST['id_user'];
                                $user_name = $_POST['user_name'];
                                $user_phone = $_POST['user_phone'];
                                $user_email = $_POST['user_email'];
                                $user_adress = $_POST['user_adress'];
                                $pttt = $_POST['pttt'];
                                $date = date('Y-m-d H:i');
                                $madh = "YODY".rand(0,999);
                                $status = "Đang xử lý";
                                
                            //   add_donhang($madh,$id_user,$user_name,$user_phone,$user_adress,$user_email,$pttt,$total_bil,$date,$status);

                         $id_order =  get_last_id_order($madh,$id_user,$user_name,$user_phone,$user_adress,$user_email,$pttt,$total_bill,$date,$status);
                                // update_cart_after_thanhtoan($id_user);
                                delete_after_thanhtoan($id_user);
                                $box_cart = $_SESSION['cart'];
                            // print_r($box_cart);
                               foreach($box_cart as $box_cart_items){
                                $size = $box_cart_items['size'];
                                $id_product = $box_cart_items['id_product'];
                                $quantity = $box_cart_items['quantity'];
                                add_history_muahang($id_product,$quantity,$id_order,$id_user,$size);
                            }


                          
                                echo "<script>alert('Cảm ơn quý khách đã đến với YODY'); window.location.href = ' ../view/index.php';</script>";
                    

                               
                            }
                        include 'thanhtoan.php';
                        break;

                        case 'lichsu_donhang':
                            if(isset($_GET['id_order']) && $_GET['id_order'] >0 ){
                                $id_order = $_GET['id_order'];
                                update_status_after_cancel_order($id_order);
                            }
                      
                            include 'lichsuadonhang.php';
                            break;

                            case 'chitietdonhang':
                                if(isset($_GET['id_order']) && $_GET['id_order'] >0 ){
                                  $id_order = $_GET['id_order'];
                                  $show_chitiet_donhang = show_chitiet_donhang($id_order);
                                  extract($show_chitiet_donhang);
                                } 

                                
                               
                                include 'chitietdonhang.php';
                                break;

               


        default:
            include 'slide_show.php';
            include 'trangchu.php';
            break;
    }
} else {
    include 'slide_show.php';
    include 'trangchu.php';
}

include 'footer.php';

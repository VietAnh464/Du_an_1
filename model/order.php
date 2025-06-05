<?php
function add_donhang($madh,$id_user,$user_name,$user_phone,$user_adress,$user_email,$pttt,$total_bil,$date,$status){
    $sql = "INSERT INTO `oder`(`madh`, `id_user`, `user_name`, `user_phone`, `user_adress`, `user_email`, `pttt`, `total_bill`, `date`, `status`) VALUES ('$madh','$id_user','$user_name','$user_phone','$user_adress','$user_email','$pttt','$total_bil','$date','$status')";

    pdo_execute($sql);
   
}

function show_all_order(){
    $sql = "SELECT * FROM `oder` JOIN `user` ON oder.id_user = user.id_user WHERE 1";
    return pdo_query($sql);
}
 function delete_order($id_order){
    $sql ="DELETE FROM `oder` WHERE id_order = ".$id_order;
    pdo_execute($sql);
 }
// lấy giá trị ID increment mới nhất
function get_last_id_order($madh,$id_user,$user_name,$user_phone,$user_adress,$user_email,$pttt,$total_bill,$date,$status){
    $sql = "INSERT INTO `oder`(`madh`, `id_user`, `user_name`, `user_phone`, `user_adress`, `user_email`, `pttt`, `total_bill`, `date`, `status`) VALUES ('$madh','$id_user','$user_name','$user_phone','$user_adress','$user_email','$pttt','$total_bill','$date','$status') ";
    return insert_get_last_id($sql);
}



function add_history_muahang($id_product,$soluong,$id_order,$id_user,$size){

$sql = "INSERT INTO `order_history`(`id_product`, `soluong`, `id_order`, `id_user`, `size`) VALUES ('$id_product','$soluong','$id_order','$id_user','$size')";

pdo_execute($sql);


};

function select_his_cart($id_order, $id_user)
{
    $sql = "SELECT * FROM order_history
    WHERE  `id_order` ='$id_order' AND `id_user` ='$id_user'";
    return pdo_query($sql);
}

/// Đặt hàng xong thì mất giỏ hàng 
// function update_cart_after_thanhtoan($id_user){
// $sql = " UPDATE `cart` SET `status` = '1' WHERE id_user =".$id_user;
// pdo_execute($sql);

// }
function update_status_after_cancel_order($id_order){
    $sql = " UPDATE `oder` SET `status` = 'Đã hủy' WHERE id_order =".$id_order;
    pdo_execute($sql);
    
    }
function update_trangthai_donhang_trong_ADMIN($id_order,$status){
    $sql  = "UPDATE `oder` SET `status` = '$status' WHERE id_order =".$id_order;
    pdo_execute($sql);
}
///  Đếm số lượng đơn theo trạng thái
function count_status($id_user)
{
    $sql = "SELECT
    COUNT(*) AS total_orders,
    COUNT(CASE WHEN `status` = 'Đang xử lý' THEN 1 END) AS total_starting_orders,
    COUNT(CASE WHEN `status` = 'Sẵn sàng giao' THEN 1 END) AS total_prepare_shipping,
    COUNT(CASE WHEN `status` = 'Đang giao' THEN 1 END) AS total_shipping_orders,
    COUNT(CASE WHEN `status` = 'Đã hủy' THEN 1 END) AS total_cancel,
    COUNT(CASE WHEN `status` = 'Hoàn thành' THEN 1 END) AS total_complete
    FROM oder
    WHERE `id_user` ='$id_user'";
    return pdo_query($sql);
}

function show_order_by_id_user($id_user){
    $sql = "SELECT * FROM `oder` WHERE `id_user`=".$id_user;
    return pdo_query($sql);
}

function show_chitiet_donhang($id_order){
    $sql =  "SELECT * FROM `oder` WHERE id_order = ".$id_order;
    return pdo_query_one($sql);
}

?>
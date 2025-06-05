<?php
function add_cart($id_user,$id_product,$soluong,$size){
    $sql = "INSERT INTO `cart`( `id_user`, `id_product`, `soluong`, `size`) VALUES ('$id_user','$id_product','$soluong','$size')";
    pdo_execute($sql);
}
function show_cart($id_user){
    $sql = "SELECT * FROM `cart` C
    JOIN `product` Pr ON C.id_product = Pr.id_product 
    WHERE C.id_user =".$id_user;
    // echo $sql;die;
    $list_cart = pdo_query($sql);
    return $list_cart;
}
function update_cart($id_product,$soluong,$id_user,$size){
       
    $sql = "UPDATE `cart` SET `soluong`= '$soluong' WHERE id_product= '$id_product'
    
     AND `id_user` = '$id_user' AND `size` = '$size'";
    
    pdo_execute($sql);
    // echo $sql;
    
}


function delete_cart($id_cart){
    $sql = "DELETE FROM `cart` WHERE id_cart=".$id_cart;
    pdo_execute($sql);
}
function check_product_in_cart($id_product,$id_user,$size)
{
    $sql = "SELECT * FROM `cart` WHERE `id_product` = '$id_product' AND `id_user` = '$id_user' AND `size` = '$size'";
    return pdo_query_value($sql) > 0;
}

function get_quantity_product_in_cart($id_user, $id_product , $size)
{
    $sql = "SELECT `soluong` FROM cart
            WHERE `id_user` = :id_user AND `id_product` = :id_product AND `size` = :size" ;

    return (bool) pdo_query_value($sql, [
        ':id_user' => $id_user,
        ':id_product' => $id_product,
        ':size' => $size,
    ]);
}
function delete_after_thanhtoan($id_user){
 $sql = "DELETE FROM `cart` WHERE id_user =".$id_user;
 pdo_execute($sql);
}


?>
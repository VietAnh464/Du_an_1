<?php
function show_all_product(){
    $sql = "SELECT * FROM `product` JOIN `category` ON product.id_category = category.id_category WHERE 1";
    $list_product = pdo_query($sql);
    return $list_product;
}
function show_all_sp_trangchu_Nam()
{
    $sql = "SELECT * FROM `product` JOIN `category` ON product.id_category = category.id_category WHERE product.name_product LIKE '%Nam%'";

    $sql .= " ORDER BY id_product DESC LIMIT 0,4";
    
    $list_product_trangchu =pdo_query($sql);
    return $list_product_trangchu;
}
function show_all_sp_trangchu_Tre_em()
{
    $sql = "SELECT * FROM `product` JOIN `category` ON product.id_category = category.id_category WHERE product.name_product LIKE '%Em%'";

    $sql .= " ORDER BY id_product DESC LIMIT 0,4";
    
    $list_product_trangchu =pdo_query($sql);
    return $list_product_trangchu;
}

function sanpham_theo_danhmuc($id_category)
{
    $sql = "SELECT * FROM product WHERE id_category=" .$id_category;
    return pdo_query($sql);
}

function show_san_pham_cung_loai($id_category){
    
    $sql = "SELECT * FROM product WHERE id_category =".$id_category;
    $sp = pdo_query($sql);
    return $sp;
}

function search_product($search){
 $sql = "SELECT * FROM product WHERE 1";

 if($search!=""){
   $sql .=" AND name_product LIKE '%".$search."%' "  ;
 }
 
 return pdo_query($sql);
}

function add_product($name_product,$price,$image,$description,$quantity,$id_category){
    $sql = "INSERT INTO `product`(`name_product`, `price`, `image`, `description`, `quantity`, `id_category`) VALUES ('$name_product','$price','$image','$description','$quantity','$id_category')";
    pdo_execute($sql);
}

function delete_product($id_product){
    $sql ="DELETE FROM `product` WHERE id_product=".$id_product;
    pdo_execute($sql);
}
function show_one_product($id_product){
    $sql ="SELECT * FROM `product` WHERE id_product=".$id_product;
    $list_one_product = pdo_query_one($sql);
    return $list_one_product;
}
function update_product($id_product,$name_product,$price,$image,$description,$quantity,$id_category){
    if($image!=""){
        $sql ="UPDATE `product` SET `name_product`='$name_product',`price`='$price',`image`='$image',`description`='$description',`quantity`='$quantity',`id_category`='$id_category' WHERE id_product=".$id_product;
    }else{
        $sql ="UPDATE `product` SET `name_product`='$name_product',`price`='$price',`description`='$description',`quantity`='$quantity',`id_category`='$id_category' WHERE id_product=".$id_product;
    }
    
    pdo_execute($sql);
}



?>
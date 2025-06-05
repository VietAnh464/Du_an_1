<?php
function show_comment(){
    $sql = "SELECT * FROM comment JOIN product ON comment.id_product = product.id_product JOIN user ON comment.id_user = user.id_user WHERE 1 ";

    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
    
}
function statistic_comment()
{
    $sql = "SELECT 
        P.id_product,
        P.name_product,
        COUNT(*) AS quantity,
        MIN(Comme.date) AS oldest_comment_date,
        MAX(Comme.date) AS newest_comment_date
    FROM comment Comme
    JOIN product P ON P.id_product = Comme.id_product
    GROUP BY P.id_product, P.name_product 
    HAVING quantity > 0";

    return pdo_query($sql);
}
/// Dùng để hiện ra comment ở trong chi tiết sản phẩm 
function show_comment_by_id_product($id_product){
  $sql = "SELECT * FROM `comment` JOIN `user` ON comment.id_user = user.id_user WHERE id_product=".$id_product;
 return pdo_query($sql);
}

// function show_comment_by_product($id_product){
//   $sql ="SELECT * FROM `comment` JOIN `user` ON comment.id_user = user.id_user JOIN `product` ON comment.id_product = product.id_product  WHERE id_product=".$id_product;
//   return pdo_query($sql);
// }
function comment_select_by_product($id_product)
{
    $sql = "SELECT C.*, P.name_product , Cl.user_name
          FROM comment C
          JOiN user Cl ON Cl.id_user = C.id_user
          JOIN product P ON C.id_product = P.id_product
          WHERE C.id_product = $id_product
          ORDER BY date DESC";
    return pdo_query($sql);
}
function add_comment($noi_dung,$id_product,$id_user,$date){
  $sql = "INSERT INTO `comment`(`noi_dung`, `id_product`, `id_user`, `date`) VALUES ('$noi_dung','$id_product','$id_user','$date')";
//  var_dump($sql);die;
  pdo_execute($sql);
}

function delete_comment($id_comment){
  $sql = "DELETE FROM `comment` WHERE id_comment=".$id_comment;
  pdo_execute($sql);
}


?>
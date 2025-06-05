<?php

function show_color(){
    $sql = "SELECT * FROM color WHERE 1";
    $color= pdo_query($sql);
    return $color;
}
function add_color($image_color){
    $sql = "INSERT INTO `color`(`image_color`) VALUES ('$image_color')";
    pdo_execute($sql);
}
function delete_color($id_color){
    $sql =  "DELETE FROM `color` WHERE id_color=".$id_color;
    pdo_execute($sql);
}
function show_one_color($id_color){
    $sql ="SELECT * FROM `color` WHERE id_color=".$id_color;
    $list_one_category = pdo_query_one($sql);
    return $list_one_category;
}

function update_color($image_color,$id_color){
    $sql = "UPDATE `color` SET `image_color`='$image_color' WHERE id_color=".$id_color;
    pdo_execute($sql);
}

?>
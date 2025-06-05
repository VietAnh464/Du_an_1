<?php

function show_size(){
    $sql = "SELECT * FROM `size` WHERE 1";
    $size= pdo_query($sql);
    return $size;
}
function delete_size($id_size){
    $sql = "DELETE FROM `size`WHERE id_size=".$id_size;
    pdo_execute($sql);
}

?>
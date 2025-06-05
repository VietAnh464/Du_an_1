<?php 
// function loadall_taikhoan(){
//     $sql ="SELECT * FROM user ORDER BY id_user DESC";
//     $list_taikhoan = pdo_query($sql);
//     return $list_taikhoan;
// }


function add_user($user_name,$password,$email,$phone){
    $sql = "INSERT INTO `user`(`user_name`, `password`, `email`, `phone`) VALUES ('$user_name','$password','$email','$phone')";
    pdo_execute($sql);
}
// function checkEmail($email){
//     $sql = "SELECT * FROM `user` WHERE email=".$email;
//     $check_email = pdo_query_one($sql);
//     return $check_email;
// }



function show_all_user(){
    $sql = "SELECT * FROM `user` WHERE 1";
    $all_user = pdo_query($sql);
    return $all_user;
}


function show_one_user($id_user){
    $sql = "SELECT * FROM `user` WHERE id_user=".$id_user;
    $one_user = pdo_query_one($sql);
    return $one_user;
}

function email_exist($email)
{
    $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
    return pdo_query_value($sql) > 0;
}
function check_taikhoan($email,$password){
    $sql = "SELECT * FROM `user` WHERE email = '".$email."' AND password = '".$password."'";
    $check_tk = pdo_query_one($sql);
    return $check_tk;
}
function check_email($email){
    $sql = "SELECT * FROM `user` WHERE email = '".$email."'";
    $check_tk = pdo_query_one($sql);
    return $check_tk;
}
function update_taikhoan($id_user,$user_name,$password,$email,$phone){
    $sql = "UPDATE `user` SET user_name='".$user_name."',password='".$password."',email='".$email."',phone='".$phone."' WHERE id_user=".$id_user;
    pdo_execute($sql);
}

function update_taikhoan_2($id_user,$user_name,$password,$email,$phone,$role){
    $sql = "UPDATE `user` SET user_name='".$user_name."',password='".$password."',email='".$email."',phone='".$phone."',role='".$role."' WHERE id_user=".$id_user;
    pdo_execute($sql);
}

function delete_taikhoan($id_user){
    $sql = "DELETE FROM `user` where id_user=".$id_user;
    pdo_execute($sql);
}
?>
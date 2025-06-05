<?php
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// truy vấn nhiều dữ liệu
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);

    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// truy vấn  1 dữ liệu
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function pdo_query_value($sql, $params = [])
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        $row = $stmt->fetch(PDO::FETCH_NUM); // Fetch numerically indexed row
        return $row ? $row[0] : null;
    } catch (PDOException $e) {
        throw new Exception("Failed to query value: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}


function pdo_check_data($sql, $params = [])
{
    try {
        // Call pdo_query_value and check if the result (number of rows) is greater than 0
        return pdo_query_value($sql, $params) > 0;
    } catch (PDOException $e) {
        throw new Exception("Failed to check data: " . $sql . " - Error: " . $e->getMessage());
    }
}

function insert_get_last_id($sql, $params =[]){
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $conn->lastInsertId();

    }catch (PDOException $e){
        throw new Exception("Failed to check data: " . $sql . " - Error: " . $e->getMessage());
    }finally{
        $conn = null;
    }
}

?>
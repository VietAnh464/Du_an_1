<?php 
function count_status_thongke()
{
    $sql = "SELECT
    COUNT(*) AS total_orders,
    COUNT(CASE WHEN `status` = 'Đang xử lý' THEN 1 END) AS total_starting_orders,
    COUNT(CASE WHEN `status` = 'Sẵn sàng giao' THEN 1 END) AS total_prepare_shipping,
    COUNT(CASE WHEN `status` = 'Đang giao' THEN 1 END) AS total_shipping_orders,
    COUNT(CASE WHEN `status` = 'Đã hủy' THEN 1 END) AS total_cancel,
    COUNT(CASE WHEN `status` = 'Hoàn thành' THEN 1 END) AS total_complete
    FROM oder";
    return pdo_query($sql);
}

function statistic_product()
{
    $sql = "SELECT H.*, P.*,CU.*,
    MIN(H.soluong) AS quantity_min,
    MAX(H.soluong) AS quantity_max
    FROM order_history H
    JOIN product P ON H.id_product = P.id_product
    JOIN user CU ON CU.id_user = H.id_user
    GROUP BY H.id_product";

    return pdo_query($sql);
}

function statistic_order()
{
    $sql = "SELECT O.*, H.*, CU.*,
    MIN(O.total_bill) AS price_min,
    MAX(O.total_bill) AS price_max,
   
    COUNT(*) AS order_count 
    FROM oder O
    JOIN order_history H ON H.id_order = O.id_order
    JOIN user CU ON CU.id_user = O.id_user
    WHERE O.status != 'Đã hủy'
    GROUP BY O.id_user";

    return pdo_query($sql);
}

?>
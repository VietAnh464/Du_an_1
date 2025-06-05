<style>
    h1.order_logo {
        text-align: center;
        margin-bottom: 30px;
        font-size: 40px;
        color: black;
    }

    #my-table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 2rem;
        border: none;
    }

    #my-table th.active {
        border-bottom: 2px solid yellow;

    }

    #my-table th,
    #my-table td {
        padding: 8px;
        text-align: center;
        color: black;
    }

    #my-table a {
        cursor: pointer;
    }

    #my-table a:hover {
        text-decoration: underline;
    }


    #my-table th {
        background-color: pink;
        font-weight: bold;
    }

    #my-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<div class="box_his container">
    <h1 class="order_logo">LỊCH SỬ MUA HÀNG</h1>

    <table id="my-table">
        <thead>
            <?php
           $box_state = count_status($id_user);

            foreach ($box_state as $bs) {
                extract($bs);
                // echo $total_orders;
                // echo $total_shipping_orders;
                // echo $total_prepare_shipping;
                echo '
                <tr>
                <th>' . $total_orders . '</th>
                <th>' . $total_starting_orders . '</th>
                <th>' . $total_prepare_shipping . '</th>
             
                <th>' . $total_shipping_orders . '</th>
                <th>' . $total_complete . '</th>
                <th>' . $total_cancel. '</th>
            </tr>
                ';
            }

            ?>

        </thead>
        <tbody>
            <tr>
                <th class="active">Tất cả đơn hàng</th>
                <th class="active">Đang xử lý</th>
                <th class="active">Sẵn sàng giao</th>
                <th class="active">Đang giao </th>
                <th class="active">Đã hoàn thành </th>
                <th class="active">Đơn đã hủy </th>
            </tr>
        </tbody>
    </table>
    <table id="my-table">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Thời gian đặt hàng </th>
                <th>Người nhận</th>
                <th>Tổng đơn hàng</th>
                <th>Tình trạng </th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
             $orders = show_order_by_id_user($id_user);

            foreach ($orders as $order) {
                extract($order);
                echo '
                <tr>
                <td>' . $madh . '</td>
                <td>' . $date . '</td>
                <td>' . $user_name . '</td>
                <td>' . $total_bill . 'đ</td>
                <td>' . $status . '</td>
                <td><a href="../view/index.php?act=chitietdonhang&id_order=' . $id_order . '"> Chi tiết đơn hàng </a>
                
                </td>
                <td><a onclick="return confirm(\'Bạn muốn hủy đơn hàng này ?\')" href="../view/index.php?act=lichsu_donhang&id_order=' . $id_order . '"> Hủy đơn hàng </a></td>

            </tr>
                ';
            }
            ?>



        </tbody>
    </table>

</div>
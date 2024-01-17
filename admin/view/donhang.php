<div class="container">
    <!-- <h2>ĐƠN HÀNG</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Hình thức thanh toán</th>
            <th>Tên người nhận</th>
            <th>Ngày đặt</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        <?php
        // var_dump($kq);
        if (isset($listDonHang) && (count($listDonHang) > 0)) {
            $i = 1;
            foreach ($listDonHang as $item) {
                extract($item);
                echo '
                    <tr>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['orderNumber'] . '</td>';
                switch ($payment) {
                    case '1':
                        $txtMessage = "Thanh toán khi nhận hàng";
                        break;
                    case '2':
                        $txtMessage = "Thanh toán ví MoMo";
                    default:
                        $txtMessage = "Chưa chọn hình thức thanh toán !";
                        break;
                }
                echo '<td>' . $txtMessage . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['date'] . '</td>
                        <td>' . $item['address'] . '</td>
                        <td>' . $item['phone'] . '</td>
                        <td>' . $item['totalOrder'] . '</td>
                        <td><a href="index.php"><i class="fa-solid fa-wrench"></i></a> | <a href="index.php"><i class="fa-solid fa-trash"></a></td>
                    </tr>
                ';
                $i++;
            }
        }
        ?>
    </table> -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">THÔNG TIN ĐƠN HÀNG</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>Mã đơn hàng</th>
                                <th>Hình thức thanh toán</th>
                                <th>Tên người nhận</th>
                                <th>Ngày đặt</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <!-- <th>Thành tiền</th> -->
                                <!-- <td>' . $item['totalOrder'] . '</td> -->
                            </thead>
                            <tbody>
                                <?php
                                // var_dump($kq);
                                if (isset($listDonHang) && (count($listDonHang) > 0)) {
                                    $i = 1;
                                    foreach ($listDonHang as $item) {
                                        extract($item);
                                        echo '
                    <tr class="alert" role="alert">
                        <td>' . $i . '</td>
                        <td>' . $item['orderNumber'] . '</td>';
                                        switch ($payment) {
                                            case '1':
                                                $txtMessage = "Thanh toán khi nhận hàng";
                                                break;
                                            case '2':
                                                $txtMessage = "Thanh toán ví MoMo";
                                            default:
                                                $txtMessage = "Chưa chọn hình thức thanh toán !";
                                                break;
                                        }
                                        echo '<td>' . $txtMessage . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['date'] . '</td>
                        <td>' . $item['address'] . '</td>
                        <td>' . $item['phone'] . '</td>

                    </tr>
                ';
                                        $i++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="wapper">
    <div class="container">
        <div class="row justify-content-around col-md-12 bg-light">
            <h1 style="color:#0099FF">ĐƠN HÀNG</h1>
            <?php
            // echo var_dump($_SESSION['cart']);
            if (isset($_SESSION['idOrder']) && ($_SESSION['idOrder'] > 0)) {
                $showCart = getShowCart($_SESSION['idOrder']);
                if (isset($showCart) && count($showCart) > 0) {
                    echo '
                        <table class="table">
                            <tr style="background-color:gray">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền ($)</th>
                            </tr>
                            ';
                    $i = 0;
                    $tong = 0;
                    foreach ($showCart as $item) {
                        $tt = (float) $item['quantity'] * (float) $item['price'];
                        $tong += $tt;
                        echo '
                                <tr style="background-color:gray">
                                    <td>' . ($i + 1) . '</td>
                                    <td>' . $item['nameProduct'] . '</td>
                                    <td><img src="./upload_img/' . $item['imgProduct'] . '" width="100px"></td>
                                    <td>' . $item['price'] . '</td>
                                    <td>' . $item['quantity'] . '</td>
                                    <td>' . $tt . '</td>
                                </tr>';
                        $i++;
                    }
                    echo '<tr>
                            <td colspan="5"><strong>Tổng đơn hàng</strong></td>
                            <td>' . $tong . '</td>
                            <td></td>
                        </tr>';
                    echo '</table>';
                }
            } else {
                echo "Đơn hàng rỗng!";
            }
            ?>
        </div>
    </div>
    <div class="container p-3">
        <div class="row justify-content-around col-md-12 bg-light">
            <h1 style="color:#0099FF">THÔNG TIN ĐƠN HÀNG</h1>
            <form action="index.php?pg=thanhtoan" method="POST">
                <?php
                if (isset($_SESSION['idOrder']) && ($_SESSION['idOrder'] > 0)) {
                    $orderInfo = getOrderInfo($_SESSION['idOrder']);
                    if (count($orderInfo) > 0) {
                        ?>
                        <h3>MÃ ĐƠN HÀNG:
                            <?= $orderInfo[0]['orderNumber'] ?>
                        </h3>
                        <table class="m-5 justify-content-around">
                            <tr>
                                <td><strong>Tên người nhận:</strong><br>
                                    <?= $orderInfo[0]['name'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Địa chỉ nhận hàng:</strong><br>
                                    <?= $orderInfo[0]['address'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Ngày đặt hàng:</strong><br>
                                    <?= $orderInfo[0]['date'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Số điện thoại nhận hàng:</strong><br>
                                    <?= $orderInfo[0]['phone'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Email:</strong><br>
                                    <?= $orderInfo[0]['email'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Phương thức thanh toán</strong><br>
                                    <?php
                                    switch ($orderInfo[0]['payment']) {
                                        case '1':
                                            $txtMessage = "Thanh toán khi nhận hàng";
                                            break;
                                        case '2':
                                            $txtMessage = "Thanh toán ví MoMo";
                                            break;
                                        default:
                                            $txtMessage = "Quý khách chưa chọn phương thức thanh toán";
                                            break;
                                    }
                                    echo $txtMessage;
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
            </form>
        </div>
    </div>
</div>
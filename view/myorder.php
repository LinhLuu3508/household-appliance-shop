<div id="wapper">
    <div class="container">
        <!-- DON HANG CUA TOI BAN CŨ -->
        <div class="row justify-content-around col-md-12 bg-light">
            <h1 style="color:#0099FF">ĐƠN HÀNG CỦA TÔI</h1>

            <?php
            echo '
                    <table class="table">
                    <tr style="background-color:gray">
                        <th>MÃ ĐƠN</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG</th>
                        <th>TỔNG GIÁ</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    ';
            if (is_array($listOrder)) {
                foreach ($listOrder as $item) {
                    extract($item);
                    $status_dh = get_status_order($item['status']);
                    $count_sp = count_sp($item['id']);
                    echo '
                                    <tr style="background-color:gray">
                                        <td>' . $item['orderNumber'] . '</td>
                                        <td>' . $item['date'] . '></td>
                                        <td>' . $count_sp . '</td>
                                        <td>' . $item['totalOrder'] . '</td>
                                        <td>' . $status_dh . '</td>
                                    </tr>';
                }
            }
            echo '</table>';
            ?>
        </div>

    </div>
</div>
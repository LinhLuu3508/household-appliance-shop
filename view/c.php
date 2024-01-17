<div id="wapper">
    <div class="container">
        <div class="row justify-content-around col-md-12 bg-light">
        <h1 style="color:#0099FF">GIỎ HÀNG</h1>
        <table class="table">
            <tr style="background-color:gray">
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền ($)</th>
                <th>Xoá khỏi giỏ hàng</th>
            </tr>
            <?php
            echo var_dump($_SESSION['cart']);
            ?>
            <!-- <tr>
                <td>1</td>
                <td><img src="images/1.jpg" alt=""></td>
                <td>Đồng hồ</td>
                <td>10</td>
                <td>
                    <div>10</div>
                </td>
            </tr> -->
            <!-- <tr>
                <th colspan="5">Tổng đơn hàng</th>
                <th>
                    <div>10</div>
                </th>
            </tr> -->
        </table>
        <div class="justify-content-center">
            <button class="btn btn-success">Đồng ý đặt hàng</button>
            <a href="cart.php?delcart=1"><button class="btn btn-danger">Xóa giỏ hàng</button></a>
            <a href="index.php"><button class="btn btn-primary">Tiếp tục đặt hàng</button></a>
        </div>
        </div>
    </div>
</div>
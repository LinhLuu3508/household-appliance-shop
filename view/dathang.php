<div id="wapper">
    <div class="container p-3">
        <div class="row justify-content-around col-md-12 bg-light">
            <h1 style="color:#0099FF">THÔNG TIN ĐẶT HÀNG</h1>
            <form action="index.php?pg=thanhtoan" class="col-md-6 bg-light p-3 my-3" method="POST">
                <input type="hidden" name="totalOrder" value="<?= $tong ?>">
                <div class="form-group py-2">
                    <label for="phone">Tên người nhận</label>
                    <input type="text" name="name" placeholder="Nhập họ và tên" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="fullname">Địa chỉ nhận hàng</label>
                    <!-- <input type="text" name="address" placeholder="Nhập địa chỉ" class="form-control"> -->
                    <textarea name="address" id="" cols="100%" rows="5" placeholder="Nhập địa chỉ"
                        class="form-control"></textarea>
                </div>
                <div class="form-group py-2">
                    <label for="username">Email</label>
                    <input type="email" name="email" placeholder="Nhập email" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="password">Số điện thoại nhận hàng</label>
                    <input type="text" name="phone" placeholder="Nhập số điện thoại" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="address">Phương thức thanh toán</label> <br>
                    <input type="radio" name="payment" value="1"> Thanh toán khi nhận hàng <br>
                    <input type="radio" name="vnpay" value="2"> Thanh toán VN Pay <br>
                    <input type="radio" name="momo" value="3"> Thanh toán ví MoMo <br>

                    <!-- <button type="button" name="vnpay" class="btn btn-warning">VN PAY</button><br>
                    <button type="button" name="momo" class="btn btn-success">MOMO</button> -->
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" name="thanhtoan" value="Thanh toán"
                        class="btn btn-primary btn btn-block mb-3 mt-3">
                </div>
            </form>
        </div>
    </div>
</div>
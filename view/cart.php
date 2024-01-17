<div id="wapper">
    <!-- GIO HANG MOI -->
    <div class="container">
        <section class="">
            <div class="headline">
                <h3>Giỏ hàng</h3>
            </div>
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- <h3 class="display-5 mb-2 text-center">Giỏ hàng</h3> -->
                    <p class="mb-5 text-center">
                        <!-- <i class="text-info font-weight-bold">3</i> sản phẩm được chọn</p> -->
                        <?php

                        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                            echo '
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:60%">Sản phẩm</th>
                            <th style="width:12%">Giá</th>
                            <th style="width:10%">Số lượng</th>
                            <th style="width:16%"></th>
                        </tr>
                    </thead>
                    ';
                            $i = 0;
                            $tong = 0;
                            foreach ($_SESSION['giohang'] as $item) {
                                $tt = (float) $item[3] * (float) $item[4];
                                $tong += $tt;
                                echo '
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                    <img src="./upload_img/' . $item[2] . '" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>' . $item[1] . '</h4>
                                        <p class="font-weight-light"></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">' . $item[3] . 'đ</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-lg text-center" value="' . $item[4] . '">
                            </td>
                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <!--<button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                         <i class="fas fa-sync"></i>
                                    </button>-->
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <a href="index.php?pg=delCart&i=' . $i . '"><i class="fas fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>';
                                $i++;
                            }
                            echo '</table>';
                            echo '
                <div class="float-right text-right">
                    <h4>Tổng tiền:</h4>
                    <h1>' . $tong . 'đ</h1>
                </div>';
                        }

                        ?>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="index.php?pg=dathang" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Thanh toán</a>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="index.php">
                        <button type="button" class="btn btn-secondary">&larr; Tiếp tục mua hàng</button></a>

                </div>
            </div>

        </section>
    </div>

    <!-- FORM THANH TOAN XAU -->
    <!-- <div class="container p-3">
    <div class="row justify-content-around col-md-12 bg-light">
        <h1 style="color:#0099FF">THÔNG TIN ĐẶT HÀNG</h1>
            <form action="index.php?pg=thanhtoan" method="POST">
                <input type="hidden" name="totalOrder" value="<?= $tong ?>">
                    <table class="m-5 justify-content-around">
                        <tr>
                            <td><input type="text" name="name" placeholder="Nhập họ và tên"></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
                        </tr>

                        <tr>
                            <td><input type="email" name="email" placeholder="Nhập email"></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="phone" placeholder="Số điện thoại"></td>
                        </tr>

                        <tr>
                            <td>Phương thức thanh toán <br>
                                <input type="radio" name="payment" value="1"> Thanh toán khi nhận hàng <br>
                                <input type="radio" name="payment" value="2"> Thanh toán ví MoMo <br>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="thanhtoan" value="Thanh toán" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
        </div>
    </div> -->
    <!--THONG TIN DAT HANG CŨ  -->
    <!-- <div class="container p-3">
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
                    <input type="radio" name="payment" value="2"> Thanh toán ví MoMo <br>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" name="thanhtoan" value="Thanh toán"
                        class="btn btn-primary btn btn-block mb-3 mt-3">
                </div>
            </form>
        </div>
    </div> -->
</div>
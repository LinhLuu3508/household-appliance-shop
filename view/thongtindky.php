<!-- TRANG HIEN THI THONG TIN TAI KHOAN -->
<div id="wapper">
    <div class="container">
        <div class="row justify-content-around">
            <form action="index.php?pg=taikhoan_update" class="col-md-6 bg-light p-3 my-3" method="POST">
                <div class="">
                    <h1 class="text-center text-uppercase h3 py-3" style="color:#0099FF">
                        Thông tin tài khoản <img src="view/layout/assets/img/logo_gia_dung.png" alt="" width="60"
                            height="60">
                    </h1>
                </div>
                <div class="form-group py-2">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" require
                        value="<?= $tkct[0]['fullname'] ?>">
                </div>
                <div class="form-group py-2">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="username" id="username" class="form-control" require
                        value="<?= $tkct[0]['username'] ?>">
                </div>
                <!-- <div class="form-group py-2">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" require value="<?= $tkct[0]['pass'] ?>"> 
                    </div> -->
                <!-- <div class="form-group py-2">
                        <label for="gender">Giới tính</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="male" value="male" class="form-check-input" checked>
                                <label for="male" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                                <label for="female" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                    </div> -->
                <div class="form-group py-2">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?= $tkct[0]['phone'] ?>">
                </div>
                <div class="form-group py-2">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="address" class="form-control"
                        value="<?= $tkct[0]['address'] ?>">
                </div>
                <div class="form-group py-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" require
                        value="<?= $tkct[0]['email'] ?>">
                </div>
                <div class="d-grid gap-2">
                    <input type="hidden" name="id" value="<?= $tkct[0]['id'] ?>">
                    <input type="submit" name="capnhat_tk" value="Cập nhật" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
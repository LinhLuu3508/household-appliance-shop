<div class="col- container sp-admin">
    <!-- <h2 style="color:#0099FF; justify-content:center">CẬP NHẬT TÀI KHOẢN</h2> -->
    <!-- <?php var_dump($tkct); ?> -->
    <!-- <form class="form-control" action="index.php?pg=taikhoan_update" method="post">
        <label class="form-label" for="">ID User</label>
        <input type="text" name="id" id="" value="<?= $tkct[0]['id'] ?>" class="form-control">
        <label class="form-label" for="">Họ và tên</label>
        <input type="text" name="fullname" id="" value="<?= $tkct[0]['fullname'] ?>" class="form-control">
        <br>
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username" id="" value="<?= $tkct[0]['username'] ?>" class="form-control">
        <br>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass" id="" value="<?= $tkct[0]['pass'] ?>" class="form-control">
        <br>
        <label for="">Số điện thoại</label>
        <input type="text" name="phone" id="" value="<?= $tkct[0]['phone'] ?>" class="form-control">
        <br>
        <label for="">Địa chỉ</label>
        <input type="text" name="address" id="" value="<?= $tkct[0]['address'] ?>" class="form-control">
        <br>
        <label for="">role</label>
        <input type="text" name="role" id="" value="<?= $tkct[0]['role'] ?>" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="" value="<?= $tkct[0]['email'] ?>" class="form-control">
        <br>
        <input type="hidden" name="id" value="<?= $tkct[0]['id'] ?>">
        <input type="submit" name="capnhat_tk" value="Cập nhật" class="btn btn-primary">
    </form> -->
    <section>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 col-md-8 ml-auto">
                    <div class="row align-items-center pt-md-5 mt-md-5 mb-5">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-title text-center mt-3">
                                    <h3>Cập nhật tài khoản</h3>
                                </div>
                                <div class="card-body">
                                    <form action="index.php?pg=taikhoan_update" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="productname">ID USER</label><br>
                                            <input type="text" name="id" class="form-control" id=""
                                                value="<?= $tkct[0]['id'] ?>">
                                            <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productname">Họ và tên</label><br>
                                            <input type="text" name="fullname" class="form-control" id=""
                                                value="<?= $tkct[0]['fullname'] ?>">
                                            <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productname">Tên đăng nhập</label>
                                            <input type="text" name="username" class="form-control" id=""
                                                value="<?= $tkct[0]['username'] ?>">
                                            <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productid">Mật khẩu</label>
                                            <input type="password" name="pass" class="form-control" id=""
                                                value="<?= $tkct[0]['pass'] ?>">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productprice">Số điện thoại</label>
                                            <input type="text" name="phone" class="form-control" id=""
                                                value="<?= $tkct[0]['phone'] ?>">
                                            <div class="invalid-feedback">Product Price Can't Be Empty</div>

                                        </div>
                                        <div class="form-group">
                                            <label for="productid">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address" id=""
                                                value="<?= $tkct[0]['address'] ?>">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productid">role</label>
                                            <input type="text" class="form-control" name="role" id=""
                                                value="<?= $tkct[0]['role'] ?>">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productid">Email</label>
                                            <input type="email" class="form-control" name="email" id=""
                                                value="<?= $tkct[0]['email'] ?>">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div>
                                        <input type="hidden" name="id" value="<?= $tkct[0]['id'] ?>">
                                        <input type="submit" name="capnhat_tk" value="Cập nhật" class="btn btn-primary"
                                            class="btn btn-dark mt-5 mx-auto d-block">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
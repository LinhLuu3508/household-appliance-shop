<div class="container">
    <!-- <h2>QUẢN LÝ TÀI KHOẢN</h2>
    <table>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Tên đăng nhập</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        <?php
        if (isset($listTaiKhoan) && (count($listTaiKhoan) > 0)) {
            $i = 1;
            foreach ($listTaiKhoan as $item) {
                echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $item['fullname'] . '</td>
                        <td>' . $item['username'] . '</td>
                        <td>' . $item['phone'] . '</td>
                        <td>' . $item['address'] . '</td>
                        <td>' . $item['email'] . '</td>
                        <td><a href="index.php?pg=updatetkform&id=' . $item['id'] . '"><i class="fa-solid fa-wrench"></i></a> | <a href="index.php?pg=delTaiKhoan&id=' . $item['id'] . '"><i class="fa-solid fa-trash"></a></td>
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
                    <h2 class="heading-section">THÔNG TIN TÀI KHOẢN</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Tên đăng nhập</th>
                                <!-- <th>Mật khẩu</th> -->
                                <!-- <th>Giới tính</th> -->
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <!-- <th>Email</th> -->
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                <?php
                                // echo var_dump($_SESSION['role']);
                                // var_dump($listTaiKhoan);
                                if (isset($listTaiKhoan) && (count($listTaiKhoan) > 0)) {
                                    $i = 1;
                                    foreach ($listTaiKhoan as $item) {
                                        echo '
                                    <tr class="alert" role="alert">
                                        <th scope="row">' . $i . '</th>
                                        <td>' . $item['fullname'] . '</td>
                                        <td>' . $item['username'] . '</td>
                                        <td>' . $item['phone'] . '</td>
                                        <td>' . $item['address'] . '</td>
                                        <td><a href="index.php?pg=updatetkform&id=' . $item['id'] . '"><button type="button" class="btn btn-warning">Sửa</button></a> 
                                            <a href="index.php?pg=delTaiKhoan&id=' . $item['id'] . '"><button type="button" class="btn btn-danger">Xóa</button></a></td>
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
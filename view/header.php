<?php
// var_dump($listTaiKhoan);
if (isset($listTaiKhoan) && (count($listTaiKhoan) > 0)) {
    foreach ($listTaiKhoan as $item) {
        $a = $item['id'];
        ;
    }
}
// echo var_dump($_SESSION['role']);
?>
<!--Header-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="view/layout/assets/img/logo_gia_dung.png" type="image/vnd.microsoft.icon">
    <title>Shop Gia Dụng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="view/layout/assets/css/header.css">
    <link rel="stylesheet" href="view/layout/assets/css/base.css">
    <link rel="stylesheet" href="view/layout/assets/css/footer.css">
    <link rel="stylesheet" href="view/layout/assets/css/products.css">
    <link rel="stylesheet" href="view/layout/assets/css/table.css">
    <link rel="stylesheet" href="view/layout/assets/css/productDettail.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="view/layout/assets/css/spdb.css">
    <!-- custom js file link  -->
    <script src="view/layout/assets/js/script1.js" defer></script>
    <link rel="stylesheet" href="view/layout/assets/css/myorder.css">
</head>

<body>
    <header>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-6 header_top_left">
                        <ul>
                            <li>
                                <!-- <i class="fa-solid fa-envelope" style="color: white;"> -->
                                ShopGiaDung@gmail.com
                            </li>
                            <li>
                                <!-- Miễn phí ship đơn từ 200.000đ -->
                                Liên hệ: 0123 456 789
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 header_top_right">
                        <ul>
                            <li>
                                Kết nối
                            </li>
                            <li>
                                <i class="fa-brands fa-facebook"></i>
                                <!-- <img src="view/layout/assets/img/svg/facebook.svg" alt="" width="15px" height="15px"> -->
                            </li>
                            <li>
                                <i class="fa-brands fa-instagram"></i>
                                <!-- <img src="view/layout/assets/img/svg/instagram.svg" alt="" width="15px" height="15px"> -->
                            </li>
                            <li>
                                <i class="fa-brands fa-linkedin"></i>
                                <!-- <img src="view/layout/assets/img/svg/linkedin.svg" alt="" width="15px" height="15px"> -->
                            </li>
                            <li>
                                <i class="fa-brands fa-twitter"></i>
                                <!-- <img src="view/layout/assets/img/svg/twitter.svg" alt="" width="15px" height="15px">   -->
                            </li>
                            <li>
                                |
                            </li>
                            <li>
                                <!-- My Order <a href="index.php?pg=myorder"></a> -->
                                Đơn hàng <a href="index.php?pg=thanhtoan"></a>
                            </li>
                            <li>
                                <!-- <a href="index.php?pg=myorder"><i class="fa-solid fa-bag-shopping"></i>Đơn hàng của tôi</a> -->
                                <!-- <a href="index.php?pg=myorder"><i class="fa-solid fa-bag-shopping"></i></a> -->
                                <a href="index.php?pg=thanhtoan"><i class="fa-solid fa-bag-shopping"></i></a>
                            </li>
                            <li>
                                <!-- <span>Đăng Nhập</span> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container">
            <div class="row">
                <div class="col-xl-1">
                    <div class="header_logo">
                        <img id="logo" src="view/layout/assets/img/logo_gia_dung.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <nav class="header_menu">
                        <ul id="main-menu">
                            <li><a href="index.php">TRANG CHỦ</a></li>
                            <li><a href="index.php?pg=product">SẢN PHẨM</a>

                                <!-- <ul class="sub-menu">
                                <li><a href="">Nồi Cơm</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Nắp rời</a></li>
                                        <li><a href="">Nắp gài</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Menu 2.2</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Menu 2.2.1</a></li>
                                        <li><a href="">Menu 2.2.2</a></li>
                                        <li><a href="">Menu 2.2.3</a></li>
                                        <li><a href="">Menu 2.2.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Menu 2.3</a></li>
                                <li><a href="">Menu 2.4</a></li>
                                <li><a href="">Menu 2.5</a></li>
                                <li><a href="">Menu 2.6</a></li>
                            </ul> -->
                            </li>
                            <li><a href="index.php?pg=cart">GIỎ HÀNG</a></li>
                            <li><a href="index.php?pg=gioithieu">GIỚI THIỆU</a></li>

                            <!-- <li><a href="index.php?pg=lienhe">Liên Hệ</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-5">
                    <div class="header_cart">
                        <div id="x1">
                            <div clas="header_cart_price">
                                <div class="form-outline">
                                    <form action="index.php?pg=product" method="post">
                                        <input type="search" name="key" class="form-control"
                                            placeholder="Sản phẩm cần tìm" />
                                        <!-- <input type="submit" name="timkiem" value="Tìm kiếm"> -->
                                    </form>
                                </div>
                                <!-- <input type="search" name="" id="" placeholder="Tìm kiếm..."> -->
                            </div>
                            <?php
                            if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                                echo '
                                <div class="login" style="list-style:none;">
                                    <strong><li><a href="index.php?pg=info&id=' . $_SESSION['id'] . '">' . $_SESSION['username'] . '</a></li></strong>
                                </div>
                                ';
                                echo '
                                <div class="login">
                                    <a href="index.php?pg=thoat"><i class="fa-solid fa-right-from-bracket"></i></a>
                                </div>';

                            } else {
                                ?>
                                <div class="login">
                                    <!-- <a href="index.php?pg=dangnhap"><button type="button" class="btn btn-primary">ĐĂNG NHẬP</button></a> -->
                                    <a href="index.php?pg=dangnhap"><i class="fa-solid fa-user"></i> Login</a>
                                    <!-- <a href="ex1.php"><i class="fa-solid fa-user"></i>    Login</a> -->
                                    <!-- <a href="./ex1.php"><i class="fa-solid fa-user"></i>Login2</a> -->
                                </div>
                                <!-- <div class="dangky">
                            <a href="index.php?pg=dangky"><button type="button" class="btn btn-primary">ĐĂNG KÝ</button></a>
                        </div> -->
                            <?php } ?>
                            <!-- <div>
                            <a href="index.php?pg=cart"><button class="btn"><i class="fa fa-cart-plus"></i></button></a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
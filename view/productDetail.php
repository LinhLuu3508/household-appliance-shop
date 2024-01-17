<!-- TRANG CHI TIET SAN PHAM -->
<!-- <?php
if (isset($kq) && count($kq) > 0) {
    echo $kq[0]['id'];
} else {
    echo "Sản phẩm chi tiết";
}
?> -->
<main role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container mt-4">
        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="card">
            <div class="container-fliud">
                <form name="" id="" method="post" action="index.php?pg=addcart">
                    <input type="hidden" name="id" value="<?= $kq[0]['id'] ?>">
                    <input type="hidden" name="name" value="<?= $kq[0]['name'] ?>">
                    <input type="hidden" name="price" value="<?= $kq[0]['price'] ?>">
                    <input type="hidden" name="img" value="<?= $kq[0]['img'] ?>">

                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane" id="pic-1">
                                    <img src="" alt="">
                                </div>
                                <div class="tab-pane" id="pic-2">
                                    <img src="" alt="">
                                </div>
                                <div class="tab-pane active" id="pic-3">
                                    <img src="./upload_img/<?= $kq[0]['img'] ?>" width="450px" height="450px">
                                </div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active">
                                    <a data-target="#pic-1" data-toggle="tab" class="active">
                                        <img src="" alt="">
                                    </a>
                                </li>
                                <li class="active">
                                    <a data-target="#pic-2" data-toggle="tab" class="active">
                                        <img src="" alt="">
                                    </a>
                                </li>
                                <li class="active">
                                    <a data-target="#pic-3" data-toggle="tab" class="active">
                                        <img src="" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">
                                <?= $kq[0]['name'] ?>
                            </h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">Lượt xem:
                                    <?= $kq[0]['view'] ?>
                                </span>
                            </div>
                            <!-- <p class="product-description">Mô tả: ...</p> -->
                            <small class="text-muted">Giá cũ: <s><span>
                                        <?= $kq[0]['price2'] ?>
                                    </span></s></small>
                            <h4 class="price">Giá hiện tại: <span>
                                    <?= $kq[0]['price'] ?> vnđ
                                </span></h4>
                            <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo <strong>Uy
                                    tín</strong>!</p>
                            <div class="form-group" id="conlai">
                                <!-- <label for="">Số lượng còn lại trong kho</label> -->
                                <!-- <input type="number" name="" id="conlai" min=1 max=50 width="30px" height="30px"> -->
                            </div>
                            <div class="form-group">
                                <label for="soluong">Số lượng đặt mua</label>
                                <input type="number" class="" id="soluong" name="soluong" min=1 max=50 width="30px"
                                    height="30px">
                            </div>
                            <div class="action">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn btn-primary">
                                <!-- <a class="like btn btn-default" href="#"><span class="fa fa-heart"></span></a> -->
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="container-fluid">
                <h3>THÔNG SỐ KỸ THUẬT</h3>
                <div class="row">
                    <div class="col">
                        <!-- <?php
                        foreach ($productlist as $item) {
                            extract($item);
                            switch ($idcatalog) {
                                case '1':
                                    $txtMessage = "Nồi cơm";
                                    break;
                                case '2':
                                    $txtMessage = "Bếp điện";
                                    break;
                                case '3':
                                    $txtMessage = "Bếp gas";
                                    break;
                                case '4':
                                    $txtMessage = "Chén";
                                    break;
                                case '5':
                                    $txtMessage = "Bếp từ";
                                    break;
                                case '6':
                                    $txtMessage = "Dũa";
                                    break;
                                default:
                                    $txtMessage = "không có loại sản phẩm phù hợp !";
                                    break;
                            }
                        }
                        echo '
                            <p>' . $txtMessage . '</p>
                        ';
                        ?> -->
                        <p>Thương hiệu <strong>
                                <?= $kq[0]['nhanhieu'] ?>
                            </strong></p>
                        <p>Năm sản xuất <strong>
                                <?= $kq[0]['namramat'] ?>
                            </strong></p>
                        <p>Nơi sản xuất <strong>
                                <?= $kq[0]['noisx'] ?>
                            </strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container-fluid">
                <h3>THÔNG TIN SẢN PHẨM</h3>
                <div class="row">
                    <div class="col">
                        <?= $kq[0]['chitiet'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <iframe src="comment.php?id=<?= $_GET['id'] ?>" width="100%" height="400px" frameborder="0"></iframe>
        </div>
    </div>
    <!-- End block content -->
</main>

<!-- Product Details Section Begin -->
<!-- <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img src="./upload_img/<?= $kq[0]['img'] ?>">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Vetgetable’s Package</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">$50.00</div>
                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                            vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                            quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                        suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                        vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                        accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                        pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                        et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                        vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                        porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                        sed sit amet dui. Proin eget tortor risus.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- Product Details Section End -->
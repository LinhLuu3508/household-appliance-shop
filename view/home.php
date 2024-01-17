<!-- Start HomePage -->
<!-- Banner -->
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="view/layout/assets/img/banner/banner 1.jpg" height="350" width="945"
                    class="d-block w-100 rounded border border = light"
                    alt="view/layout/assets/img/banner/banner 3.jpg">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="view/layout/assets/img/banner/banner 2.jpg" height="350" width="945" class="d-block w-100"
                    alt="view/layout/assets/img/banner/banner 2.jpg">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="view/layout/assets/img/banner/banner 3.jpg" height="350" width="945" class="d-block w-100"
                    alt="view/layout/assets/img/banner/banner 3.jpg">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- <img src="view/layout/assets/img/banner/blackFriday.gif" alt="" style="width: 100%;">    -->
<!-- End Banner -->
<!--KHUNG TIEU DE SP BAN CHAY-->
<div id="wrapper">
    <div class="headline">
        <h3>Sản phẩm bán chạy</h3>
    </div>
</div>
<!--SP BAN CHAY-->
<div class="container">
    <!-- <h3 class="title">Sản Phẩm Bán Chạy</h3> -->
    <div class="products-container">
        <?php
        foreach ($newproduct as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;

            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!-- HET SP BAN CHAY -->

<!--KHUNG TIEU DE NOI COM-->
<div id="wrapper">
    <div class="headline">
        <h3>Nồi cơm</h3>
    </div>
</div>
<!--Noi Com---->
<div class="container">
    <!-- <h3 class="title">Nồi cơm</h3> -->
    <div class="products-container">
        <?php
        foreach ($noicom as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;
            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!--HET NOI COM-->

<!--KHUNG TIEU DE BEP GAS-->
<div id="wrapper">
    <div class="headline">
        <h3>Bếp gas</h3>
    </div>
</div>
<!--BEP gas-->
<div class="container">
    <!-- <h3 class="title">Bếp gas</h3> -->
    <div class="products-container">
        <?php
        foreach ($bepgas as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;
            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!--HET BEP GAS-->
<!--KHUNG TIEU DE CHEN-->
<div id="wrapper">
    <div class="headline">
        <h3>Chén</h3>
    </div>
</div>
<!--CHEN-->
<div class="container">
    <!-- <h3 class="title">chén</h3> -->
    <div class="products-container">
        <?php
        foreach ($chen as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;
            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!--HET CHEN-->
<!--KHUNG TIEU DE Bếp điện-->
<div id="wrapper">
    <div class="headline">
        <h3>Bếp điện</h3>
    </div>
</div>
<!--BEP DIEN-->
<div class="container">
    <!-- <h3 class="title">Bếp điện</h3> -->
    <div class="products-container">
        <?php
        foreach ($bepdien as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;
            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!--HET BEP DIEN-->
<!--KHUNG TIEU DE DUA-->
<div id="wrapper">
    <div class="headline">
        <h3>Đũa</h3>
    </div>
</div>
<!--DUA-->
<div class="container">
    <!-- <h3 class="title">Đũa</h3> -->
    <div class="products-container">
        <?php
        foreach ($dua as $item) {
            extract($item);
            $linkdetail = "index.php?pg=productdetail&idproduct=" . $id;
            echo '
        <div class="product" data-name="p-1">
            <div class="product-item">
                <div>
                <a href="index.php?pg=productDetail&id=' . $id . '" class="product-thumb">
                    <img src="./upload_img/' . $img . '" alt="">
                </a>
                </div>
                <div class="product-info">
                    <h3 class="product-name">' . $name . '</h3>
                    <div class="product-price">' . $price . 'đ</div>
                    <form method="post" action="index.php?pg=addcart">
                        <input type="submit"  class="btn btn-success" name="addtocart" value="Thêm vào giỏ">
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="hidden" name="img" value="' . $img . '">
                    </form>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
</div>
<!--HET DUA-->
<!-- End HomePage -->
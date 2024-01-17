<div class="container">
    <?php
    $catalogs = '';
    foreach ($catalog_list as $item) {
        extract($item);
        $linkproduct = 'index.php?pg=product&idcatalog=' . $id;
        $catalogs .= '<li><a href="' . $linkproduct . '">' . $name . '</a></li>';
    }
    ?>
    <div class="col-md-3">
        <!-- Single Sidebar Start  -->
        <div class="common-sidebar-widget">
            <h3 class="sidebar-title">Danh mục sản phẩm</h3>
            <ul class="sidebar-list">
                <?= $catalogs ?>
            </ul>
        </div>
        <!-- Single Sidebar End  -->

        <!-- Single Sidebar Start  -->
        <div class="common-sidebar-widget">
            <div class="single-banner">
                <a href="#">
                    <!-- <img src="view/layout/assets/img/Dao.png" alt=""> -->
                </a>
            </div>
        </div>
        <!-- Single Sidebar End  -->
    </div>
    <!-- <h3 class="title">Sản Phẩm Bán Chạy</h3> -->
    <div class="products-container">
        <?php
        foreach ($productlist as $item) {
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
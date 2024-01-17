<div class="sp-admin container">
    <!-- <h2>CẬP NHẬT SẢN PHẨM</h2> -->
    <!-- <form action="index.php?pg=sanpham_update" method="post" enctype="multipart/form-data">
        <label for="">Danh mục sản phẩm</label>
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            $iddmcur = $spct[0]['idcatalog'];
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if ($dm['id'] == $iddmcur)
                        echo ' <option value="' . $dm['id'] . '" selected>' . $dm['name'] . '</option>';
                    else
                        echo ' <option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" id="" value="<?= $spct[0]['name'] ?>">
        <br>
        <label for="">Hình ảnh</label>
        <input type="file" name="img" id="">
        <img src="<?= $spct[0]['img'] ?>" alt="" width="80px">
        <?php
        if (isset($uploadOk) && ($uploadOk) == 0) {
            echo "<font color='red'><br>Yêu cầu chọn đúng file hình ảnh có định dạng .png .jpg hoặc jpeg !</font>";
        }
        ?>
        <br>
        <label for="">Giá</label>
        <input type="text" name="price" id="" value="<?= $spct[0]['price'] ?>">
        <br>
        <label for="">Chi tiết sp</label>
        <input type="text" name="chitiet" id="" value="<?= $spct[0]['chitiet'] ?>">
        <br>
        <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
    </form>
    <br> -->
    <!-- CAP NHAT SAN PHAM -->
    <section>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 col-md-8 ml-auto">
                    <div class="row align-items-center pt-md-5 mt-md-5 mb-5">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-title text-center mt-3">
                                    <h3>Cập nhật thông tin sản phẩm</h3>
                                </div>
                                <div class="card-body">
                                    <form action="index.php?pg=sanpham_update" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="productname">Danh mục sản phẩm:</label><br>
                                            <select name="iddm" id="">
                                                <option value="0">Chọn danh mục</option>
                                                <?php
                                                $iddmcur = $spct[0]['idcatalog'];
                                                if (isset($dsdm)) {
                                                    foreach ($dsdm as $dm) {
                                                        if ($dm['id'] == $iddmcur)
                                                            echo ' <option value="' . $dm['id'] . '" selected>' . $dm['name'] . '</option>';
                                                        else
                                                            echo ' <option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="productname">Product Name:</label>
                                            <input type="text" name="name" class="form-control" id="productname"
                                                value="<?= $spct[0]['name'] ?>">
                                            <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="productid">Product Id:</label>
                                            <input type="text" class="form-control" id="productid"
                                                placeholder="Enter Product Id">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="productprice">Product Price:</label>
                                            <input type="text" name="price" class="form-control" id="productprice"
                                                value="<?= $spct[0]['price'] ?>">
                                            <div class="invalid-feedback">Product Price Can't Be Empty</div>

                                        </div>
                                        <!-- CHI TIET DANG SAI -->
                                        <div class="form-group">
                                            <label for="productid">Chi tiết:</label>
                                            <input type="text" class="form-control" name="chitiet" id="productid"
                                                value="<?= $spct[0]['chitiet'] ?>" cols="100%" rows="5">
                                            <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                        </div>
                                        <p>Hình ảnh:</p>
                                        <div class="custom-file">
                                            <!-- <input type="file" name="img" class="custom-file-input" id="productimage"
                                                src="../upload_img/<?= $spct[0]['img'] ?>" required>
                                 

                                            <label class="custom-file-label" for="productimage">Choose
                                                file...</label>
                                            <div class="invalid-feedback">File Format Not Supported</div> -->
                                            <input type="file" name="img" id="">
                                        </div>
                                        <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">
                                        <input type="submit" name="capnhat" value="Cập nhật"
                                            class="btn btn-dark mt-5 mx-auto d-block">
                                        <!-- <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Add
                                            Product</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <table>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Chi tiết sp</th>
            <th scope="col">Thao tác</th>
        </tr>
        <?php
        // var_dump($dssp);
        if (isset($dssp) && (count($dssp) > 0)) {
            $i = 1;
            foreach ($dssp as $item) {
                echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $item['name'] . '</td>
                        <td><img src="../upload_img/' . $item['img'] . '" width="80px"></td>
                        <td>' . $item['price'] . '</td>
                        <td>' . $item['chitiet'] . '</td>
                        <td><a href="index.php?pg=updatespform&id=' . $item['id'] . '">Sửa</a> | <a href="index.php?pg=delSanPham&id=' . $item['id'] . '">Xóa</a></td>
                    </tr>
                ';
                $i++;
            }
        }
        ?>
    </table> -->
</div>
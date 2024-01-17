<div class=" container">
    <!-- <h2>SẢN PHẨM</h2> -->
    <!-- <form action="index.php?pg=sanpham_add" method="post" enctype="multipart/form-data">
        <label for="">Danh mục sản phẩm</label>
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    echo ' <option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
                }
            }
            ?>
        </select>

        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" id="">
       
        <label for="">Hình ảnh</label>
        <input type="file" name="img" id="">
        <?php
        if (isset($uploadOk) && ($uploadOk) == 0) {
            echo "<font color='red'><br>Yêu cầu chọn đúng file hình ảnh có định dạng .png .jpg hoặc jpeg !</font>";
        }
        ?>
       
        <label for="">Giá</label>
        <input type="text" name="price" id="">
        <br>
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br> -->
    <!-- <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Chi tiết sp</th>
            <th>Thao tác</th>
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
                        <td><a href="index.php?pg=themoisp"><i class="fa-solid fa-plus"></i></a> | <a href="index.php?pg=updatespform&id=' . $item['id'] . '"><i class="fa-solid fa-wrench"></i></a> | <a href="index.php?pg=delSanPham&id=' . $item['id'] . '"><i class="fa-solid fa-trash"></a></td>
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
                    <h2 class="heading-section">THÔNG TIN SẢN PHẨM</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <a href="index.php?pg=themoisp"><button type="button" class="btn btn-primary">
                                Thêm mới</button></a>
                        <table class="table">
                            <thead class="thead-dark">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Chi tiết sp</th>
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                <?php
                                // var_dump($dssp);
                                if (isset($dssp) && (count($dssp) > 0)) {
                                    $i = 1;
                                    foreach ($dssp as $item) {
                                        echo '
                                <tr class="alert" role="alert">
                                    <td>' . $i . '</td>
                                    <td>' . $item['name'] . '</td>
                                    <td><img src="../upload_img/' . $item['img'] . '" width="80px"></td>
                                    <td>' . $item['price'] . '</td>
                                    <td>' . $item['chitiet'] . '</td>
                                    <td><a href="index.php?pg=updatespform&id=' . $item['id'] . '"><button type="button" class="btn btn-warning">Sửa</button></a>
                                        <a href="index.php?pg=delSanPham&id=' . $item['id'] . '"><button type="button" class="btn btn-danger">Xóa</button></a></td>
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
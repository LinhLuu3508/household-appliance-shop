<div class="container">
    <!-- <h2>LOẠI SẢN PHẨM</h2> -->
    <!-- <form action="index.php?pg=adddm" method="post">
        <input type="text" name="tendanhmuc" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form> -->
    <!-- <h5 style="color:red"></h5> -->
    <!-- <table>
        <tr>
            <th>STT</th>
            <th>Tên loại sản phẩm</th>
            <th>Thao tác</th>
        </tr>
        <?php
        // var_dump($kq);
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $danhmuc) {
                echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $danhmuc['name'] . '</td>
                        <td><a href="index.php?pg=themoidm"><i class="fa-solid fa-plus"></i></a> | <a href="index.php?pg=updatedmform&id=' . $danhmuc['id'] . '"><i class="fa-solid fa-wrench"></i></a> | <a href="index.php?pg=delcatalog&id=' . $danhmuc['id'] . '"><i class="fa-solid fa-trash"></i></i></a></td>
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
                    <h2 class="heading-section">LOẠI SẢN PHẨM</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap"> <a href="index.php?pg=themoidm">
                            <button type="button" class="btn btn-primary">Thêm mới</button></a>
                        <table class="table">
                            <thead class="thead-dark">
                                <th>STT</th>
                                <th>Tên loại sản phẩm</th>
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                <?php
                                // var_dump($kq);
                                if (isset($kq) && (count($kq) > 0)) {
                                    $i = 1;
                                    foreach ($kq as $danhmuc) {
                                        echo '
                                    <tr class="alert" role="alert">
                                        <td>' . $i . '</td>
                                        <td>' . $danhmuc['name'] . '</td>
                                        <td><a href="index.php?pg=themoidm"></a>
                                        <a href="index.php?pg=updatedmform&id=' . $danhmuc['id'] . '"><button type="button" class="btn btn-warning">Sửa</button></a>
                                        <a href="index.php?pg=delcatalog&id=' . $danhmuc['id'] . '"><button type="button" class="btn btn-danger">Xóa</button></a></td>
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
<?php
session_start();
ob_start();
include "./model/connect.php";
include "./model/binhluan.php";
include "./model/product.php";
if (isset($_GET['id']) && ($_GET['id'])) {
    $id = $_GET['id'];
    $kq = getOneSanPham($id);
}
if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
    $user = $_SESSION['username'];
    if (isset($_POST['sentComment']) && ($_POST['sentComment'])) {
        $name = $_POST['name'];
        $idsp = $_POST['id'];
        $content = $_POST['content'];
        $idUser = $_SESSION['id'];
        $postdate = date('d-m-Y - H:i:sa');
        //date('d-m-Y - H:i:s');
        insertComment($name, $idUser, $idsp, $content, $postdate);
    }
    $dsbl = showCommnet();
    ?>
    <!-- <?php
    if (isset($kq) && count($kq) > 0) {
        echo $kq[0]['id'];
    } else {
        echo "Sản phẩm chi tiết";
    }
    ?> -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view/layout/assets/css/base.css">
        <title>Comment</title>
    </head>

    <body>
        <hr>
        <h3 id="danhgia">Đánh giá sản phẩm</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="hidden" name="name" id="" value="<?= $user ?>"><br>
            <input type="hidden" name="id" value="<?= $kq[0]['id'] ?>">
            <!-- <input type="text" name="id" value="<?= $_GET['id'] ?>"><br> -->
            <textarea name="content" id="" cols="100%" rows="3"></textarea><br>
            <input type="submit" value="Gửi" name="sentComment">
        </form>
        <hr>
        <?php
        // if(isset($kq) && count($kq) > 0){
        //     echo $kq[0]['id'];
        // }
        foreach ($dsbl as $bl) {
            echo '
                <h5>' . $bl['name'] . '</h5> <p>' . $bl['content'] . '</p>
            ';
            // echo $bl['name'].' - '.$bl['content']."<br>";
        }
        ?>
    </body>

    </html>
    <?php
} else {
    echo "<a href='index.php?pg=login' target='_parent'></a>Bạn vui lòng đăng nhập để bình luận!</a>";
}
?>
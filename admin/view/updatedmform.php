<div class="container">
    <h2>CẬP NHẬT DANH MỤC</h2>
    <form action="index.php?pg=update_dm" method="post">
        <?php
        //echo var_dump($detail);
        // extract($detail);
        if (isset($detail)) {
            foreach ($detail as $item) {
                echo '    <input type="hidden" name="id" value="' . $item['id'] . '">
                    <input type="text" name="tendanhmuc" id="" value="' . $item['name'] . '">
                    <input type="submit" name="sua" value="Cập nhật">';
            }
        }
        ?>
    </form>
</div>
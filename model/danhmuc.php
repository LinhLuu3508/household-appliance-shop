<?php
function themdm($tendanhmuc)
{
    $conn = connectdb();
    $sql = "INSERT INTO catalog (name) VALUES ('" . $tendanhmuc . "')";
    $conn->exec($sql);
}
function updatedm($id, $tendanhmuc)
{
    $conn = connectdb();
    $sql = "UPDATE catalog SET name='" . $tendanhmuc . "' WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getOneDanhMuc($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM catalog WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function delCatalog($id)
{
    $conn = connectdb();
    //Kiem tra id nay co khoa ngoai
    $checkid = check_catalog($id);
    if ($checkid > 0) {
        $tb = "Đây là khóa ngoại không được xóa!";
    } else {
        $sql = "DELETE FROM catalog WHERE id=" . $id;
        $conn->exec($sql);

        $tb = "Xóa thành công";
    }
    return $tb;
}
function getAllDanhMuc()
{
    $conn = connectdb();
    $sql = "SELECT * FROM catalog";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>
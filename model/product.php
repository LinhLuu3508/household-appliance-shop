<?php
function getProduct($key, $idcatalog)
{
    $sql = "SELECT * FROM product where 1";
    if ($key != "") {
        $sql .= " and name like '%" . $key . "%'";
    }
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getProduct2($idcatalog)
{
    $sql = "SELECT * FROM product where 1";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getNewProduct($idcatalog)
{
    $sql = "SELECT * FROM product WHERE new=1";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getNoiCom($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=1";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getBepgas($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=3";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getChen($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=4";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getDua($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=6";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getBepdien($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=2";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_All($sql);
}
function getSaleProduct()
{
    $sql = "SELECT * FROM product WHERE promotion>0 ORDER BY promotion DESC";
    return get_All($sql);
}
function getViewProduct()
{
    $sql = "SELECT * FROM product WHERE view>0 ORDER BY view DESC";
    return get_All($sql);
}
// GET ONE
function getDetailProduct($idproduct)
{
    $sql = "SELECT * FROM product WHERE id=" . $idproduct;
    return get_One($sql);
}
function getIdcatalog($idproduct)
{
    $sql = "SELECT idcatalog FROM product WHERE id=" . $idproduct;
    $getone = get_One($sql);
    extract($getone);
    return $idcatalog;
}
function getAllSanPham()
{
    $conn = connectdb();
    $sql = "SELECT * FROM product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function insertSanPham($tensp, $img, $price, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO product (name,img,price,idcatalog) VALUES ('" . $tensp . "','" . $img . "','" . $price . "','" . $iddm . "')";
    $conn->exec($sql);
}
function getOneSanPham($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM product WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function updatesp($id, $tensp, $price, $img, $chitiet, $iddm)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE product SET name='" . $tensp . "', price='" . $price . "', chitiet='" . $chitiet . "', idcatalog='" . $iddm . "' WHERE id=" . $id;
    } else {
        $sql = "UPDATE product SET name='" . $tensp . "', price='" . $price . "', img='" . $img . "', chitiet='" . $chitiet . "', idcatalog='" . $iddm . "' WHERE id=" . $id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function delSp($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM product WHERE id=" . $id;
    $conn->exec($sql);
}
function getImg($id)
{
    $conn = connectdb();
    $sql = "SELECT img FROM product WHERE id=" . $id;
    $detail = get_One($sql);
    // extract($detail);
    return $detail['img'];
}
//CHECK XEM CO KHOA NGOAI HAY KHONG 
function check_catalog($idcatalog)
{
    $sql = "SELECT * FROM product WHERE idcatalog=" . $idcatalog;
    $prolist = get_All($sql);
    return count($prolist);
}
?>
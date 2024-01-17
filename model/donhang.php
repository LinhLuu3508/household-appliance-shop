<?php 
function loadAll_DonHang(){
    $conn = connectdb();
    $sql="SELECT * FROM tbl_order ORDER BY id ";
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>
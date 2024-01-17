<?php
function loadAll_TaiKhoan()
{
    $conn = connectdb();
    $sql = "SELECT * FROM user ORDER BY id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getOneTaiKhoan($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM user WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function updateTK($id, $fullname, $username, $pass, $phone, $address, $role, $email)
{
    $conn = connectdb();
    $sql = "UPDATE user SET fullname='" . $fullname . "', username='" . $username . "', pass=md5('" . $pass . "'), phone='" . $phone . "', address='" . $address . "', role='" . $role . "', email='" . $email . "'  WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function updateTKND($id, $fullname, $username, $pass, $phone, $address, $email)
{
    $conn = connectdb();
    $sql = "UPDATE user SET fullname='" . $fullname . "', username='" . $username . "', pass='" . $pass . "', phone='" . $phone . "', address='" . $address . "', email='" . $email . "'  WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function delTK($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM user WHERE id=" . $id;
    $conn->exec($sql);
    $conn = null;
}
function dangky($username, $fullname, $pass, $phone, $address, $email)
{
    $conn = connectdb();
    $sql = "INSERT INTO user (fullname,username,pass,phone,address,email) VALUES ('" . $fullname . "','" . $username . "',md5('" . $pass . "'),'" . $phone . "','" . $address . "','" . $email . "')";
    $conn->exec($sql);

}
// function getidUser($id){
//     $conn = connectdb();
//     $sql="SELECT id FROM user WHERE id=".$id .="ORDER BY id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt -> execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
?>
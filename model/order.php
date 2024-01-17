<?php
    function taodonhang($idUser,$orderNumber,$totalOrder,$date,$payment,$name,$address,$email,$phone){
        $conn = connectdb();
        $sql ="INSERT INTO tbl_order (orderNumber,totalOrder,date,payment,idUser,name,address,email,phone) 
        VALUES ('".$orderNumber."','".$totalOrder."','".$date."','".$payment."','".$idUser."','".$name."','".$address."','".$email."','".$phone."')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    function addtocart($idOrder,$idProduct,$nameProduct,$imgProduct,$price,$quantity){
        $conn = connectdb();
        $sql ="INSERT INTO cart (idOrder,idProduct,nameProduct,imgProduct,price,quantity)
        VALUES ('".$idOrder."','".$idProduct."','".$nameProduct."','".$imgProduct."','".$price."','".$quantity."')";
        $conn->exec($sql);
    }
    function getShowCart($idOrder){
        $conn = connectdb();
        $sql = "SELECT * FROM cart WHERE idOrder=".$idOrder;
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getOrderInfo($idOrder){
        $conn = connectdb();
        $sql = "SELECT * FROM tbl_order WHERE id=".$idOrder;
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function get_status_order($n){
        switch ($n) {
            case '0':
                $order_status="Đơn hàng mới";
                break;
            case '1':
                $order_status="Đang xử lý";
                break;
            case '2':
                $order_status="Đang giao hàng";
                break;
            case '3':
                $order_status="Đã giao hàng";
                break;
            default:
                $order_status="Đơn hàng mới";
                break;
        }
        return $order_status;
    }
    function loadAll_DonHang($idUser){
        $conn = connectdb();
        $sql = "SELECT * FROM tbl_order WHERE idUser=".$idUser;
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listOrder = $stmt->fetchAll();
        return $listOrder;
    }
    function count_sp($idOrder){
        $conn = connectdb();
        $sql = "SELECT * FROM cart WHERE idOrder=".$idOrder;
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listOrder = $stmt->fetchAll();
        return sizeof($listOrder);
    }
?>
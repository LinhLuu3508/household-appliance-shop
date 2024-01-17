<?php
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=household-appliance-shop", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

//Function - Tong hop tat ca dong code thuc hien cau lenh sql tra ve 1 mang - mang tat ca
    function get_All($sql){
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arrproduct = $stmt->fetchAll();
        $conn="null";
        return $arrproduct; 
    }
    function get_One($sql){
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arrproduct = $stmt->fetch();
        $conn="null";
        return $arrproduct; 
    }
?>
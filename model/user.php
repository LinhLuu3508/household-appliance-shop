<?php
    function checkUser($user, $pass){
        $conn=connectdb();
        $sql="SELECT * FROM user WHERE username='".$user."' AND pass='".$pass."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['role'];
        else return 0;
    }
    function getUserInfo($user, $pass){
        $conn=connectdb();
        $sql="SELECT * FROM user WHERE username='".$user."' AND pass='".$pass."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>
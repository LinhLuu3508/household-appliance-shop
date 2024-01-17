<?php
    function insertComment($name,$idUser,$idsp,$content,$postdate){
        $conn = connectdb();
        $sql ="INSERT INTO comment (name,iduser,idsp,content,postdate) VALUES ('".$name."','".$idUser."','".$idsp."','".$content."','".$postdate."')";
        $conn->exec($sql);
    }
    function showCommnet(){
        $conn = connectdb();
        $sql="SELECT * FROM comment order by id desc";
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>
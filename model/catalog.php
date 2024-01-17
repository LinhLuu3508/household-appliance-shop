<?php
    function getCatalog(){
    $sql="SELECT * FROM catalog ORDER BY name DESC";
    return get_All($sql);
    }
?>
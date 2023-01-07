<?php
    require "connect.php";
    function user_all(){
        $sql = "SELECT * FROM them";
        return pdo_query($sql);
    }

?>
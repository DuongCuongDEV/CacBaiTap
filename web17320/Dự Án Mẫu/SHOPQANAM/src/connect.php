<?php

   function pdo_get_connect(){
        $conn = new PDO(
            "mysql:host=localhost;dbname=xxshop;charset = utf8",
            "root",
            "");
        // thiết lập lỗi PDO thành ngoại lệ
        return $conn;
        }

function pdo_execute($sql){
    $conn = pdo_get_connect();
    $input = array_slice(func_get_args(),1);
    $stmt = $conn->prepare($sql);
    $stmt->execute($input);
    echo "Connected successfully";
}

function pdo_query($sql){
    $conn = pdo_get_connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function pdo_query_one($sql){
    $conn = pdo_get_connect();
    $input = array_slice(func_get_args(),1);
    $stmt = $conn->prepare($sql);
    $stmt->execute($input);
    return $stmt->fetch();
}

function pdo_query_value($sql){
    $conn = pdo_get_connect();
    $stmt = $conn->prepare($sql);
    $input = array_slice(func_get_args(),1);
    $stmt->execute($input);
    $row = $stmt->fetch();
    return array_values($row)[0];
}

?>
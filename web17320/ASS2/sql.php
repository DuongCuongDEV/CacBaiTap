<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password); // thiết lập lỗi PDO thành ngoại lệ  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //Câu truy vấn tạo cơ sở dữ liệu
    // $sql = "CREATE DATABASE QUANLYSINHVIEN";

    // // Thực thi câu truy vấn
    // $conn->exec($sql);

    // //Thông báo thành công
    // echo "Tạo database thành công";
    // echo $msql = "INSERT INTO student VALUES(null,'$name','$age','$anh','$mota')";

    $conn = new PDO("mysql:host=$servername;dbname=QUANLYSINHVIEN", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Tạo bảng;
    $sql = "CREATE TABLE student (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT , 
        name VARCHAR(255) NULL DEFAULT NULL , 
        age INT(11) NULL DEFAULT NULL , 
        avatar VARCHAR(255) NULL DEFAULT NULL ,
        description TEXT NULL DEFAULT NULL ,
        created_at TIMESTAMP NULL DEFAULT NULL,
        PRIMARY KEY (id)) ENGINE = InnoDB;";
    $conn->exec($sql);
}
catch (PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage();
    
}
?>
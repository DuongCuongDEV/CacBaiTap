<?php
    require "connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM sach2 WHERE book_id = '$id' ";
    $conn->exec($sql);
    header("location: vie.php");
?>
<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM user where id='$id'";
    $conn->exec($sql);
    header('location:view_user.php');
?>
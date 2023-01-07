<?php
    require 'create.php';
    $id=$_GET['id'];
    $sql="DELETE FROM student where id='$id'";
    $conn->exec($sql);
    header('location:index.php');
    // echo $sql;
    // die();
?>
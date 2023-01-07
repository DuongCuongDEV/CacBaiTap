<?php
    require "connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM rooms WHERE room_id = '$id'";
    $conn->exec($sql);
    header("location: vie.php");
 ?>
<?php
    include ('../../connect/connect.php');
    $index = 1;
    $search = $_GET['search'];
    $sql = $conn->prepare("SELECT * FROM tblcauhoi WHERE question LIKE '%".$search."%' ORDER BY id DESC");
    $sql->execute();
    $count = $sql->rowCount();
    $pages = $count%30==0?$count/30:floor($count/30)+1;
    echo json_encode($pages, JSON_UNESCAPED_UNICODE);
?>
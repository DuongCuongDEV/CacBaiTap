<?php
include ('../../connect/connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tblcauhoi WHERE id = '".$id."'";
$rs = $conn->prepare($sql);
$rs->execute();
$result = $rs->fetch();
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
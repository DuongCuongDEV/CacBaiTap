<?php
include ('../../connect/connect.php');
// $id = $_GET['id'];
$sql = "SELECT maMon, tenMon FROM tblmonthi";
$rs = $conn->prepare($sql);
$rs->execute();
$select = '<option value="">Nhập môn tương ứng</option>';
while ($result = $rs->fetch(PDO::FETCH_ASSOC)) {
    $select.= '<option value="'.$result['maMon'].'">'.$result['tenMon'].'</option>';
}
echo $select;

?>
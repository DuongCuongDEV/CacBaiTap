<?php
include ('../../connect/connect.php');
$id = $_POST['id'];
try{
$maMon = $_POST['maMon'];
$question = $_POST['question'];
$optionA = $_POST['optionA'];
$optionB = $_POST['optionB'];
$optionC = $_POST['optionC'];
$optionD = $_POST['optionD'];
$answer = $_POST['answer'];

$sql = "UPDATE tblcauhoi SET maMon = '".$maMon."', question = '".$question."', option_a = '".$optionA."', option_b = '".$optionB."', option_c = '".$optionC."', option_d = '".$optionD."', answer = '".$answer."' WHERE id = '".$id."'";
    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật dữ liệu thành công";
      } else {
        echo "Bạn bị lỗi rồi";
    }
} catch (Exception $e){
    echo "Lỗi cập nhật: " .$e;
}
?>
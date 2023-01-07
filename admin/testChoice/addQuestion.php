<?php
try {
    include ('../../connect/connect.php');
    $maMon = $_POST['maMon'];
    $question = $_POST['question'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $answer = $_POST['answer'];

    $sql = "INSERT INTO tblcauhoi(maMon, question, option_a, option_b, option_c, option_d, answer) VALUES ('$maMon','$question', '$optionA', '$optionB', '$optionC', '$optionD', '$answer')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm dữ liệu thành công";
      } else {
        echo "Bạn bị lỗi rồi";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}

?>
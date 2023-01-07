<?php
include ('../../connect/connect.php');
try{
    $id = $_POST['id'];

    $sql = "DELETE FROM tblcauhoi WHERE id = '".$id."'";
        if ($conn->query($sql) == TRUE) {
            echo "Xóa dữ liệu thành công";
        } else {
            echo "Bạn bị lỗi rồi";
        }
    } catch (Exception $e){
        echo "Lỗi: " .$e;
    }
?>
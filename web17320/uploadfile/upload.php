<?php
    echo "<pre>";
    echo print_r($_FILES);
    echo "</pre>";

    if(!isset($_FILES["fileupload"])){
        echo "không tồn tại file upload";
        die();
    }
    //kiểm tra file ảnh tải lên có bị lỗi không.
    if($_FILES["fileupload"]["error"] != 0){
        echo "dữ liệu upload bị lỗi";
        die();
    }
    //tạo đường dẫn tên folder;
    $targer_dir="upload/";
    // Tạo đường dẫn để dẫn ảnh vào folder upload;
    $targer_file = $targer_dir.$_FILES["fileupload"]["name"];
    //
    $allowupload = true;
    //hàm lấy ra phần mở rộng sau dấu chấm của file vd như png,jpg;
    $imageFile = pathinfo($targer_file,PATHINFO_EXTENSION);
    // echo $imageFile;
    //kích cỡ lớn nhất quy định được phép upload 80000;
    $maxfilesize = 80000;
    //mảng quy định những đuôi file đc phép upload;
    $allowType=['jpg','png','jpeg','gif'];

    if(isset($_POST["btn_submit"])){
    //check xem có phải là ảnh không sử dụng hàm getimagessize;
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    //nếu đúng là ảnh check sẽ là true sai thì ngc lại
    if($check==true){
        echo "đây là file ảnh";
    }else{
        echo "đây không phải là file ảnh";
        $allowupload = false;
    }
    //ktra nếu tên ảnh đã tồn tại thì không cho upload tiếp;
    if(file_exists($targer_file)){
        echo "file đã tồn tại trên sever không đc ghi đè";
        $allowupload = false;
    }
    //ktra kích thước file upload không vượt quá giới hạn
    if($_FILES["fileupload"]["size"] > $maxfilesize){
        echo "vượt quá kích thước cho phép";
        $allowupload = false;
    }
    if(!in_array($imageFile,$allowType)){
        echo "Đuôi không hợp lệ";
        $allowupload = false;
    }
    if($allowupload==true){
        // xử lý di chuyển file vào trong thư mục upload;
        if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$targer_file)){
            echo "upload file thành công tại".$targer_file;
        }
    }
}
?>
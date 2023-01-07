<?php
    require "sql.php";
    if(isset($_POST["sv"])){
        $name = $_POST["name"];
        $age = $_POST["tuoi"];
        $anh = $_FILES["anh"]['name'];
        $mota = $_POST["mo_ta"];
        if (empty($name)){
            $erors['ten_empty']='Mời bạn nhập tên vào';
        }
        if (empty($tuoi)){
            $erors['age_empty']='Mời bạn nhập tuổi vào';
        }
        // $image =  $_FILES['image']['name'];
        // $image_tmp = $_FILES['image']['tmp_name'];
        $sql = "INSERT INTO student VALUES(null,'$name','$age','$anh','$mota',current_timestamp())";
        $conn -> exec($sql);
        echo "Thêm sinh viên thành công";
        // echo $msql;
        // die;
        if(!isset($_FILES["anh"])){
            echo "không tồn tại file upload";
            die();
        }
        //kiểm tra file ảnh tải lên có bị lỗi không.
        if($_FILES["anh"]["error"] != 0){
            echo "dữ liệu upload bị lỗi";
            die();
        }
        $targer_dir="img/";
        // Tạo đường dẫn để dẫn ảnh vào folder upload;
        $targer_file = $targer_dir.$_FILES["anh"]["name"];
        // echo $targer_file;
        // die();
        // mảng quy định những đuôi file đc phép upload;
        $allowType=['jpg','png','jpeg','gif'];
        $allowupload = true;
        //ktra đuôi ảnh có hợp lệ không
        if($_FILES['anh']['name']!=""){
            $imageFile = pathinfo($targer_file,PATHINFO_EXTENSION);
            if(!in_array($imageFile,$allowType)){
                $allowupload = false;  
                echo "Chỉ được upload file có định dạng jpg,png,jpeg,gif <br>";
            }
        }
        if($allowupload==true){
            // xử lý di chuyển file vào trong thư mục upload;
            if(move_uploaded_file($_FILES["anh"]["tmp_name"],$targer_file)){
                // echo "upload file thành công tại".$targer_file;
            }
        }
        if(!isset($errors)){
            if($allowupload==true){
                if(move_uploaded_file($_FILES['anh']['tmp_name'],$targer_file)){
            }
        }
    }
        if (!$erors){
            $sql="INSERT INTO students values (null,'$name','$tuoi','$anh','$mota',current_timestamp())";
            $conn->exec($sql);
            header("location:index.php");
        }
    }
    // if (isset($_POST['rs'])){
    //     $_POST['name']=="";
    //     $_POST['age']='';
    //     $_FILES['anh']['name']='';
    //     $_POST['mo_ta']='';
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Họ tên: <input type="text" name="name" id="" value=""> <br>
        Tuổi: <input type="text" name="tuoi" value="" id=""> <br>
        Ảnh đại diện: <input type="file"  name="anh" value="" id=""> <br>
        Mô tả sinh viên: <br> <textarea name="mo_ta" id="" cols="30" rows="3"></textarea> <br>
        <input type="submit" value="SAVE" name="sv" id="">
        <input type="submit" value="Reset" name="rs" id="">
    </form>
</body>
</html>
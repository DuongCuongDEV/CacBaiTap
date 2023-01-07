<?php
    require "connect.php";
    //tạo ra 1 mảng chứa lỗi;
    $eror = [];
    if(isset($_POST['btn-submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $img = $_FILES['anh']['name'];
        $trang_thai = $_POST["trang_thai"];
     
        if(empty($name)){
            $eror['name_empty'] = "Mời nhập vào tên"; 
        }
        if(empty($email)){
            $eror['email_empty'] = "mời bạn nhập vào email";
        }
        //ktra ảnh
        if(isset($_FILES['anh'])){
            $allowupload = true;
            //tạo đường dẫn ảnh
            $dan = "img/";
            //tạo đường dẫn để upload ảnh vào đường dẫn ảnh
            $taget_file = $dan.$_FILES['anh']['name'];
            //tạo định dạng cho ảnh
            $allowType=['jpg','png','jpeg','gif'];
            //ktra đuôi ảnh
            $imageFile = pathinfo($taget_file,PATHINFO_EXTENSION);
            if(!in_array($imageFile,$allowType)){
                $allowupload = false;
                $eror['anh_type']="chỉ đc upload các file ảnh có định dạng đã định sẵn";
            };
            //chuyển hình ảnh vào trong thư mục
            if($allowupload==true){
                move_uploaded_file($_FILES["anh"]["tmp_name"],$taget_file);
            }
        }
        if(!$eror){
        $img = $_FILES['anh']['name'];
            $sql = "INSERT INTO user VALUES(null,'$name','$email','$trang_thai','$img')";  
            $conn -> exec($sql);
            echo "thêm người dùng thành công";
            header("location:view_user.php");
         }
    }   
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
        Name <input type="text" name="name" id="" value=""> <?php echo isset($eror['name_empty']) ? $eror['name_empty'] : ""; ?> <br>
        Email<input type="email" name="email" value="" id=""> <?php echo isset($eror['email_empty']) ? $eror['email_empty'] : "";  ?> <br>
        Hình ảnh: <input type="file" name="anh" id=""> <?php echo isset($eror['anh_type']) ? $eror['anh_type'] : ""; ?>
        Trạng Thái
        <select name="trang_thai" id="">
            <option value="1">Mở</option>
            <option value="0">Khóa</option>
        </select>
        <input type="submit" name="btn-submit" value="Gửi" id="">
    </form>
</body>
</html>
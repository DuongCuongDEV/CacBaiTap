<?php
    require "sql.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id='$id' ";
    $row = $conn->query($sql)->fetch();
    // echo $id;
    // $errors=[];
    if(isset($_POST['edit-user'])){
        $name = $_POST["name"];
        $age = $_POST["tuoi"];
        $anh = $_FILES['anh']['name'];
        $mota = $_POST["mo_ta"];
        if (empty($name)) {
            $errors['name_empty'] = 'Mời nhập vào tên';
            }
            if (empty($age)) { 
            $errors['age_empty'] = 'Mời nhập vào tuổi';
        }
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
        //mảng quy định những đuôi file đc phép upload;
        $allowType=['jpg','png','jpeg','gif'];
        $allowupload = true;
        //ktra đuôi ảnh có hợp lệ không
        $imageFile = pathinfo($targer_file,PATHINFO_EXTENSION);
        if(!in_array($imageFile,$allowType)){
            echo "Đuôi không hợp lệ";
            $allowupload = false;
        }
        if($allowupload==true){
            // xử lý di chuyển file vào trong thư mục upload;
            if(move_uploaded_file($_FILES["anh"]["tmp_name"],$targer_file)){
                // echo "upload file thành công tại".$targer_file;
            }
        }
        if(!$errors){
            $update = "UPDATE student SET name='$name', age='$age', avatar = '$anh', description = '$mota'  WHERE id='$id' ";
            $conn->exec($update);
           
            // echo $sql;
            // die();
            header("location: index.php");
        }
        if (isset($_POST['return'])) {
        header('location:index.php');
        }
    }
    // if (isset($_POST['edit-user'])){
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
        <a style="margin: 10px" href="index.php">Về trang danh sách</a><br>
        Họ tên: <input type="text" name="name" id="" value="<?php echo $row['name']; ?>"> <br>
        Tuổi: <input type="text" name="tuoi" value="<?php echo $row['age']; ?>" id=""> <br>
        Ảnh đại diện: <input type="file"  name="anh" value="<?php echo $row['avatar']; ?>" id=""> <br>
        Mô tả sinh viên: <br> <textarea name="mo_ta" id="" value="<?php echo $row['description']; ?>" cols="30" rows="3"></textarea> <br>
        <input type="submit" value="SAVE" name="" id="">
        <input type="submit" value="Reset" name="edit-user" id="">
    </form>
</body>
</html>
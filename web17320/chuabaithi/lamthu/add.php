<?php
    require "connect.php";
    $sql = "SELECT * FROM sach";
    $resulf = $conn->query($sql)->fetchAll();
    if(isset($_POST['btn'])){
        $flag = true;
        $name = $_POST['name'];
        $img = $_FILES['anh']['name'];
        $intro = $_POST['intro'];
        $cate = $_POST['cate_id'];
        if(empty($_POST['name'])){
            echo "mời bạn nhập vào tên";
            $flag = false;
        }
        if(isset($_FILES['anh'])){
            $all = true;
            //dẫn
            $dan = "image/";
            //upload
            $upload = $dan.$_FILES['anh']['name'];
            //đi dạng
            $dinh_dang = ['png','jpg','jpeg'];
            //ktra
            $ktra = pathinfo($upload.PATHINFO_EXTENSION);
            if(!in_array($ktra,$dinh_dang)){
                $all = false;
                echo "không đúng định dạng";
            }

            if($all==true){
                move_uploaded_file($_FILES['anh']['tmp_name'],$upload);
            }
        }
        if($flag==true){
            $sql ="INSERT INTO sach2 VALUES(null,'$name','$img','$intro','$cate')";
            $conn->exec($sql);
            echo "thành công";
            header("location:vie.php");
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
        book title <input type="text" name="name" id="">
        img <input type="file" name="anh" id="">
        intro <input type="text" name="intro" id="">
        <select name="cate_id" id="">
            <?php foreach($resulf as $key=>$value){ ?>
            <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_name']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="btn" value="gửi" id="">
    </form>
</body>
</html>
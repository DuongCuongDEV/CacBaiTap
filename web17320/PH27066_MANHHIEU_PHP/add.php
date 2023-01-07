<?php
    require "connect.php";
    $sql = "SELECT * FROM types";
    $resulf = $conn->query($sql)->fetchAll();

    if(isset($_POST['btn'])){
        $flag = true;
        $name = $_POST['name'];
        $img = $_FILES['anh']['name'];
        $intro = $_POST['intro'];
        $descrip = $_POST['des'];
        $number = $_POST['number'];
        $price = $_POST['price'];
        $type = $_POST['type_id'];

        if(empty($_POST['name'])){
            echo "bạn phải nhập tên";
            $flag = false;
        }

        if($_POST['price']<0){
            echo "phải nhập số dương";
            $flag = false;
        }

        if(isset($_FILES['anh'])){
            $all = true;
            $size = 200000;
            //dẫn
            $dan = "image/";
            //upload
            $upload = $dan.$_FILES['anh']['name'];
            //dịnh dạng
            $dinh_dang = ['jpg','png','jpeg'];
            //ktra
            $ktra = pathinfo($upload,PATHINFO_EXTENSION);
            if(!in_array($ktra,$dinh_dang)){
                
                $all = false;
            }
            if($_FILES['anh']['size']>$size){
                echo "vượt quá kích thước ảnh cho phép";
                $all = false;
            }
            if($all==true){
                move_uploaded_file($_FILES['anh']['tmp_name'],$upload);
            }
        }

        if($flag==true){
            $sql = "INSERT INTO rooms VALUES(null, '$name','$img','$intro','$descrip','$number','$price','$type')";
            $conn->exec($sql);
            header("location: vie.php");
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
        name: <input type="text" name="name" id=""> <br>
        img: <input type="file" name="anh" id=""> <br>
        intro <input type="text" name="intro" id=""> <br>
        descrip <input type="text" name="des" id=""> <br>
        number: <input type="text" name="number" id=""> <br>
        price: <input type="text" name="price" id=""> <br>
        <select name="type_id" id="">
            <?php foreach($resulf as $key=>$value){ ?>
            <option value="<?php echo $value['type_id'];?>"><?php echo $value['type_name']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="gửi" name="btn" id="">
    </form>
</body>
</html>
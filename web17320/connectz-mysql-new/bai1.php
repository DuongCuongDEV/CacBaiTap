<?php
    //Tạo 1 bảng giảng viên ID,TÊN,email,TRẠNG THÁI;
    require "connect.php";
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
    <form action="" method="">
        name: <input type="text" name="ten" id=""> <br>
        email: <input type="email" name="email" id=""> <br>
        năm sinh: <input type="text" name="nam" id=""> <br>
        trạng thái:
        <select name="" id="trang_thai">
            <section value="1">Mở</section>
            <section value="2">Khóa</section>
        </select>
        <input type="submit" name="btn" id="">
    </form>
    <?php
        if(isset($_POST['btn'])){
            $name = $_POST['ten'];
            $email = $_POST['email'];
            $nam_sinh = $_POST['nam'];
            $trangthai = $_POST['trang_thai'];
            $sql = "INSERT INTO giangvien VALUES(null,$name,$email,$nam_sinh,$trangthai)";
            $conn->exec($sql);
            echo "thêm người thành công";
        }
    ?>
</body>
</html>
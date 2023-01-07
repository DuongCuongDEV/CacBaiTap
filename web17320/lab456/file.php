<?php
    session_start();
    include 'hamxuly.php';
    include 'data.php';
    if(isset($_POST['thoat'])){
        unset($_SESSION['keyone']);
        echo "Bạn đã đăng xuất<br>";
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
    <?php 
    if(isset($_SESSION["keyone"])){
    ?>
    <table border = "1">
        <tr>
            <td>tên gv</td>
            <td>tuổi</td>
            <td>tổng Lương</td>
        </tr>
        <?php
            foreach($mang2 as $key=>$value){
        ?>
            <tr>
                <td><?php echo $value["ten"] ?></td>
                <td><?php echo tuoi($value["nam_sinh"])?></td>
                <td><?php echo luong($value["luongcoban"],$value["so_gio"])?></td>
            </tr>
        <?php
            }
         ?>
    </table>
    <form action="" method="POST">
        <input type="submit" value="Đăng Xuất" name="thoat" id="">
    </form>
    <?php
    }else{
        echo "Phải đăng nhập để truy cập trang";
    }
    ?>
</body>
</html>
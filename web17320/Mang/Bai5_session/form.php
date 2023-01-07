<?php
    //khai báo 2 biến session là số a và số b ở trong file form
    //tính tổng hiệu tích thương của 2 số ở bên file action và hiển thị ra
    session_start();
    // $_SESSION["a"]=5;
    // $_SESSION["b"]=10;
    if(isset($_POST["save-session"])){
        $_SESSION["name"] = $_POST["username"];
    }
    //tạo 1 form username pass khi ấn nút đăng nhập sẽ kiểm tra username vs pass word nhập vào có trùng vs abc,123456
    //nếu trùng sẽ hiện ra xin chào + username,pass nếu không thì báo bạn nhập sai tk mk.
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
    <form action="" method="POST">
        <?php 
        if(isset($_SESSION["name"])){
            echo "xin chào" . $_SESSION["name"];
        }
        ?>
        <input type="text" name="username" id="">
        <input type="submit" name="save-session" value="Lưu session" id="">
    </form>
</body>
</html>
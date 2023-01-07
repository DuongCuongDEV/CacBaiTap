<?php
    //tạo 1 form username pass khi ấn nút đăng nhập sẽ kiểm tra username vs pass word nhập vào có trùng vs abc,123456
    //nếu trùng sẽ hiện ra xin chào + username,pass nếu không thì báo bạn nhập sai tk mk.
    session_start();
    $a = "abc";
    $b = 123456;
    if(isset($_POST["session-save"])){
        // if($_POST["uname"]==$a && $_POST["pass"]==$b)
            $_SESSION["name"] = $_POST["uname"];
            $_SESSION["pass"] = $_POST["pass"];
    }
    //khai báo mảng liên hợp 2 chiều : họ tên username pass 
    //yêu cầu khi ấn nút đăng nhập ktra username pass có trùng vs tk mk trong mảng liên hợp 2 chiều không ngược lại báo nhập sai.
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
            if($_SESSION["name"] == $a && $_SESSION["pass"] == $b){
                echo "xin chào". $_SESSION["name"] .$_SESSION["pass"];
            }else{
                echo "NHẬP SAI TK MK";
            }
         ?>
        <input type="text" name="uname" id="">
        <input type="text" name="pass" id="">
        <input type="submit" name="session-save" value="Gửi" id="">
    </form>
</body>
</html>
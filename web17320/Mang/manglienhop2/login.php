<?php
    if(isset($_POST['btn_login'])){    
        echo "Tên đăng nhập là: {$_POST['username']}"."</br>";
        echo "Mật khẩu là: {$_POST['password']}";
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
<h3>Đăng nhập</h3>
    <form action="" method="POST">
        Tên đăng nhập: <input type="text" name="username" value=""> <br>
        Mật khẩu: <input type="text" name="password" value=""> <br>
        <button type="submit" name="btn_login">Gửi</button>
    </form>
</body>
</html>
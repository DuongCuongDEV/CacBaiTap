<?php
    session_start();
    if(isset($_POST["dangnhap"])){
        $_SESSION["key"]="open";
    }
    if(isset($_POST["dangnhap"])){
        include "data.php";
        $_SESSION["usernm"]=$_POST["user"];
        $_SESSION["pass1"]=$_POST["password"];
        foreach($mang1 as $key=>$value){
        if($_SESSION["usernm"]==$value["username"] && $_SESSION["pass1"]==$value["pass"]){
            header('location:file.php');
            $_SESSION["keyone"]="openmokhoa";
        }else{
            $flag = false;
        }
        if($flag==false){
            echo "bạn vui lòng đăng nhập đúng tài khoản mật khẩu";
        }
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
    <form action="" method="POST">
        tên đăng nhâp: <input type="text" name="user" id=""> <br>
        pass đăng nhập: <input type="text" name="password" id=""> <br>
        <input type="submit" name="dangnhap" value="Đăng nhập" id="">
    </form>
</body>
</html>
<?php
    
?>

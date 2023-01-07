<?php
    session_start();
    $mang = [
        ["ho_ten"=>"Nguyễn Mạnh Hiếu","username"=>"abc","pass"=>"123"],
        ["ho_ten"=>"Nguyễn Quốc việt","username"=>"abcd","pass"=>"124"],
        ["ho_ten"=>"Lê Minh Thảo","username"=>"abce","pass"=>"125"],
        ["ho_ten"=>"Chu Thị Ngọc Mai","username"=>"abcf","pass"=>"126"],
        ["ho_ten"=>"Nguyễn Minh Nghĩa","username"=>"abcg","pass"=>"127"],
    ];
    if(isset($_POST["action"])){
        foreach($mang as $key=>$value){
            if($_POST["name1"]==$value["username"] && $_POST["pass1"]==$value["pass"]){
                $_SESSION["name"] = $_POST["name1"];
                $_SESSION["pass"] = $_POST["pass1"];
                $_SESSION["ten"] = $value["ho_ten"];
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
        <?php
        $_user = "";
            if(isset($_SESSION["name"])){
                echo "xin chào" .$_SESSION["ten"] .$_SESSION["name"] .$_SESSION["pass"];
            }else{
                echo "Sai tài khoản mật khẩu";
            }
        ?>
        <input type="text" name="name1" id="">
        <input type="text" name="pass1" id="">
        <input type="submit" value="Gửi" name="action" id="">
    </form>
</body>
</html>
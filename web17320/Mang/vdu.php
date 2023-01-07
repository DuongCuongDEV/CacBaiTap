<?php
$mang = [
    [
        "ten_nhan_vien" => 'Nguyễn Văn A',
        "ma_nhan_vien" => 'nv1',
        "luong_co_ban" => 1000000,
        "so_gio_lam" => 5,
    ],

    [
        "ten_nhan_vien" => 'Nguyễn Văn B',
        "ma_nhan_vien" => 'nv2',
        "luong_co_ban" => 2000000,
        "so_gio_lam" => 7,
    ],

    [
        "ten_nhan_vien" => 'Nguyễn Văn C',
        "ma_nhan_vien" => 'nv3',
        "luong_co_ban" => 3000000,
        "so_gio_lam" => 9,
    ],

    [
        "ten_nhan_vien" => 'Nguyễn Văn D',
        "ma_nhan_vien" => 'nv4',
        "luong_co_ban" => 7000000,
        "so_gio_lam" => 10,
    ],

    [
        "ten_nhan_vien" => 'Phạm Thị E',
        "ma_nhan_vien" => 'nv5',
        "luong_co_ban" => 10000000,
        "so_gio_lam" => 12,
    ],
];

if(isset($_POST['ma_nv'])){
    for($i = 0; $i < count($mang); $i++){
        if($_POST['ma_nv'] == $mang[$i]["ma_nhan_vien"]){
            echo $mang[$i]["ten_nhan_vien"]."<br>";
            echo $mang[$i]["ma_nhan_vien"]."<br>";
            echo $mang[$i]["luong_co_ban"]."<br>";
            echo $mang[$i]["so_gio_lam"]."<br>";
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
        Mã nhân viên <input type="text" name="ma_nv">
        <input type="submit" value="Tìm kiếm" name="tim_kiem">
    </form>
</body>
</html>
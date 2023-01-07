<?php
    // khai báo 1 mảng liên hợp 2 chiều gồm những thông tin sau:
    //  ten_nhan_vien, ma_nhan_vien,luong_co_ban, so_gio_lam
    // tạo 5 dữ liệu nhân viên
    //  tạo form cho nhập thông tin sau :
    // mã nhân viên và nút tìm kiếm
    // khi ấn nút tìm kiếm  form sẽ gửi dữ liệu Mã nhân viên mà người
    //dùng nhập vào từ form để xử lý kiểm tra xem trong mảng đã khai báo
    //có nhân viên nào trùng với thông tin mà người dùng muốn tìm kiếm
    // không. nếu có sẽ hiển thị thông tin những nhân viên mà người dùng
    // muốn tìm kiếm phù hợp ra bảng nếu ko có có sẽ báo không
    // có nhân viên nào
    $mangnv = [ 
                ["tennv"=>"Nguyễn Mạnh Hiếu","manv"=>"Ph01","luong_co_ban"=>9000000,"so_gio_lam"=>5],
                ["tennv"=>"Lê Minh Thảo","manv"=>"Ph02","luong_co_ban"=>8000000,"so_gio_lam"=>8],
                ["tennv"=>"Hoàng Đức Thái","manv"=>"Ph03","luong_co_ban"=>9500000,"so_gio_lam"=>6],
                ["tennv"=>"Nguyễn Quốc Việt","manv"=>"Ph04","luong_co_ban"=>7000000,"so_gio_lam"=>7],
                ["tennv"=>"Chu Thị Ngọc Mai","manv"=>"Ph05","luong_co_ban"=>10000000,"so_gio_lam"=>4],           
            ];
            $ma_nhan_vien = "";
            if(isset($_POST['btn_login'])){
                $ma_nhan_vien = isset($_POST["manv"]) ? $_POST["manv"] : "" ;    
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
    <table border="1">
    <tr>
        <td>Tên nhân viên</td>
        <td>Mã Nhân Viên</td>
        <td>Lương cơ bản</td>
        <td>số giờ làm</td>
    </tr>

    <?php
        foreach($mangnv as $key=>$value){
            if($ma_nhan_vien != ""){
                if($ma_nhan_vien == $value["manv"]){
    ?>
    <tr>
        <td><?php echo $value["tennv"] ?></td>
        <td><?php echo $value["manv"] ?></td>
        <td><?php echo $value["luong_co_ban"] ?></td>
        <td><?php echo $value["so_gio_lam"] ?></td>
    </tr>
    <?php
            }
        }
    }
    ?>
    </table>
</body>
</html>
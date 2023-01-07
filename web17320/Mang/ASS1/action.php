<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
    $arrchuyenbay = [
        [
            "so_hieu_chuyen_bay"=>"VN01",
            "thoi_gian_di"=>"2022-08-03 12:00:00",
            "thoi_gian_den"=>"2022-08-03 14:00:00",
            "noi_di"=>"Hà Nội",
            "noi_den"=>"Hồ Chí Minh",
            "tong_hanh_khach"=>100,
        ],
        [
            "so_hieu_chuyen_bay"=>"VN02",
            "thoi_gian_di"=>"2022-08-03 19:00:00",
            "thoi_gian_den"=>"2022-08-03 21:00:00",
            "noi_di"=>"Hải Phòng",
            "noi_den"=>"Hồ Chí Minh",
            "tong_hanh_khach"=>90,
        ],
        [
            "so_hieu_chuyen_bay"=>"VN03",
            "thoi_gian_di"=>"2022-08-03 09:00:00",
            "thoi_gian_den"=>"2022-08-03 10:00:00",
            "noi_di"=>"Tây Nguyên",
            "noi_den"=>"Hồ Chí Minh",
            "tong_hanh_khach"=>80,
        ]
    ];
    $tg_di = "";
    $tg_den = "";
    $so_hieu = "";
    if (isset($_POST["btn_login"])) {
        $so_hieu = isset($_POST["so_hieu"]) ? $_POST["so_hieu"] : "";
        $tg_di = isset($_POST["thoi_di"]) ? $_POST["thoi_di"] : "";
        $tg_den = isset($_POST["thoi_den"]) ? $_POST["thoi_den"] : "";
    };
    function check($tg_di,$tg_den,$thoi_gian_di,$thoi_gian_den)
    {
        if (strtotime($tg_den) <= strtotime($thoi_gian_di)&&strtotime($tg_di) < strtotime($thoi_gian_di) ) {
            return ["Chưa bay", "blue"];
        } elseif (strtotime($tg_di) >= strtotime($thoi_gian_den) && strtotime($tg_den) > strtotime($thoi_gian_den)) {
            return ["Đã bay", "red"];
        } elseif (strtotime($tg_di) >= strtotime($thoi_gian_di) && strtotime($tg_di) <= strtotime($thoi_gian_den) || strtotime($tg_den) >= strtotime($thoi_gian_den) && strtotime($tg_den) > strtotime($thoi_gian_di)||strtotime($tg_den) <= strtotime($thoi_gian_den) && strtotime($tg_den) >= strtotime($thoi_gian_di)) {
            return ["Đang bay", "yellow"];
        }

    };
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
        <td>Số hiệu chuyến bay</td>
        <td>Thời gian đi</td>
        <td>Thời gian đến</td>
        <td>Nơi đi </td>
        <td>Nơi đến</td>
        <td>Tổng hành khách </td>
        <td>Trạng thái</td>
    </tr>
    <?php foreach($arrchuyenbay as $key=>$value){
        $tg_check = check($tg_di, $tg_den, $value["thoi_gian_di"], $value["thoi_gian_den"]);
        if($so_hieu != "" && $tg_di != "" && $tg_den != "" ){
    ?>
        <tr bgcolor = <?php echo $tg_check[1];?> >
        <td><?php echo $value["so_hieu_chuyen_bay"] ?></td>
        <td><?php echo $value["thoi_gian_di"] ?></td>
        <td><?php echo $value["thoi_gian_den"] ?></td>
        <td><?php echo $value["noi_di"] ?></td>
        <td><?php echo $value["noi_den"] ?></td>
        <td><?php echo $value["tong_hanh_khach"] ?></td>
        <td><?php echo $tg_check[0]  ?></td>
    </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>

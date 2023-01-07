<?php
    $mang = [
        ["ma_sv"=>"PH27066","ten"=>"Hiếu","nam_sinh"=>2003,"diem_toan"=>10,"diem_ly"=>9,"diem_hoa"=>9],
        ["ma_sv"=>"PH27067","ten"=>"Thảo","nam_sinh"=>2004,"diem_toan"=>9,"diem_ly"=>9,"diem_hoa"=>9],
        ["ma_sv"=>"PH27068","ten"=>"Việt","nam_sinh"=>2002,"diem_toan"=>8,"diem_ly"=>9,"diem_hoa"=>9],
        ["ma_sv"=>"PH27069","ten"=>"Đức","nam_sinh"=>2003,"diem_toan"=>6,"diem_ly"=>5,"diem_hoa"=>7],
        ["ma_sv"=>"PH27070","ten"=>"Điệp","nam_sinh"=>2002,"diem_toan"=>5,"diem_ly"=>6,"diem_hoa"=>10],
    ];
    $DiemTB = 0;
    for($i=0;$i<count($mang);$i++){
        $DiemTB = ($mang[$i]["diem_toan"]+$mang[$i]["diem_ly"]+$mang[$i]["diem_hoa"])/3;
    }
    // echo $DiemTB;
    // //hàm tính năm sinh
    // function tinhtuoi($nam_sinh){
    //     return date("Y")-$nam_sinh;
    //}
    //Hàm tính TB;
    function diemTB($diem_toan,$diem_ly,$diem_hoa){
        return ($diem_toan+$diem_ly+$diem_hoa)/3;
    }
    function xeploai($diemTB){
        if($diemTB>=0 && $diemTB<4){
            return ["Yếu","red"];
        }elseif($diemTB>=4 && $diemTB<6){
            return ["Trung Bình","yellow"];
        }elseif($diemTB>=6 && $diemTB<8){
            return ["khá","blue"];
        }elseif($diemTB>=8 && $diemTB<=10){
            return ["Gioi","green"];
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
    <table border="1">
        <tr>
            <td>mã sinh viên</td>
            <td>Tên sv</td>
            <td>Tuổi</td>
            <td>Điểm Toán</td>
            <td>Điểm lý</td>
            <td>Điểm hóa</td>
            <td>Điểm TB</td>
            <td>Xếp Loại</td>
        </tr>
    <?php
        foreach($mang as $key=>$value){
            $diemTB=diemTB($value["diem_toan"],$value["diem_ly"],$value["diem_hoa"]);
            $xloai=xeploai($diemTB);
    ?>
        <tr>
            <td>
                <?php  echo $value["ma_sv"] ?>
            </td>
            <td>
                <?php echo $value["ten"]."</br>" ?>
            </td>
            <td>
                <?php echo (date("Y")-$value["nam_sinh"]) ?>
            </td>
            <td>
                <?php echo $value["diem_toan"] ?>
            </td>
            <td>
                <?php echo $value["diem_ly"]  ?>
            </td>
            <td>
                <?php echo $value["diem_hoa"] ?>
            </td>
            <td>
                <?php echo $diemTB ?>
            </td>
            <td <?php echo $xloai[1] ?> >
                <?php echo $xloai[0] ?>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
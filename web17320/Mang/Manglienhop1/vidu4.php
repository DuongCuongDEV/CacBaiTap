<?php
    $arr = [
        ["ho_ten"=>"Nguyễn Văn A","Tuoi"=>18],
        ["ho_ten"=>"Nguyễn Văn B","Tuoi"=>19],
        ["ho_ten"=>"Nguyễn Văn C","Tuoi"=>20]
    ];
    echo $arr [1]["ho_ten"]."</br>";
    echo $arr [2]["Tuoi"]."</br>";
        for($i=0;$i<count($arr);$i++){
            echo $arr[$i]["ho_ten"]."</br>";
        }
    //tính tổng tuổi
    $tong = 0;
        for($i=0;$i<count($arr);$i++){
            $tong = $tong + $arr[$i]["Tuoi"];
        }
    echo "Tổng = " .$tong; 
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

    <table>
        <tr>
            <td>Họ Tên</td>
            <td>Tuổi</td>
        </tr>
    <?php
        foreach($arr as $key=>$value){ ?>

        <tr>
            <td><?php echo $value["ho_ten"] ?> Họ Tên</td>
            <td><?php echo $value["Tuoi"] ?> Tuổi</td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
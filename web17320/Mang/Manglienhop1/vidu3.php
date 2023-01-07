<?php
//Khai báo mảng liên hợp sau
$array = ["ha_noi"=>"Việt Nam","tokyo"=>"Nhật Bản"];
//hiển thị ra HTML
//Hà Nội là thủ đô của Việt Nam
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
    <?php
        foreach($array as $key=>$value){ ?>
            <div><?php echo $key ?> là của </div> <?php echo $value ?>
            <div><?php echo $key ?> là của </div> <?php echo $value ?>
    <?php    }
    ?>
</body>
</html>
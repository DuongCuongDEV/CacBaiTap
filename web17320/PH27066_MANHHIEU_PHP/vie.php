<?php
    require "connect.php";
    $sql = "SELECT * FROM types , rooms WHERE types.type_id=rooms.type_id";
    $resulf = $conn->query($sql)->fetchAll();
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
            <td>room_name</td>
            <td>img</td>
            <td>intro</td>
            <td>type id</td>
        </tr>
        <?php foreach($resulf as $key=>$value){ ?>
            <tr>
            <td><?php echo $value['room_name']; ?></td>
            <td><img width="100" src="./image/<?php echo $value['image']?>" alt=""></td>
            <td><?php echo $value['intro']; ?></td>
            <td><?php echo $value['type_name']; ?></td>
            <td><button onclick="location.href='edit.php?id=<?php echo $value['room_id'] ?>' ">Sửa</button></td>
            <td><button onclick="location.href='xoa.php?id=<?php echo $value['room_id'] ?>' ">Xóa</button></td>
        </tr>
        <?php } ?>
    </table>
    <a href="add.php">Thêm</a>
</body>
</html>
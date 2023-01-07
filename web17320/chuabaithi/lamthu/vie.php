<?php
    require "connect.php";
    $sql = "SELECT * FROM sach , sach2 WHERE sach.cate_id = sach2.cate_id";
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
            <td>Book title</td>
            <td>img</td>
            <td>intro</td>
            <td>cate name</td>
        </tr>
        <?php foreach($resulf as $key=>$value){ ?>
            <tr>
            <td><?php echo $value['book_title'] ?></td>
            <td><img width="100" src="./image/<?php echo $value['image'];?>" alt=""></td>
            <td><?php echo $value['intro'] ?></td>
            <td><?php echo $value['cate_name'] ?></td>
            <td><button onclick="location.href='edit.php?id=<?php echo $value['book_id'];?>' ">Sửa</button></td>
            <td><button onclick="location.href='xoa.php?id=<?php echo $value['book_id'];?>' ">Xóa</button></td>
        </tr>
        <?php } ?>
    </table>
    <a href="add.php">Thêm sách</a>
</body>
</html>
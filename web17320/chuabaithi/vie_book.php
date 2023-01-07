<?php
    require "connect.php";
    $sql = "SELECT * FROM categories , book WHERE categories.cate_id = book.cate_id";
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
    <table border = 1>
        <tr>
            <td>book title</td>
            <td>img</td>
            <td>intro</td>
            <td>cate name</td>
        </tr>
        <?php foreach($resulf as $key=>$value){ ?>
        <tr>
            <td><?php echo $value['book_title']; ?></td>
            <td><img width="50" src="./img/<?php echo $value['image'];?>" alt=""></td>
            <td><?php echo $value['intro']; ?></td>
            <td><?php echo $value['cate_name']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
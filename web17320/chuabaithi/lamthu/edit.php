<?php
    require "connect.php";
    $sql = "SELECT * FROM sach";
    $res = $conn->query($sql)->fetchAll();

    $id = $_GET['id'];
    $sql = "SELECT * FROM sach2 WHERE book_id = '$id' ";
    $row = $conn->query($sql)->fetch();
    if(isset($_POST['reset'])){
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $cate = $_POST['cate_id'];

        $sql = "UPDATE sach2 SET book_title = '$name', intro = '$intro', cate_id = '$cate' WHERE book_id = $id ";
        $conn->exec($sql);
        header("location: vie.php");
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
    <form action="" method="POST" enctype="multipart/form-data">
        book title <input type="text" name="name" value="<?php echo $row['book_title']; ?>" id="">
        intro <input type="text" name="intro" value="<?php echo $row['intro']; ?>" id="">
        <select name="cate_id" id="">
            <?php foreach($res as $key=>$value){ ?>
            <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_name']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="reset" value="Sửa" id="">
    </form>
</body>
</html>
<?php
    require "connect.php";
    $sql = "SELECT * FROM types";
    $resulf = $conn->query($sql)->fetchAll();

    $id=$_GET['id'];
    $sql = "SELECT * FROM rooms WHERE room_id = '$id' ";
    $row = $conn->query($sql)->fetch();

    if(isset($_POST['reset'])){
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $type = $_POST['type_id'];

        $sql = "UPDATE rooms SET room_name = '$name', intro = '$intro', type_id = '$type' WHERE room_id = '$id' ";
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
        name: <input type="text" name="name" value="<?php echo $row['room_name']; ?>" id=""> <br>
        intro <input type="text" name="intro" value="<?php echo $row['intro']; ?>" id=""> <br>
        <select name="type_id" id="">
            <?php foreach($resulf as $key=>$value){ ?>
            <option value="<?php echo $value['type_id'];?>"><?php echo $value['type_name']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="gửi" name="reset" id="">
    </form>
</body>
</html>
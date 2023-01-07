<?php
    $id = $_GET['id'];
    require "connect.php";
    $sql = "SELECT * FROM user WHERE id='$id' ";
    $row= $conn->query($sql)->fetch();
    //fetch chỉ trả ra 1 dòng dữ liệu tương đương với mảng liên hợp 1 chiều.
    echo "<pre>";
    echo print_r($row);
    echo "</pre>";
    if(isset($_POST['edit-user'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $trang_thai = $_POST['trang_thai'];
        $update = "UPDATE user SET name='$name', email='$email', trang_thai = '$trang_thai' WHERE id='$id' ";
        $conn->exec($update);
        //cách PUB là cứ echo ra rồi die để cho dừng lại;
        //trong admin;
        // echo $update;
        // die;
        header("location: vie_user.php");
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
    <form action="" method="POST">
        Name <input type="text" name="name" id="" value="<?php echo $row['name']; ?>">
        Email<input type="email" name="email" value="<?php echo $row['email']; ?>" id="">
        Trạng Thái
        <select name="trang_thai" id="">
            <option value="1" <?php echo $row['trang_thai'] == 1 ? "selected" : ""; ?> >Mở</option>
            <option value="0" <?php if( $row['trang_thai'] %2== 0) {echo "selected";} ; ?> >Khóa</option>
        </select>
        <input type="submit" name="edit-user" value="Gửi" id="">
    </form>
</body>
</html>
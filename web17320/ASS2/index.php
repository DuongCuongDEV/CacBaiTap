<?php
    require "sql.php";
    $sql = "SELECT * FROM student";//tạo đường dẫn
    $mang = $conn->query($sql)->fetchAll();//mảng đường dẫn
    // echo "<pre>";
    // echo print_r($mang);
    // echo "</pre>";
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
            <td>ID</td>
            <td>Tên</td>
            <td>Tuôi</td>
            <td>Ảnh đại diện</td>
            <td>Mô tả sinh viên</td>
            <td>Ngày Tạo</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php 
        foreach($mang as $key=>$value){
         ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><img style="width: 100px" src= "./img/<?php echo $value['avatar']?>"></td>
            <td><?php echo $value['description']; ?></td>
            <td><?php echo $value['created_at'] ?></td>
            <td><button type = "button" onclick="location.href='edit.php?id=<?php echo $value['id'];?>' ">Sửa</button></td>
            <td><button type = "button" onclick="location.href='xoa.php?id=<?php echo $value['id'];?>" onclick='Del()'>xóa</button></td>
        </tr>
        <?php 
        } 
        ?>
    </table>
    <script>
        function Del(){
            if(  confirm("bạn chắc chắn muốn xóa bản ghi này")){
                alert ("Xóa thành công");
            }else{
                alert ("Xóa thất bại");
            }
    }
    </script>
</body>
</html>
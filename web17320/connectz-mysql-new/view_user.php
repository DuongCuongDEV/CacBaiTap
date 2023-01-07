<?php
require 'connect.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql)->fetchAll();
// echo "<pre>";
// echo  print_r($result);
// echo die();
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
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>email</td>
            <td>Ảnh</td>
            <td>trạng thái</td>
            <td>Action</td>
        </tr>
        <?php foreach($result as $key=>$value){
           
        ?>
        <tr bgcolor = "<?php
         if($value["trang_thai"]%2==0){
            echo "red";
        }else{
            echo "blue";
        }
        ?>">
            <td><?php echo $value["id"]; ?></td>
            <td><?php echo $value["name"]; ?></td>  
            <td><?php echo $value["email"]; ?></td>
            <td><img style="width: 100px" src="<?php if(isset($value['avatar'])){
                echo "./img/".$value['avatar'];
            } ?>" ></td>
            <td><?php echo $value["trang_thai"] %2 != 0 ? "mở" : "khóa"; ?></td>
            <td><button type = "button" onclick="location.href = 'edit_user.php ?id=<?php echo $value['id'];?>' ">Sửa</button></td>
            <td><button style="background-color:beige" ><a href="javascript:confimdelate('xoa.php?id=<?php echo $value['id']?>')">Xóa </a></button></td>
        </tr>
        <?php 
        }
         ?>
    </table>
    <script>
        function confimdelate(delUrl) {
            if(confirm("bạn có muốn xóa không")){
                doucument.location=delUrl;
            }
        }
    </script>
</body>
</html>
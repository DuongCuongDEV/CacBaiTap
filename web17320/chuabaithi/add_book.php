<?php 
require "connect.php";
$sql_categories = "SELECT * FROM categories";
$resulf_id = $conn->query($sql_categories)->fetchAll();
 $erro=[];
if(isset($_POST['btn-submit'])){
    $title = $_POST['book_title'];
    $img = $_FILES['img']['name'];
    $intro = $_POST['intro'];
    $detail = $_POST['detail'];
    $page = $_POST['page'];
    $price = $_POST['gia'];
    $chon = $_POST['cate_name'];

    $flag = true;
    if(empty($_POST['book_title'])){
        echo "Mời nhập vào tên sách";
        $flag = false;
    }

    if(isset($_FILES['img'])){
        $all = true;
        $dan = "img/";
        //tạo size cho ảnh
        $size = 200000;
        //đường dẫn upload
        $upload = $dan.$_FILES["img"]["name"];
        //tạo định dạng cho ảnh
        $dinh_dang=['jpg','png','jpeg'];
        //ktra đuôi ảnh
        $duoi = pathinfo($upload,PATHINFO_EXTENSION);
        if(!in_array($duoi,$dinh_dang)){
            $all = false;
            echo "Đuôi ảnh không hợp lệ";
        }
        if($all==true){
            move_uploaded_file($_FILES['img']['tmp_name'],$upload);
        }
    }

    if($flag==true){
        $sql = "INSERT INTO book VALUES(null, '$title', '$img','$intro','$detail','$page','$price','$chon')";
        $conn -> exec($sql);
        echo "thêm người dùng thành công";
        header('location:vie_book.php');
    }
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
        <table>
            <tr>
                <label>book title</label>
                <input type="text" name="book_title" id=""> <br>

                <label>img</label>
                <input type="file" name="img" id=""> <br>

                <label>intro</label> 
                <input type="text" name="intro" id=""> <br>

                <label>detail</label> 
                <input type="text" name="detail" id=""> <br>

                <label>page</label> 
                <input type="text" name="page" id=""> <br>

                <label>price</label> 
                <input type="text" name="gia" id=""> <br>

                <label>cate name</label> 
                <select name="cate_name" id="">
                    <?php foreach($resulf_id as $key=>$value){ ?>
                        <option value="<?php echo $value['cate_id']?>"><?php echo $value['cate_name']?></option>
                        <?php } ?>
                </select>
                <td><button type="submit" name="btn-submit" >Thêm</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
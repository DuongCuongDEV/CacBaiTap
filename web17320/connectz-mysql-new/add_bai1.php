<?php
    require "connect.php";
    $sql = "SELECT * FROM giangvien";
    $mang = $conn->query($sql)->fetchAll();
    echo "<pre>";
        echo print_r($mang);
    echo "</pre>";
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
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>email</td>
            <td>năm sinh</td>
            <td>trạng thái</td>
        </tr>
        <?php foreach($mang as $key=>) ?>
    </table>
</body>
</html>
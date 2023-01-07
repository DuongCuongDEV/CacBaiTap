<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tìm kiếm</h3>
    <form action="" method="GET">
        <a href="?name=ha&ma=ph123">Gửi</a>
        Tìm kiếm: <input type="text" name="search" value=""/> <br>
        <input type="submit" name="btn_search" id="" value="Tìm kiếm"/>
    </form>
</body>
</html>
<?php
    if(isset($_GET)['search']);
    echo "Tên là: {$_GET['name']}";
?>
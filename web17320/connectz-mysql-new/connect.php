<?php
$servername = "localhost";
//xamps username = "root"
//password = "";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=web17320", $username, $password);
// thiết lập lỗi PDO thành ngoại lệ
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
   echo "Connection failed: " . $e->getMessage();
}

?>

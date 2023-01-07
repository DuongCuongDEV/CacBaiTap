<?php
session_start();
if(isset($_SESSION['permission'])){
    if ( $_SESSION['permission'] == 1){
        header("location:../manager");
    }
    if ( $_SESSION['permission'] == 2){
        header("location:../student");
    }
    if ( $_SESSION['permission'] == 5){
        echo '<script type = "text/javascript">';
        echo 'alert("User đang bị tạm khóa, liên lạc hotline trung tâm để được hỗ trợ");';
        echo 'window.location.href = "../logout.php "';
        echo '</script>';
    }
}else{
        echo '<script type = "text/javascript">';
        echo 'alert("Vui lòng đăng nhập tài khoản của bạn");';
        echo 'window.location.href = "../logout.php "';
        echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- CSS only -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container">
            <a class="navbar-brand" href="../index.php">HIP E-Learning</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="class/class.php">QL người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="testChoice/listQuestion.php">QL câu hỏi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Giữa -->

    <!-- Footer -->
    <?php include('view/footer.php') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
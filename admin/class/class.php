<?php

include ('../../connect/connect.php');

session_start();
if(isset($_SESSION['permission'])){
    if ( $_SESSION['permission'] == 1){
        header("location:../../manager");
    }
    if ( $_SESSION['permission'] == 2){
        header("location:../../student");
    }
    if ( $_SESSION['permission'] == 5){
        echo '<script type = "text/javascript">';
        echo 'alert("User đang bị tạm khóa, liên lạc hotline trung tâm để được hỗ trợ");';
        echo 'window.location.href = "../../logout.php "';
        echo '</script>';
    }
}else{
        echo '<script type = "text/javascript">';
        echo 'alert("Vui lòng đăng nhập tài khoản của bạn");';
        echo 'window.location.href = "../../logout.php "';
        echo '</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý lớp học</title>
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
                        <a class="nav-link " href="">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../class/class.php">QL người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../testChoice/listQuestion.php">QL câu hỏi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Giữa -->
    <!-- danh sách người dùng -->
    <div class="container-sm py-5" id="listUser">
        <div class="row">
            <div class="d-flex flex-row-reverse py-4">
                <div class=" input-group-btn ">
                    <button class="btn btn-primary" type="submit" id="btnSearch">
                        <span class="bi bi-search"></span>
                    </button>
                </div>
                <input type="text" class="form-control" id="txtSearch" placeholder="Tìm bài thi...">
            </div>
        </div>
        <table class="table table-hover table-bordered">
            <thead class="table-info">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Họ và tên</th>
                    <th scope="col" class="text-center">Tài khoản</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Giới tính</th>
                    <th scope="col" class="text-center">Địa chỉ</th>
                    <th colspan="2" class="text-center"><button id="btnQuestion" class="btn btn-outline-info ">Thêm người dùng</button></th>
                </tr>
            </thead>
            <tbody id="danhSach">
                <!-- View.php -->
            </tbody>
        </table>
        <!-- Phân trang -->
        <div class="row">
            <nav aria-label="Page navigation example py-4">
                <ul class="pagination justify-content-center" id="pagination">
                    <!-- Chèn pagi -->
                </ul>
            </nav>
        </div>
        <!-- Kết thúc phân trang -->
    </div>
    <!-- footer -->
    <?php include('../view/footer.php') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#btnSearch').click();
        // readData();
    })
    </script>
</body>

</html>
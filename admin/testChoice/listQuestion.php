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
    <title>Quản lý câu hỏi</title>
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
                        <a class="nav-link " href="#">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../class/class.php">QL người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../testChoice/listQuestion.php">QL câu hỏi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Giữa -->
    <div class="container-sm py-5">
        <div class="row">
            <div class="d-flex flex-row-reverse py-4">
                <div class=" input-group-btn ">
                    <button class="btn btn-primary" type="submit" id="btnSearch">
                        <span class="bi bi-search"></span>
                    </button>
                </div>
                <input type="text" class="form-control" id="txtSearch" placeholder="Tìm câu hỏi...">
            </div>
        </div>
        <div class="container-sm py-5" id="listTest">
            <table class="table table-hover table-bordered">
                <thead class="table-info">
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Câu hỏi</th>
                        <th scope="col" class="text-center">A</th>
                        <th scope="col" class="text-center">B</th>
                        <th scope="col" class="text-center">C</th>
                        <th scope="col" class="text-center">D</th>
                        <th scope="col" class="text-center">Đáp án đúng</th>
                        <th colspan="2" class="text-center"><button id="btnQuestion" class="btn btn-outline-info ">Thêm
                                câu hỏi</button></th>
                    </tr>
                </thead>
                <tbody id="questions">
                    <!-- viewQuestion.php -->
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
    </div>
    <!-- Footer -->
    <?php include('../view/footer.php') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('mdlQuestion.php'); ?>
    <script type="text/javascript">
    var page = 1;

    $(document).ready(function() {
        $('#btnSearch').click();
        // readData();
    })
    //Thêm câu hỏi
    $('#btnQuestion').click(function() {
        $.ajax({
            url: 'data.php',
            type: 'get',
            success: function(data) {
                $('#maMon').empty();
                $("#maMon").append(data);
            }
        })
        $('#txtQuestionId').val('');
        $('#txtCauHoi').val('');
        $('#txtA').val('');
        $('#txtB').val('');
        $('#txtC').val('');
        $('#txtD').val('');

        $('#rdOptionA').prop('checked', false);
        $('#rdOptionB').prop('checked', false);
        $('#rdOptionC').prop('checked', false);
        $('#rdOptionD').prop('checked', false);
        $('#modalQuestion').modal('show');
    })
    //sửa câu hỏi
    $(document).on('click', 'button[name="update"]', function() {
        var trid = $(this).closest('tr').attr('id');
        $.ajax({
            url: 'data.php',
            type: 'get',
            success: function(data) {
                $('#maMon').empty();
                $("#maMon").append(data);
            }
        })
        getDetail(trid);
        $('#txtCauHoi').attr('readonly', false);
        $('#txtA').attr('readonly', false);
        $('#txtB').attr('readonly', false);
        $('#txtC').attr('readonly', false);
        $('#txtD').attr('readonly', false);

        $('#rdOptionA').attr('disabled', false);
        $('#rdOptionB').attr('disabled', false);
        $('#rdOptionC').attr('disabled', false);
        $('#rdOptionD').attr('disabled', false);

        $('#txtQuestionId').val(trid);
        $('#btnSubmit').show();
    })
    //Xóa câu hỏi
    $(document).on('click', 'button[name="delete"]', function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id');
        if (confirm("Bạn có chắc là muốn xóa câu hỏi này không?") == true) {
            $.ajax({
                url: 'delete.php',
                type: 'post',
                data: {
                    id: trid
                },
                success: function(data) {
                    alert(data);
                    readData();
                }
            })
        }
    })
    //Tìm dữ liệu
    $('#btnSearch').click(function() {
        let search = $('#txtSearch').val().trim();
        // alert(search);
        readData(search);
        pagination(search);
    })

    $('#txtSearch').on('keypress', function(e) {
        if (e.which === 13) {
            $('#btnSearch').click();
        }
    });
    //lấy dữ liệu
    function getDetail(id) {
        $.ajax({
            url: 'detail.php',
            type: 'get',
            data: {
                id: id
            },
            success: function(data) {
                var q = jQuery.parseJSON(data);
                $('#txtCauHoi').val(q['question']);
                $('#txtA').val(q['option_a']);
                $('#txtB').val(q['option_b']);
                $('#txtC').val(q['option_c']);
                $('#txtD').val(q['option_d']);

                $('#modalQuestion').modal('show');

                switch (q['answer']) {
                    case 'A':
                        $('#rdOptionA').prop('checked', true);
                        break;
                    case 'B':
                        $('#rdOptionB').prop('checked', true);
                        break;
                    case 'C':
                        $('#rdOptionC').prop('checked', true);
                        break;
                    case 'D':
                        $('#rdOptionD').prop('checked', true);
                        break;
                }
            }
        })
    }
    //Load dữ liệu 
    function readData(search) {
        $.ajax({
            url: 'viewQuestion.php',
            type: 'get',
            data: {
                search: search,
                page: page
            },
            success: function(data) {
                $('#questions').empty();
                $('#questions').append(data);
            }
        });
    }

    $('#pagination').on('click', 'li a', function(event) {
        event.preventDefault();
        page = $(this).text();
        readData($('#txtSearch').val());
        if (page != 1) {
            $('#txtSearch').hide();
            $('#btnSearch').hide();
        } else {
            $('#txtSearch').show();
            $('#btnSearch').show();
        }
    })

    //Phân trang
    function pagination(search) {
        $.ajax({
            url: 'pagination.php',
            type: 'get',
            data: {
                search: search
            },
            success: function(data) {
                if (data <= 1) {
                    $('#pagination').hide();
                } else {
                    $('#pagination').show();
                    $('#pagination').empty();
                    let pagi = '';
                    for (i = 1; i <= data; i++) {
                        // '<li class="page-item disabled">';
                        // '<a class="page-link">Previous</a>';
                        // '</li>';
                        pagi += '<li class="page-item"><a class="page-link" href="#">' + i +
                            '</a></li>';
                        // '<li class="page-item">';
                        // '<a class="page-link" href="#">Next</a>';
                        // '</li>';
                    }
                    $('#pagination').append(pagi);
                }
            }
        });
    }
    </script>

</body>

</html>
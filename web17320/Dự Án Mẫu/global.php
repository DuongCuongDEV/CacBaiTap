<?php
    session_start();
    // Định nghĩa các url() cần thiết đc sử dụng trong website
    $ROOT_URL = "/";
    $CONTENT_URL = "/";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL = "$ROOT_URL/site";
    $SL_PER_PAGE = "";

    // Định nghĩa đường dẫn chứa ảnh sử dụng trong upload

    $IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"]. "$ROOT_URL/content/images";

    //2 biến toàn cục các thiết kế để chia sẻ giữa contrller và view

    $VIE_NAME = "index.php";
    $MESSAGE = "";

    /** kiểm tra sự tồn tại của một tham số trong require;
    * @param string $fieldname là tên tham số cần kiểm tra
    * @param string $target_dir là thư mục lưu file
    * @return là tên file upload 
    */

    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded['name']);
        $target_path = $target_dir. $file_name;
        move_uploaded_file($file_uploaded['tmp_name'],$target_path);
        return $file_name; 
    }

    /**
     * Tạo cookie
     * @param string $name là tên cookie
     * @param string $values là giá trị của cookie
     * @param int $day là số ngày tồn tại cookie
     */

    function add_cookie($name, $values, $day){
        setcookie($name, $values, time() + (86400 * $day), "/");
    }

    //xáo cookie
    /**
     * @param string $name là tên cookie
     */

    function delete_cookie($name){
        add_cookie($name, "" , -1);
    }

    /**
     * đọc giá trị cookie
     * @param string $name tên cookie
     * @return string giá trị của cookie
     */

    function get_cookie($name){
        return $_COOKIE[$name]??'';
    }

    /**
     * KIỂM TRA ĐĂNG NHẬP VÀ VAI TRÒ SỬ DỤNG 
     * CÁC PHP TRONG ADMIN HOẶC PHP YÊU CẦU PHẢI ĐƯỢC ĐĂNG NHẬP MỚI ĐƯỢC PHÉP SỬ DỤNG 
     * Thì cần thiết phải gọi hàm này trc
     */
    
    function check_login(){
        global $SITE_URL;
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['vai_tro']==1){
                return;
            }
            if(strpos($_SERVER['REQUEST_URL'], '/admin/')==false){
                return;
            }
        }

        $_SESSION['request_url'] = $_SERVER['REQUET_URL'];
        header("location: $SITE_URL/tai_khoan/dang_nhap.php");
    }


?>
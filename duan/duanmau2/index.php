<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "./view/header.php";
include "gobal.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if ((isset($_GET['idsp'])) && ($_GET['idsp']) > 0) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                //$ idmm laay trong phan extract($onesp)
                $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'sanpham':
            if ((isset($_POST['kyw'])) && ($_POST['kyw'])!="") {
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if ((isset($_GET['iddm'])) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
                
            } else {
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);

                // $listsanpham = loadall_sanpham($kyw,$iddm);
                //$ idmm laay trong phan extract($onesp)
                
                include "view/sanpham.php";
            break;



        case 'dangky':
            if ((isset($_POST['dangky'])) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công . vui lòng đăng nhập để thực hiện chức năng bình luận";
            }
            include "view/taikhoan/dangky.php";
            break;
            /////////////////////////////////////////
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);


                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;

                    header('location: index.php');
                    $thongbao = "Bạn đã đăng nhập thành công!";
                } else {
                    $thongbao = "Tài khoản đã tồn tại!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
            case 'value':
                # code...
                break;
            case 'thoat':
                session_unset();
                header('location: index.php');
                include "view/gioithieu.php";
                break;
            break;
        /////////////////////////////////////////////
            case 'addtocart':
                if ((isset($_POST['addtocart'])) && ($_POST['addtocart'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                   
                }
               
                 include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    // array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                    array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
       

        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {

    include "view/home.php";
}



include "view/footer.php";

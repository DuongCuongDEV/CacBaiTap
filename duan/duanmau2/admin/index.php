<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";

// controler


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // controller của danh mục
        case 'adddm':
            // kiem tra nguoi dung co click vao nut add hay ko 
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                //trong model/danhmuc.php
                insert_danhmuc($tenloai);
                //
                $thongbao = "them thanh cong!";
            }

            include "./danhmuc/add.php";
            break;
        case 'lisdm':
            //load dữ liệu trong sqlPhpMyAdmin
            //$sql = "select * from danhmuc order by id desc"; trong model/danhmuc.php
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/danhmuc.php
                delete_danhmuc($_GET['id']);
            }
            //$sql = "select * from danhmuc order by id desc"; trong model/danhmuc.php
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql="select * from danhmuc where id =".$_GET['id'];

                $dm = loadon_danhmuc($_GET['id']);
            }
            include "./danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                // $sql = "update danhmuc set name= '".$tenloai."' where id=".$id;
                //pdo_execute($sql);
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhập thành công!";
            }
            //$sql = "select * from danhmuc order by id desc"; trong model/danhmuc.php
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
           

            // end controller của danh mục
            ////////////////////////////////////////////////////////////////////////////////////////////////////
            // controller của sản phẩm
        case 'addsp':
            // kiem tra nguoi dung co click vao nut add hay ko 
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                //trong model/sanpham.php
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                //
                $thongbao = "them thanh cong!";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            // load dữ liệu trong sqlPhpMyAdmin
            // $sql = "select * from sanpham order by id desc"; trong model/sanpham.php
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw,$iddm);
            // $listsanpham = loadall_sanpham($kyw,$iddm);
            include "./sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/sanpham.php
                delete_sanpham($_GET['id']);
            }
            //$sql = "select * from sanpham order by id desc"; trong model/sanpham.php
            $listsanpham = loadall_sanpham("",0); /////////////
            include "./sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql="select * from sanpham where id =".$_GET['id'];

                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./sanpham/update.php";
            break;

        case 'updatesanpham':
            if (isset($_POST['capnhapsp']) && ($_POST['capnhapsp'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm);
                
                $thongbao = "Cập nhập thành công!";
            }
            //$sql = "select * from sanpham order by id desc"; trong model/sanpham.php
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("",0); //////////
            include "./sanpham/list.php";
            break;
            // end controller của sản phảm
            //-------------------------------------------------------------//
            // controller của tài khoản người dùng
        case 'dskh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/sanpham.php
                delete_sanpham($_GET['id']);
            }
            //$sql = "select * from sanpham order by id desc"; trong model/sanpham.php
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/sanpham.php
                delete_taikhoan($_GET['id']);
            }
            //$sql = "select * from sanpham order by id desc"; trong model/sanpham.php
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql="select * from sanpham where id =".$_GET['id'];

                $tk = loadon_taikhoan($_GET['id']);
            }
            include "./taikhoan/update.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $taikhoan = $_POST['tentk'];
                $matkhau = $_POST['mk'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                // $sql = "update sanpham set name= '".$tenloai."' where id=".$id;
                //pdo_execute($sql);
                update_sanpham($id, $taikhoan, $matkhau, $email, $address, $tel);
                $thongbao = "Cập nhập thành công!";
            }
            //$sql = "select * from sanpham order by id desc"; trong model/danhmuc.php
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;
            // end controller của tài khoản người dùng
            //-------------------------------------------------------------//
            // controller của bình luận
        case 'dsbl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/binhluan.php
                delete_sanpham($_GET['id']);
            }
            //$sql = "select * from binhluan order by id desc"; trong model/binhluan.php
            $listbinhluan = loadall_binhluan(0);
            include "./binhluan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // trong model/binhluan.php
                delete_binhluan($_GET['id']);
            }
            //$sql = "select * from binhluan order by id desc"; trong model/binhluan.php
            $listbinhluan = loadall_binhluan(0); /////////////
            include "./binhluan/list.php";
            break;

        /////////////////////////////////////
        case 'thongke':
            $listthongke=loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


//
include "footer.php";

\
<div class="deal" style="background-color: wheat;">
    <marquee behavior="" sytle="height: 50px; width: 50%;back" direction="">Chương trình giảm giá 30% nhân dịp khai trương shop diễn ra từ 10/10 đến 15/10 ! Mua ngay .</marquee>
</div>
<article>
    <div class="home" style="text-align:left;margin-left: 60px">
        <a href="" style="color:red ;">
            <i class="fa-solid fa-house" style="margin-left: 35px"></i>
            <p style="font-size: 25px;">Trang chủ</p>
        </a>
    </div>
</article>
<div class="login" style="text-align: center">
</div>
</nav>
<h2 style="text-align: center;font-family: Tahoma">Thư Mục Sản Phẩm</h2>
<div class="chung" style="display: grid;grid-template-columns: 2fr 1fr ">
    <div class="title1" style="display: grid;grid-template-columns: 1fr 1fr 1fr;margin-top: 30px">
        <?php foreach ($spnew as $sp) {
            extract($sp);
            $hinh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<div style="margin-left: 40px;">
                    <div style="border: 5px solid wheat"><img src="' . $hinh . '" height="330px" width="330px" alt=""></div>
                     <p style="color: red;font-size: 30px;font-weight: bold;margin: 5px">' . $price . '</p>
                     <div style="font-size: 25px">Tên Sản Phẩm :</div><a href="' . $linksp . '" style="font-size:25px"> '.$name.'</a>
                     <br>
                   
                     <input type="hidden" name="id" value="'.$id.'">
                     <input type="hidden" name="name" value="'.$name.'">
                     <input type="hidden" name="img" value="'.$img.'">
                     <input type="hidden" name="price" value="'.$price.'">
                     <input type="submit" name="addtocart" value="Thêm Vào Giỏ Hàng" style="background-color: #afd9ee;margin: 10px;padding: 10px;border-radius: 7px;margin-left: 0px;margin-top: 40px;">
                 </form>
                    </div>  ';
        }
        ?>
    </div>
    <div class="title2" style="margin-left: 100px">
        <h2 style="margin-bottom: 25px">Danh Mục Hàng Hóa</h2>
        <ul style="line-height: 50px;background-color:wheat;border-radius: 12px ">
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
<!--            <div class="searbox">-->
<!--                <form action="index.php?act=sanpham" style="float: right;">-->
<!--                    <input type="text" name="kyw">-->
<!--                    <input type="submit" name="timkiem" value="Tìm kiếm">-->
<!--                </form>-->
<!--            </div>-->
        </ul>
    </div>
    
</div>
<div>
    <h2 style="font-size: 40px;text-align: center;margin: 30px;color: red">Sản Phẩm Mới Nhất</h2>
    <ul style="display: grid;grid-template-columns: 1fr 1fr 1fr;margin-top: 30px;margin-left: 200px">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div>
                            <img src="' . $img . '" alt="" width="330px" height="330px">
                            <p style="margin-left: 110px"><a href="' . $linksp . '">' . $name . '</a></p> 
                        </div>';
        }
        ?>
    </ul>
</div>
<div class="bnt" style="text-align: center">
    <button type="submit" style="width:100px;height: 50px;border-radius: 10px;background-color: #5bc0de;margin-top: 20px">Xem thêm</button>
</div>

<div class="dangky" style="border: 1px solid white;background-color: #afd9ee;margin: 20px 200px;border-radius: 10px;line-height: 40px">
    <h1 style="text-align: center">Tài khoản</h1>
    <?php
    
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>
        <div style="text-align: center;font-size: 20px">
            Xin chào
            <div >  <?= $ho_ten ?></div>
        </div><br>
        <div style="text-align: center;font-size: 20px">
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
            <?php if ($role == 0) { ?>
                <li><a href="admin/index.php">Đăng nhập Admin</a></li>
            <?php } ?>
            <li><a href="index.php?act=thoat" style="color: red;font-weight: bold">Thoát</a></li>
        </div><br>
    <?php
    } else {
    ?>
        <form action="index.php?act=dangnhap" method="post">
            <div>
                Tên Đăng Nhập
                <input type="text" name="user" style="height: 30px">
            </div><br>
            <div>
                Mật khẩu
                <input type="password" name="pass" style="height: 30px">
            </div><br>
            <div>
                <input type="checkbox"> Ghi nhớ tài khoản
            </div>
            <div>
                <input type="submit" value="Đăng nhập" name="dangnhap" style="width:100px;height: 50px;border-radius: 10px;background-color: #5bc0de;margin-right: 1000px">
            </div>

        </form>
        <li style="margin-left: 150px"><a href="">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng ký thành viên </a></li>

    <?php } ?>

</div>
<!-- <div class="dangky">
                <h1>Tài khoản</h1>
                <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                ?>
                <div>
                    Xin chào
                    <?=$ho_ten ?>
                </div><br>
                <div>
                   <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                   <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                   <?php if($role==0) {?>
                   <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                   <?php }?>
                   <li><a href="index.php?act=thoat">Thoát</a></li>
                   </div><br>
<!--                     
                
              
                <?php 
                    }else{
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    <div>
                        tên đăng NhậpS
                        <input type="text" name="user">
                    </div><br>
                    <div>
                        Mật khẩu 
                        <input type="password" name="pass">
                    </div><br>
                    <div>
                        <input type="checkbox"> ghi nhớ tài khoản
                    </div>
                    <div>
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                    
                </form>
                <li><a href="">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký thành viên </a></li>

                    <?php }?>
    </div>
    <div> -->
</div>
<!-- <p style="font-weight: bold;font-size: 30px">' . $name . '</p> -->

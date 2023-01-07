<?php
    if(is_array($tk)){
        extract($tk);
    }


?>
<div class="row">
            <div class="row">
                <h1>Cập nhập tài khoản</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetk" method="post">
                        <div class="row mb10">
                            mã tài khoản<br>
                            <input type="text" name="matk" disabled>
                        </div>
                        <div class="row mb10">
                            tên tài khoản <br>
                            <input type="text" name="tentk" value="<?php if(isset($ho_ten)&& $ho_ten!="") echo $ho_ten ?>" >
                        </div>
                        <div class="row mb10">
                            Mật khẩu<br>
                            <input type="text" name="mk"value="<?php if(isset($pass)&& $pass!="") echo $pass ?>" >
                        </div>
                        <div class="row mb10">
                            Email<br>
                            <input type="text" name="email" value="<?php if(isset($email)&& $email!="") echo $email ?>" >
                        </div>
                        <div class="row mb10">
                            địa chỉ<br>
                            <input type="text" name="address" value="<?php if(isset($address)&& $address!="") echo $address ?>" >
                        </div>
                        <div class="row mb10">
                            số điện thoai<br>
                            <input type="text" name="tel" value="<?php if(isset($tel)&& $tel!="") echo $tel ?>" >
                        </div>
                        <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&& $id>0) echo $id ?>">
                            <input type="submit" name="capnhap" value="CẬP NHẬP">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=dskh"><input type="button" value="Danh Sách"></a>
                        </div>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>


                </form>
            </div>
        </div>
    </div>
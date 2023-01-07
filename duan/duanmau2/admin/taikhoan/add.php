<div class="row">
            <div class="row">
                <h1>THÊM MỚI Tai khoản</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addtk" method="post">
                        <div class="row mb10">
                            mã tài khoản<br>
                            <input type="text" name="matk" disabled>
                        </div>
                        <div class="row mb10">
                            tên tài khoản <br>
                            <input type="text" name="tentk" >
                        </div>
                        <div class="row mb10">
                            Mật khẩu<br>
                            <input type="text" name="mk" >
                        </div>
                        <div class="row mb10">
                            Email<br>
                            <input type="text" name="email" >
                        </div>
                        <div class="row mb10">
                            địa chỉ<br>
                            <input type="text" name="address" >
                        </div>
                        <div class="row mb10">
                            số điện thoai<br>
                            <input type="text" name="tel" >
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="THÊM MỚI">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=listk"><input type="button" value="Danh Sách"></a>
                        </div>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>
                </form>
            </div>
        </div>
    </div>
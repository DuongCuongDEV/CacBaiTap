<div class="row mb">
    <div class="boxtral mr">
        <div class="row mb">

        <div class="boxtitle"> ĐĂNG KÍ THÀNH VIÊN</div>
        <div class="row boxcontent">
            <form action="index.php?act=dangky" method="POST">
                <div class="dangky">
                email
                    <input type="email" name="email">
                </div> <br>
                <div class="dangky">
                tên đăng nhập<input type="text" name="user">
                </div><br>
                <div class="dangky">
                mật khẩu<input type="password" name="pass">
                </div> <br>
                <div class="dangky">
               <input type="submit" value="Đăng kí" name="dangky">
                </div> 
                <div class="dangky">
                <input type="reset" value="Nhập lại">
                </div>    
                    
            </form>
            <h2>
            <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
            ?>
            </h2>
        </div>
        </div>
    </div>
</div>
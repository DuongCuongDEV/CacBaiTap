<!-- <?php
    if(is_array($dm)){
        extract($dm);
    }


?>

<div class="row">
            <div class="row">
                <h1>CẬP NHẬP SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatedm" method="post">
               
                        <div class="row mb10">
                            Mã Loại<br>
                            <input type="text" name="maloai" disabled>
                        </div>
                        <div class="row mb10">
                            Tên Loại<br>
                            
                            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>" >
                        </div>
                        <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&$id>0) echo $id; ?>">
                            <input type="submit" name="capnhap" value="Cập nhập">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=lisdm"><input type="button" value="Danh Sách"></a>
                        </div>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>


                </form>
            </div>
        </div>
    </div> -->


    <?php
    if(is_array($dm)){
        extract($dm);
    }


?>

<div class="row">
            <div class="row">
                <h1>CẬP NHẬP LOẠI HÀNG Hóa</h1>
            </div>
            <div class="row frmcontent" style="background-color: #afd9ee;border: 1px solid gray;
margin: 20px 200px;border-radius: 20px">
                <form action="index.php?act=updatedm" method="post"  style="margin: 40px">
                        <div class="row mb10">
                            Mã Loại<br>
                            <input type="text" name="maloai" disabled>
                        </div>
                        <div class="row mb10">
                            Tên Loại<br>
                            <input type="text" name="tenloai" value="<?php if(isset($name)&& ($name)!="") echo $name ?>">
                        </div>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?php if(isset($id)&& ($id)>0) echo $id ?>">
                            <input type="submit" name="capnhap" value="CẬP NHẬP" style="background-color: #ce8483">
                            <input type="reset" value="Nhập lại" style="background-color: #ce8483">
                            <a href="index.php?act=lisdm"><input type="button" value="Danh Sách" style="background-color: #ce8483"></a>
                        </div>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>


                </form>
            </div>
        </div>
    </div>
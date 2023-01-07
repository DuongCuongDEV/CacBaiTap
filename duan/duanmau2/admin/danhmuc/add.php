
    <div class="row" >
            <div class="row">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent" style="background-color: #afd9ee;border: 1px solid gray;
margin: 20px 200px;border-radius: 20px">
                <form action="index.php?act=adddm" method="post" style="margin: 40px">
                        <div class="row mb10">
                            Mã Loại<br>
                            <input type="text" name="maloai" disabled>
                        </div>
                        <div class="row mb10">
                            Tên Loại<br>
                            <input type="text" name="tenloai" >
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="THÊM MỚI" style="background-color: #ce8483">
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
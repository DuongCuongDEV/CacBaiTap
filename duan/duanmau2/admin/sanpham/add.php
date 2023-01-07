<div class="row">
            <div class="row">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent" style="background-color: #afd9ee;border: 1px solid gray;
margin: 20px 200px;border-radius: 20px">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" style="margin: 40px">
                        <div class="row mb10">
                            Danh muc <br>
                            <select name="iddm" id="">
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row mb10">
                            Tên sản phẩm<br>
                            <input type="text" name="tensp" >
                        </div>
                        <div class="row mb10">
                            Giá<br>
                            <input type="text" name="giasp" >
                        </div>
                        <div class="row mb10">
                            hình ảnh<br>
                            <input type="file" name="hinh" >
                        </div>
                        <div class="row mb10">
                            Mô tả<br>
                            <textarea name="mota" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="THÊM MỚI" style="background-color: #ce8483">
                            <input type="reset" value="Nhập lại" style="background-color: #ce8483">
                            <a href="index.php?act=listsp"><input type="button" value="Danh Sách" style="background-color: #ce8483"></a>
                        </div>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>


                </form>
            </div>
        </div>
    </div>

   
   
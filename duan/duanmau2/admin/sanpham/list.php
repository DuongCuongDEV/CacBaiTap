<div class="row">
    <div class="row mb menu">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <form action="index.php?act=listsp" method="POST" style="text-align: center">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected >All</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="choose">
    </form>
    <div class="row frmcontent">
        <form action="#" method="post" style="margin-left: 400px;width: 100%">
            <div class="row mb10 fromdsloai" >
                <table border="1px" style="background-color: #afd9ee;border-radius: 10px;
margin: 10px">
                    <tr style="background-color: white">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>GIá</th>
                        <th>mô tả</th>
                        <th>Lượtxem</th>
                        <th>Danh mục</th>
                        <td></td>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='50px'";
                        } else {
                            $hinh = "no photo";
                        }
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $price . '</td>
                                <td>' . $mota . '</td>
                                <td>' . $luotxem . '</td>
                                <td>' . $iddm . ' </td>
                                <td><a href="' . $suasp . '" ><input type="button" value="sửa" style="background-color: #ce8483"></a> <a href="' . $xoasp . '"><input type="button" value="xóa" style="background-color: #ce8483"></a></td>
                            </tr>';
                    }
                    ?>



                </table>
            </div>

            <div class="row mb10" style="margin-left: 200px">
                <input type="button" value="chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Bỏ chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Xóa các mục đã chọn" style="background-color: #ce8483">
                <a href="index.php?act=addsp"><input type="button" value="Thêm mới" style="background-color: #ce8483"></a>
            </div>
        </form>
    </div>
</div>
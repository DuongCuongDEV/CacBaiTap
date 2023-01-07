<!-- <div class="row">
    <div class="row mb menu">
        <h1>Danh sách loại hàng</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 fromdsloai">
                <table border="1px">
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <td></td>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td><a href="' . $suadm . '"><input type="button" value="sửa"></a> <a href="' . $xoadm . '"><input type="button" value="xóa"></a></td>
                            </tr>';
                    }
                    ?>



                </table>
            </div>

            <div class="row mb10">
                <input type="button" value="chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>
            </div>
        </form>
    </div>
</div> -->

<div class="row">
    <div class="row mb menu" style="margin: 20px">
        <h1>Danh sách loại hàng</h1>
    </div>
    <div class="row frmcontent" style="margin-left: 500px;width: 90%">
        <form action="#" method="post">
            <div class="row mb10 fromdsloai">
                <table border="1px"style="background-color: #afd9ee;border-radius: 10px;
margin: 10px">
                    <tr style="background-color:white;height: 50px ">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <td></td>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="sửa" style="background-color: #ce8483"></a> <a href="'.$xoadm.'"><input type="button" value="xóa"style="background-color: #ce8483"></a></td>
                            </tr>';
                    }
                    ?>
                    
                    

                </table>
            </div>

            <div class="row mb10" style="margin-left: 150px">
                <input type="button" value="chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Bỏ chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Xóa các mục đã chọn" style="background-color: #ce8483">
                <a href="index.php?act=adddm"><input type="button" value="Thêm mới" style="background-color: #ce8483"></a>
            </div>
        </form>
    </div>
</div>
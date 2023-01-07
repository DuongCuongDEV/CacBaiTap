<div class="row">
    <div class="row mb menu"style="margin: 20px">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 fromdsloai">
                <table border="1px"style="background-color: #afd9ee;margin-left: 450px">
                    <tr style="background-color: white;height: 50px">
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung bình luận</th>
                        <th>IDUser</th>
                        <th>ID Pro</th>
                        <th>Ngày bình luận</th>
                        
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl="index.php?act=suabl&id=".$id;
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$suabl.'"><input type="button" value="sửa"></a> <a href="'.$xoabl.'"><input type="button" value="xóa"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>

            <div class="row mb10" style="text-align: center;">
                <input type="button" value="chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Bỏ chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Xóa các mục đã chọn" style="background-color: #ce8483">
            </div>
        </form>
    </div>
</div>
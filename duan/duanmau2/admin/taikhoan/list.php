<div class="row">
    <div class="row mb menu">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 fromdsloai">
                <table border="1px"style="background-color: #afd9ee;border: 1px solid gray;
margin: 20px 0px;border-radius: 10px;width:100%">
                    <tr style="background-color: white">
                        <th></th>
                        <th>Mã Tài khoản</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ </th>
                        <th>điện thoại</th>
                        <th>vai trò</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$ho_ten.'</td>
                                <td>'.$mat_khau.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suatk.'"><input type="button" value="sửa" style="background-color: #ce8483"></a> <a href="'.$xoatk.'"><input type="button" value="xóa" style="background-color: #ce8483"></a></td>
                            </tr>';
                    }
                    ?>
                    
                    

                </table>
            </div>

            <div class="row mb10" style="text-align: center">
                <input type="button" value="chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Bỏ chọn tất cả" style="background-color: #ce8483">
                <input type="button" value="Xóa các mục đã chọn" style="background-color: #ce8483">
                <a href="index.php?act=addtk><input type="button" value="Thêm mới" ></a>
            </div>
        </form>
    </div>
</div>
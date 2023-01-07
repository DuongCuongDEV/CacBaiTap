<div style="text-align: center">
    <h2 style="color:indianred;margin: 20px">Giỏ hàng</h2>
    <table border="1px"style="width: 100%;background-color: #afd9ee;border-radius: 10px">
        <tr style="background-color: white;height: 50px">
            <th>Hình</th>
            <th>Sản phảm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>

        </tr>
        <?php
            $tong=0;
            $i=0;
         foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;

            $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xóa"></a>';
            echo '   
            <tr>
                <td><img src="'.$hinh.'" alt="" width=100px></td>
                <td>'.$cart[1].'</td>
                <td>'.$cart[3].'</td>
                <td>'.$cart[4].'</td>
                <td>'.$ttien.'</td>
                <td>'.$xoasp.'</td>
            </tr>';
                $i+=1;
        }
                echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
                <td></td>
                </tr>';

        ?>
        <!-- <tr>

            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>

            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr> -->

    </table>

</div>
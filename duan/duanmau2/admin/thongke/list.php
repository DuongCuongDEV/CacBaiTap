<div>
    <h2>Thống kê sản phẩm</h2>
    <table border="1px">
        <tr>
            <th>MÃ DANH MỤC</th>
            <th>TÊN DANH MỤC</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ THẤP NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
            
        </tr>
        <?php
            
         foreach ($listthongke as $thongke) {
                extract($thongke);

            echo '   
            <tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$maxprice.'</td>
                <td>'.$minprice.'</td>
                <td>'.$avgprice.'</td>

            </tr>';
          
               
        }
        echo' <button><a href="index.php?act=bieudo">Bieu do</a></button>';
        ?>
    </table>

</div>
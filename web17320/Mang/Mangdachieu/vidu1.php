<?php
$manghaichieu = [[1,2,3],[4,5,6],[7,8,9],[10,11,12],[13,14,15],[16,17,18]];
//lấy phần từ 11,14,18 sau đó tính tổng.
echo $manghaichieu[3][1]."</br>";
echo $manghaichieu[4][1]."</br>";
echo $manghaichieu[5][2]."</br>";
$tong=0;
for($i=0;$i<count($manghaichieu);$i++){
    for($j=0;$j<count($manghaichieu[$i]);$j++){
        echo $manghaichieu[$i][$j]."</br>";
        $tong = $manghaichieu[3][1]+$manghaichieu[4][1]+$manghaichieu[5][2];
    }
}
echo "Tổng của 3 số = $tong";
//hiển thị các phần tử là số chẵn trong mảng 2 chiều
//tính tổng các phần tử trong mảng 2 chiều là số lẻ
//sử dụng foreach duyệt mảng 2 chiều trên và in ra các số nguyên tố có trong mảng
?>
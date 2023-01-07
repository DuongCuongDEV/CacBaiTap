<?php
    //tính tổng các phần tử trong mảng 2 chiều là số lẻ
    $manghaichieu = [[1,2,3],[4,5,6],[7,8,9],[10,11,12],[13,14,15],[16,17,18]];
    $tong = 0;
    for($i=0;$i<count($manghaichieu);$i++){
        for($j=0;$j<count($manghaichieu[$i]);$j++){
            if($manghaichieu[$i][$j]%2==1){
                $tong = $tong + $manghaichieu[$i][$j];
            }
        }
    }
    echo "Tổng của các số lẻ là: $tong";
?>
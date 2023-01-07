<?php
    $manghaichieu = [[1,2,3],[4,5,6],[7,8,9],[10,11,12],[13,14,15],[16,17,18]];
    //hiển thị các phần tử là số chẵn trong mảng 2 chiều
    for($i=0;$i<count($manghaichieu);$i++){
        for($j=0;$j<count($manghaichieu[$i]);$j++){
            if($manghaichieu[$i][$j]%2==0){
                echo $manghaichieu[$i][$j]."</br>";
            }
        }
    }
?>
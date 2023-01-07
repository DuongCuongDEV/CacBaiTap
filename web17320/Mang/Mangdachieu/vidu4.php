<?php
    $manghaichieu = [[1,2,3],[4,5,6],[7,8,9],[10,11,12],[13,14,15],[16,17,18]];
    $tong=0;
   foreach($manghaichieu as $index=>$value){
    foreach($value as $index=>$val){
        $flag = true;
        if($val<2){
            $flag = false;
        }else{
            for($i=2;$i<$val;$i++){
                if($val%$i==0){
                    $flag = false;
                }
            }
        }
        if($flag==true){
            echo $val ." Là số nguyên tố" ."</br>";
            $tong = $tong + $val;
        }else{
            echo $val ."Không là số nguyên tố"."</br>";
        }
    }
}
echo "Tổng số nguyên tố = $tong";
?>
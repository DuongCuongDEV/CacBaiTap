<?php
 $n=28;
 $tong=0;
 for($i=1;$i<$n;$i++){
    if($n%$i==0){
        $tong=$tong + $i;
    }
 }
 if($tong==$n){
    echo "Là số hoàn hảo";
 }else{
    echo "Không là số hoàn hảo";
 }
?>
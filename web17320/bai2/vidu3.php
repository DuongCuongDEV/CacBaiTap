<?php
 for($i=0;$i<10;$i++){
    echo "Hello word"."</br>"; 
 }
 //
 $n=20;
 for($i=0;$i<$n;$i++){
    if($i%2==0){
        echo $i ."</br>";
    }
 }
 //
 $a=5;
 $tich=1;
 for($i=1;$i<=$a;$i++){
    $tich = $tich * $i;
 }
 echo $tich ."</br>";
 //
 $b=2;
 $c=3;
 $luythua=1; 
 for($i=1;$i<=$c;$i++){
    $luythua *= $b; 
 }
 echo $luythua;
?>
<?php
function songuyento($n){
    $flag = true;
    if($n<2){
        $flag = false;
    }else{
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                $flag = false;
            }
        }
    }
    return $flag;
}
if(songuyento(17)==true){
    echo "Là số nguyên tố";
}else{
    echo "Không là số nguyên tố";
}
?>
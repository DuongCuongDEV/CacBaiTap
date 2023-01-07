<?php
    $a=2;
    $n=3;
    function luythuaco($a,$n){
        $luythua=1;
        for($i=1;$i<=$n;$i++){
            $luythua = $luythua * $a;
        }
        return $luythua;
    }
    echo luythuaco($a,$n)."</br>";
?>
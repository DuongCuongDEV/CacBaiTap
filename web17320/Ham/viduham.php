<?php
    $a=1;
    $b=2;
    $c=3;
    $d=4;
    function hamtinhtongcotrave($a,$b){
        return $a + $b;
    }
    echo hamtinhtongcotrave($a,$b)."</br>";
    echo hamtinhtongcotrave($b,$c)."</br>";
    echo hamtinhtongcotrave($c,$d)."</br>";
    echo hamtinhtongcotrave($d,$a)."</br>";

    function hamtinhtongkhongtrave($a,$b,$d){
        echo $a + $b +$d;
    }
    hamtinhtongkhongtrave($a,$b, $d:4)."</br>";
    hamtinhtongkhongtrave($b,$c, $d:5)."</br>";
    hamtinhtongkhongtrave($c,$d, $d:6)."</br>";
    hamtinhtongkhongtrave($d,$a, $d:7)."</br>";
?>
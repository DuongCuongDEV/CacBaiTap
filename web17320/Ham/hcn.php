<?php
    $a=2;
    $b=3;
    function cotraveS($a,$b){
       return $dientich = $a * $b;
    }
    echo cotraveS($a,$b)."</br>";
    function cotraveP($a,$b){
        return $chuvi = ($a+$b)*2;
    }
    echo cotraveP($a,$b)."</br>";
    //Không trả về;
    function khongtraveS($a,$b){
        echo ($dientich=$a*$b)."</br>";
    }
    khongtraveS($a,$b);
    function khongtraveP($a,$b){
        echo ($chuvi=($a+$b)*2)."</br>";
    }
    khongtraveP($a,$b);
?>

<?php
$a=1;
$b=4;
$c=2;
$delta=($b*$b)-(4*$a*$c);
if($delta<0){
    echo "Phương trình vô nghiệm";
}elseif($delta==0){
    $x1 = $x2 = -b/(2*$a);
    echo "Phương trình có nghiệm kép" .$x1;
}else{
    $x3=-$b+sqrt($delta)/(2*$a);
    $x4=-$b-sqrt($delta)/(2*$a);
    echo "Phương trình có 2 nghiệm"."</br>";
    echo ($x3) ."</br>";
    echo ($x4) ."</br>";
}
?>
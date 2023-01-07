<?php
//Bài 1: Khai báo 3 giá trị a,b,c yêu cầu giải pt bậc 2 ax^2 + bx + c = 0 hiển thị ra nghiệm
$a=1;
$b=4;
$c=3;
$delta = ($b*$b)-(4*$a*$c);
if($delta<0){
    echo "Phương trình vô nghiệm";
}elseif($delta==0){
    $x=(-$b/(2*$a));
    echo "Phương trình có nghiệm kép $x";
}else{
    $x1=-$b+sqrt($delta)/(2*$a);
    $x2=-$b-sqrt($delta)/(2*$a);
    echo "Phương trình có nghiệm x1 = $x1"."</br>";
    echo "Phương trình có nghiệm x2 = $x2"."</br>";
}
?>

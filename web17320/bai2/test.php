<?php
$x=100;
if($x%2==0){
    echo "Là số chẵn"."</br>";
}else{
    echo "Là số lẻ";
}
//
$a=2;
$b=3;
$y=-$b/$a;
if($a==0){
    if($b==0){
        echo "Phương trình vô số nghiệm";
    }else{
        echo "Vô nghiệm";
    }
}else{
    echo "Phương trình có nghiệm là $y"."</br>";
}
//
$c=7;
$d=8;
$e=9;
$q=($c+$d+$e)/3;
if($q>=0 && $q <4){
    echo "Xếp loại yếu";
}elseif($q>=4 && $q <6){
    echo "Xếp loại TB";
}elseif($q>=6 && $q<8){
    echo "Xếp loại khá";
}elseif($q>=8 && $q<=10){
    echo "Xếp loại giỏi"."</br>";
}else{
    echo "Điểm $q không hợp lệ";
}
//
$sodien=200;
if($sodien>0 && $sodien<=50){
    echo ($sodien*1.678)."VNĐ";
}elseif($sodien>50 && $sodien<=100){
    echo ($sodien*1.678)+(($sodien-50)*1.734)."VNĐ";
}elseif($sodien>100 && $sodien<=200){
    echo ($sodien*1.678)+(($sodien-50)*1.734)+(($sodien-100)*2.014)."VNĐ"."</br>";
}elseif($sodien>200 && $sodien<=300){
    echo ($sodien*1.678)+(($sodien-50)*1.734)+(($sodien-100)*2.014)+(($sodien-200)*2.536)."VNĐ";
}elseif($sodien>300 && $sodien<=400){
    echo ($sodien*1.678)+(($sodien-50)*1.734)+(($sodien-100)*2.014)+(($sodien-200)*2.536)+(($sodien-300)*2.843)."VNĐ";
}else{
    echo ($sodien*1.678)+(($sodien-50)*1.734)+(($sodien-100)*2.014)+(($sodien-200)*2.536)+(($sodien-300)*2.843)+(($sodien-400)*2.927)."VNĐ";
}
//
$n=3;
$m=4;
$l=2;
$delta=($m*$m)-(4*$n*$l);
if($delta>0){
    echo "Phương trình vô nghiệm";
}elseif($delta==0){
    echo "Phương trình có nghiệm kép" .$t1 = $t2 = ;
}
?>
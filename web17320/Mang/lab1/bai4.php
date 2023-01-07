<?php
    //Bài 4: Khai báo 1 mảng gồm 10 phần tử yêu cầu :
    //- Đếm xem trong mảng có bao nhiêu số nt
    //- Tính tổng các số nt trong mảng
    //- Tính tổng cá số nt và số chẵn trong mảng
    $mang = [1,2,3,4,5,6,7,8,9,10];
    function ktrasont($n){
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
    function ktrasochan($n){
        $flag = false;
        if($n%2==0){
            $flag = true;
        }
        return $flag;
    }
    $tong1 = 0;
    $tong2 = 0;
    $tong = 0;
    $dem=0;
    foreach($mang as $index=>$value){
        if(ktrasont($value)==true){
            echo "$value Là số nguyên tố"."</br>";
            $tong1 = $tong1 + $value;
            $dem++;
        }else{
            echo "$value không là số nguyên tố"."</br>";
        }  
        if(ktrasochan($value)==true){
            $tong2 = $tong2 + $value;
        }
    }
    foreach($mang as $index=>$value){
        if(ktrasont($value)==true && ktrasochan($value)==true){
            $tong = $tong1 + $tong2;
        }
    }
    echo "có $dem số nguyên tố"."</br>";
    echo "Tổng của các số nguyên tố = $tong1"."</br>";
    echo "Tổng của các số chẵn và số nt = $tong"."</br>";
?>

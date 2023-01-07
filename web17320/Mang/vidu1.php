<?php
 $mang = [1,2,3,4,5,6];
    echo "$mang[0]"."</br>";
    echo ($mang[0]+$mang[2])."</br>";
    //
 echo "tổng số phần tử của mảng là ".count($mang)."</br>";
    for($i=0;$i<count($mang);$i++){
        echo $mang[$i]."</br>";
    }
    //hiển thị các phần tử trong mảng là số chẵn
    //tính tổng các phần tử trong mảng
    //đếm xem trong mảng có bao nhiêu số lẻ
    $tong = 0;
    $dem=0;
    for($i=0;$i<count($mang);$i++){
        if($mang[$i]%2==0){
            echo "$mang[$i]"."</br>";
        }
        $tong = $tong + $mang[$i];
        //tong = 0 + mang[0] = 0+1=1;
        //tong = 1 + mang[1] = 9 + 2 = 3;
        if($mang[$i]%2||0){
            $dem++;
        }
    }
    echo "$tong"."</br>";
    echo "$dem";
    //hiển thị các phần tử trong mảng là số nguyên tố,
    //tính tổng các phần tử là số nguyên tố trong mảng.
    function songuyento($n){
        $flag = true;
        $dem=0;
        $tong=0;
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
    //tìm phần tử lớn nhất và nhỏ nhất trong mảng
    // tìm phần tử là số chẵn lớn nhất trong mảng
    // tìm phần từ là số nguyên tố lớn nhất trong mảng
?>
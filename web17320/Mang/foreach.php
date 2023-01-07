<?php
    $mang = [9,12,14,17,20,22,5,28,6];
    foreach($mang as $index=>$value){
        echo $value."</br>";
        //index tương đương với $i;
        //value tương đương với số các phần tử của mảng $mang[$i];
    }
    $tong = 0;
    $dem = 0;
    foreach($mang as $index => $value){
        if($value%2==0){
            echo "các số chắn là $value"."<br/>";
        }
        $tong = $tong + $value;
        if($value%2==1){
            $dem++;
        }
    }
    echo "tổng bằng = $tong"."</br>";
    echo "trong mảng có $dem số lẻ" ."</br>";
    //
    //hiển thị các phần tử trong mảng là số nguyên tố,
    //tính tổng các phần tử là số nguyên tố trong mảng.
    $dem=0;
    $tong=0;
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
    foreach($mang as $index=>$value){
        if(songuyento($value)==true){
            echo "$value Là số nguyên tố"."</br>";
            $tong = $tong + $value;
            //tong = 0 + 17 = 17;
            //tong = 17 + 5 = 22;
        }
    }
    echo "Tổng là: $tong"."</br>";
    //hiển thị các số trong mảng là số hoàn hảo
    //(Số hoàn hảo là số có các ước cộng lại bằng chính nó)
    $tong = 0;
    function sohoanhao($n){
        $tong = 0;
        $flag = true;
        for($i=1;$i<$n;$i++){
            if($n%$i==0){
                $tong = $tong + $i;
                //tong = ước thứ 1 + 0 = tổng thứ 1;
                //tong = tổng thứ 1 + ước thứ 2;
            }
        }
        if($n==$tong && $n!=0){
            $flag = true;
        }else{
            $flag = false;
        }
        return $flag;
    }
    foreach($mang as $index=>$value){
        if(sohoanhao($value)==true){
            echo "$value Là số hoàn hảo"."</br>";
        }
    }
?>
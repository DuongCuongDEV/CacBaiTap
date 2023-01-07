<?php
    //Đếm phần tử mảng
    $a = [3,4,5,'b'];
    var_dump (count($a));
    //mảng lấy các value
    $array = ["size"=>"XL","color"=>"red"];
    $ar_value = array_values($array); 
    $ar_key = array_keys($array);
    function show($array){    
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    show($ar_value);
    //Xóa phần tử ở cuối mảng 
    $stack = array("banana","orange","apple");
    echo "before";
    show($stack);
    $friut = array_pop($stack);
    echo "after:";
    show($stack);
    echo $friut;
    //thêm một hoặc nhiều phần tử
    $sta = array("orange","banana");
    echo "chưa thêm:";
    show($sta);
    $num = array_push($sta,"apple");
    echo "đã thêm:";
    show($sta);
    echo $num;
    //sắp xếp mảng
    $b = ['b','a','c','d'];
    echo "Chưa sắp xếp:";
    show($b);
    sort($b);
    echo "đã sắp xếp";
    show($b);
    //trộn các mảng
    $a1=[2,3];
    $a2=[8,9];
    $c = array_merge($a1,$a2);
    
    


?>
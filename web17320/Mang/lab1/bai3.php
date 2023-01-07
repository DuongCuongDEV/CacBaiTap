<?php
    //Bài 3: Xây dựng hàm kiểm tra số nguyên tố và trả về giá trị true false
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
    if(ktrasont(10)==true){
        echo "là số nguyên tố";
    }else{
        echo "không là số nguyên tố";
    }

?>
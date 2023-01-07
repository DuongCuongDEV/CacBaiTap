<?php
//Bài 2: Mô phỏng hàm tính lũy thừa với 2 tham số truyền vào là a và n cho ra kết quả a^n
function luythua($a,$n){
    $luythua = 1;
    for($i=1;$i<=$n;$i++){
        $luythua = $luythua * $a;
    }
    return $luythua;
}
    echo luythua(3,3);
?>
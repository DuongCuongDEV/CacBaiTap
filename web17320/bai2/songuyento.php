<?php
        $a=5;
    function check_1($a){
        for($i=2;$i<=sqrt($a);$i++){
            if($a%$i==0){
            return false;
            }
        }
        return true;
    }
        if(check_1($a)){
            echo "$a Là số nguyên tố";
        }else{
            echo "$a Không là số nguyên tố";
        }
?>
<?php
$aa=15;
    for($i=2;$i<$aa;$i++){
        if($aa%2==0){
            echo "là số nguyên tố";
        }else{
            echo "không là số nguyên tố";
        }
    }
?>
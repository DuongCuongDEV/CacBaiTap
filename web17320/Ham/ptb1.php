<?php
    $a=2;
    $b=3;
    function ptb1trave($a,$b){
        if($a==0){
            if($b==0){
                return "Phương trình có vô số nghiệm";
            }else{
                return "Phương trình vô nghiệm";
            }
        }else{
            return "có nghiệm là: (-$b/$a)";
        }
    }
    echo ptb1trave($a,$b)."</br>";
    //Không trả về
    function ptb1khong($a,$b){
        if($a==0){
            if($b==0){
                echo "Phương trình vô số nghiệm";
            }else{
                echo "Vô nghiệm";
            }
        }else{
            echo "Phương trình có nghiệm là: (-$b/$a)"."</br>";
        }
    }
    ptb1khong($a,$b);
?>
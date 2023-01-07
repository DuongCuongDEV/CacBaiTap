<?php
$min=5;
$max=12;
$tong=0;
$sochan=0;
for($i=5;$i<=$max;$i++){
    if($i%2==0){
        $tong = $tong + $i;
        //S=0+6=6;
        //s=6+8=14;
        //s=14+10=24;
        $sochan++;
    }
}
echo ($tong/$sochan);
?>
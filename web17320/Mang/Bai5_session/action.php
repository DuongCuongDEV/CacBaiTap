<?php
    session_start();
    echo $_SESSION["a"]."</br>";
    $tong=0;
    $hieu = 0;
    echo "Tổng = ". $tong=$_SESSION["a"]+$_SESSION["b"]."</br>";
    echo "hiệu = ". $hieu = $_SESSION["a"] - $_SESSION["b"];
?>
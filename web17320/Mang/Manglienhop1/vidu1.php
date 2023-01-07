<?php
    $manglh = ["a"=>1,"b"=>2,"c=>3","d"=>4];
    //mảng liên hợp gồm key và phần tử của mảng.
    echo $manglh["d"]."</br>";
    //khai báo mảng liên hợp gồm:
    //key => $value;
    //hoten => Nguyen Van A;
    //nam_sinh => 1998;
    //dia_chi => "A/B/C";
    //Gioi_tinh => "Nam";
    //hiển thị ra:
    //Nguyễn Văn A 23tuổi địa chỉ giới tính Nam
    //Tuổi = lấy năm hiện tại - năm sinh;
    //get current year in php
    $Manglh = ["ho_ten"=>"Nguyễn Mạnh Hiếu","nam_sinh"=>2003,"dia_chi"=>"Bắc Giang","Gioi_tinh"=>"Nam"];
    $year = date("Y")-$Manglh["nam_sinh"];
    echo $Manglh["ho_ten"] .(date("Y")-$Manglh["nam_sinh"]) ."Tuổi" . "Địa chỉ:" . $Manglh["dia_chi"] . "Giới Tính" . $Manglh["Gioi_tinh"];
?>

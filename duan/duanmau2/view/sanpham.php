<body>
<div class="tensp" style="text-align: center;margin: 20px">
    <h2>Sản Phẩm <strong><?=$tendm?></strong> <h2>
</div>
    <div class="kh" style="margin-bottom: 40px">
        <div class="sanphamdm" style="display: grid;grid-template-columns: 1fr 1fr 1fr" >
        <?php
            $i=0;
         foreach ($dssp as $sp) {
            extract($sp);
            $hinh = $img_path . $img;
            if(($i==2)||($i==5)||($i==8)||($i==11)){
                $mr="";
            }else{
                $mr="mr";
            }
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<div style="margin-left: 60px;">
                    <div><img src="' . $hinh . '" height="330px" width="330px" alt=""></div>
                     <p style="color: red;font-size: 20px;font-weight: bold">' . $price . '</p>
                     <p style="font-weight: bold;font-size: 30px">' . $name . '</p>
                     <a href="' . $linksp . '">' . $name . '</a>
                     <a href="">' . $mota . '</a>
                    </div>  ';
        }
        ?>
        </div>
    </div>
</body>
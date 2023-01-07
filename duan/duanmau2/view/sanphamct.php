<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/layout/css/spct.css">
    <script src="https://kit.fontawesome.com/21c3572f51.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
extract($onesp);
?>
<h2></h2>
<div class="tensp">
    <h2><?= $name ?></h2>
</div>
<div class="ten" style="margin: 30px">
    <h1>Sản phẩm chỉ tiết</h1>
</div>
<div class="chung">
    <div class="row">
        <?php
        $img = $img_path . $img;
        echo '<img src="' . $img . '" alt="" >  <br>';
        ?>
    </div>
    <div class="khung-sp" >
        <?php
        echo ' <div class="bocnd">
            <div class="div1">
            </div>
            <div class="div2">
                <div class="danhgia">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>';
        echo    '<div class="noidung" style="font-size: 30px">
                      <span>$ ' . $price . '</span> <br>
                    <div class="product-color">
                        <h2>Color</h2>
                        <ul>
                            <li style="background-color: red;"></li>
                            <li style="background-color: black;"></li>
                            <li style="background-color: blanchedalmond;"></li>
                            <li style="background-color: yellow;"></li>
                        </ul>
                    </div>
                    <p style="font-size: 18px;padding: 20px 0px">' . $mota . '</p>
                </div>'
        ?>
        <hr>
        <div class="row">
            <div>
                <h2>Bình Luận</h2>
                <iframe src="view/binhluan/binhluan_form.php?idpro=<?= $id ?>" frameborder="0" width="800px" height="270px"></iframe>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row" style="margin: 30px 30px">
    <div>
        <h2>Sản Phẩm Cùng Loại</h2>
        <div class="spcungloai">
            <?php
            foreach ($sp_cung_loai as $sp_cungloai) {
                extract($sp_cung_loai);
                $linksp = "index.php?act=sanphamct&iddm=" . $id;
                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
            }
            ?>
        </div>
    </div>
</div>
<hr>
</body>
</html>

<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='50px'";
} else {
    $hinh = "no photo";
}

?>
<div class="row">
    <div class="row">
        <h1>CẬP NHẬP LOẠI HÀNG Hóa</h1>
    </div>
    <form action="index.php?act=updatesanpham" method="POST" enctype="multipart/form-data" style="background-color: #afd9ee;border: 1px solid gray;
margin: 20px 200px;border-radius: 20px;padding: 40px">
        <div class="row mb10">
            <select name="iddm" id="">
                <option value="0" selected>All</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if ($iddm == $danhmuc['id']) echo '<option value="'.$danhmuc['id'].'"selected>' . $danhmuc['name'] . '</option>';
                    else echo '<option value="'.$id.'">' .$name. '</option>';
                }
                ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
        <div class="row mb10">
            Tên sản phẩm<br>
            <input type="text" name="tensp" value="<?= $sanpham['name'] ?> ">
        </div>
        <div class="row mb10">
            Giá<br>
            <input type="text" name="giasp" value="<?= $price ?>">
        </div>
        <div class="row mb10">
            hình ảnh<br>
            <input type="file" name="hinh">
            <?= $hinh ?>
        </div>
        <div class="row mb10">
            Mô tả<br>
            <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
        </div>
        <div class="row mb10">
            <input type="submit"  name="capnhapsp" value="CẬp Nhập" style="background-color: #ce8483">
            <input type="reset" value="Nhập lại" style="background-color: #ce8483">
            <a href="index.php?act=listsp"><input type="button" value="Danh Sách" style="background-color: #ce8483"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>
</div>
</div>
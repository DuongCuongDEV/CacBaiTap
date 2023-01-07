<?php
//Phương thức nhập bình luận
 function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
//hiển thị bình luận
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where 1 ";
    if($idpro>0) $sql.= " AND  idpro='".$idpro."'";
    $sql.= "order by id desc" ;
    
    // $sql = "select * from binhluan order by id desc";

    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
//xóa bình luận
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id;
    pdo_execute($sql);
}
?>
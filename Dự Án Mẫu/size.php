<?php 
    require "pdo.php";

    //thêm size
    function size_insert($ma_size,$size_name){
        $sql = "INSERT INTO size(ma_size, size_name) VALUES (?,?) ";
        pdo_execute($sql,$ma_size,$size_name);
    }

    //update size
    function size_update($ma_size,$size_name){
        $sql = "UPDATE size SET ma_size = ?, size_name = ? WHERE ma_size = ?";
        pdo_execute($sql,$ma_size,$size_name);
    }

    //xóa size
    function loai_delete($ma_size){
        $sql = "DELETE FROM loai WHERE ma_size=?";
        if(is_array($ma_size)){
            foreach ($ma_size as $size) {
                pdo_execute($sql, $ma_size);
            }
        }
        else{
            pdo_execute($sql, $ma_size);
        }
    }
    //truy vấn tất cả các size
    function loai_select_all(){
        $sql = "SELECT * FROM size";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một size
    function loai_exist($ma_size){
        $sql = "SELECT count(*) FROM size WHERE ma_size=?";
        return pdo_query_value($sql, $ma_size) > 0;
    }
    
?>
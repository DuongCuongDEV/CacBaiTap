<?php 
    // function loadall_taikhoan(){
    //     $sql = "select * from taikhoan order by id desc";
    //     $listtaikhoan=pdo_query($sql);
    //     return $listtaikhoan;
    // }
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }


    function insert_taikhoan($email,$user,$pass){
        $sql="insert into taikhoan(email,ho_ten,mat_khau) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
  
    function checkuser($user,$pass){
        $sql="select * from taikhoan where ho_ten ='".$user."' AND mat_khau ='".$pass."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }


    function delete_taikhoan($id){
        $sql="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function loadon_taikhoan($id){
        $sql="select * from taikhoan where id =".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }

    
    function checkemail($email){
        $sql= "select * from taikhoan where email ='".$email."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function update_taikhoan($id,$ho_ten,$pass,$email,$address,$tel){
        $sql=" update taikhoan set ho_ten ='".$ho_ten."','".$pass."','".$email."','".$address."','".$tel."' where id=".$id;
        pdo_execute($sql);
    }

?>
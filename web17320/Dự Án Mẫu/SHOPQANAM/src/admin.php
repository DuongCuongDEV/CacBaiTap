<?php
    require "dao_user.php";

    $data = user_all();
    echo "<pre>";
    var_dump($data);
?>
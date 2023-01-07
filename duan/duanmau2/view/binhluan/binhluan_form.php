<?php
    session_start();
    
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];

    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="row mb" style="margin: 20px">
    <div class="boxtile">BÌNH LUẬN</div>
    <div class="boxcontent2 menudoc">
        <table>
        <?php
        // echo "Nội dung bình luận đây nè ".$idpro;
        foreach($dsbl as $bl){
            extract($bl);
            echo '<tr><td>'.$noidung.'</td>';
            echo '<td>'.$iduser.'</td>';
            echo '<td>'.$ngaybinhluan.'</td></tr>';
            
        }
        ?>
        </table>
    </div>
    <div class="boxfooter searbox">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="hidden" name="idpro" value="<?=$idpro ?>">
        <!-- <input type="hidden" name="iduser" value="<?=$iduser ?>"> -->
            <input type="text" name="noidung"style="height: 30px;width: 300px">
            <input type="submit" name="guibinhluan" value="Gửi bình luận" style="height: 35px;">
        </form>
    </div>
<?php
if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
    $noidung=$_POST['noidung'];
    $idpro=$_POST['idpro'];
    $iduser=$_SESSION['user']['id'];
    // $iduser=$_SESSION['ho_ten']['id'];
    // $iduser=$_POST['iduser'];
    $ngaybinhluan=date('d/m/y h:i:sa');
    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
    header("location:".$_SERVER['HTTP_REFERER']);
}

?>
</div>
<?php
include ('../../connect/connect.php');
$index = 1;
$search = $_GET['search'];
$page = $_GET['page'];
$sql = $conn->prepare("SELECT * FROM tblcauhoi WHERE question LIKE '%".$search."%' ORDER BY id DESC LIMIT 30 OFFSET ".($page-1)*30);
$sql->execute();
$data = '';
while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    $data.= '<tr id='.$result['id'].'>';
    $data.= '<th scope="row">'.($index++).'</th>';
    $data.= '<td>'.$result['question'].'</td>';
    $data.= '<td>'.$result['option_a'].'</td>';
    $data.= '<td>'.$result['option_b'].'</td>';
    $data.= '<td>'.$result['option_c'].'</td>';
    $data.= '<td>'.$result['option_d'].'</td>';
    $data.= '<td>'.$result['answer'].'</td>';
    $data.= '<td class="text-center"><button type="button" class="btn btn-outline-warning" name = "update">Sửa</button></td>';
    $data.= '<td class="text-center"><button type="button" class="btn btn-outline-danger" name = "delete">Xóa</button></td>';
    $data.= '</tr>';
}
echo $data;
?>
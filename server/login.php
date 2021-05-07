<?php
session_start();
$u_name = $_REQUEST['u_name'];
$pass = $_REQUEST['pass'];

include 'connectionDB.php';
$query = mysqli_query($conDB,"select * from tb_user where u_name='$u_name' and pass='$pass'");
$info = $query->fetch_assoc();

$data = '';
if(@$info['Id']){
    $_SESSION['login_id'] = $info['Id'];
    $_SESSION['u_name'] = $info['u_name'];
    $state = 1;
    $data = $info;
}else{
    $state = 0;
}
echo json_encode(array('state'=>$state,'info'=>$data));
?>
<?php
session_start();
include('connectionDB.php');
$id = $_SESSION['login_id'];
$u_id = @$_REQUEST['u_id'];
if ($id) {
    $fname = $_REQUEST['fName']?:0;
    $lname = $_REQUEST['lName']?:0;
    $sex = $_REQUEST['sex']?:'F';
    $u_name = $_REQUEST['username']?:0;
    $pass = $_REQUEST['pass']?:0;
    $tel = $_REQUEST['tel']?:0;
    $email = $_REQUEST['email']?:0;

    $qry = mysqli_query($conDB,"select * from tb_user where sex = '$sex' and fname = '$fname' and lname = '$lname'");
    $check = mysqli_fetch_assoc($qry);
    if(@$check['Id']){
        exit('Have a data in database');
        echo $check['Id']. ' '.$check['fname'].' '.$check['lname'];
    }else{
        $sql = "INSERT INTO `tb_user` (`fname`, `lname`, `sex`, `email`, `u_name`, `pass`, `tel`) 
        VALUES ('$fname', '$lname', '$sex', '$email', '$u_name', '$pass', '$tel')";
        mysqli_query($conDB,'’SET NAMES utf8′');
        if(mysqli_query($conDB,$sql)
        ){
            echo 1;
        }else{
            echo "bor dai Insert der";

        }
    }
    
}else{
    exit('error');
}
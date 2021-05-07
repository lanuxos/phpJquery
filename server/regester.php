
<?php

include 'connectionDB.php';
 $fName=$_REQUEST['fName'];
 $lName=$_REQUEST['lName'];
$sex=$_REQUEST['sex'];
$username = $_REQUEST['username'];
 $pass = $_REQUEST['pass'];
$email=$_REQUEST['email'];
$tel = $_REQUEST['tel'];
$type_id= "member";
$sql= "SELECT*FROM tb_user";
$quy=mysqli_query($conDB,$sql);
$res=$quy->fetch_array();

If($fName!="" and $lName!="" and $sex!="" and $username!="" and $pass!="" and $email!=""){
    $query="INSERT INTO tb_user( fName, lName, sex, u_name, pass, email, tel, type_Id,created) 
    VALUES 
    ('$fName','$lName','$sex','$username','$pass','$email','$tel','$type_id',Now())";
$result= mysqli_query($conDB,$query);
    if($result){
        echo "ເພີ່ມຂໍ້ມູນສຳເລັດ";
    header('location:../index.html') ;

    }else{
        echo"ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້";
    }
}else{
    
    
    header('location:../index/regesterForm.html') ;
echo "<script> alert('ກະລຸນາຕື່ມຂໍ້ມູນທ່ານໃຫ້ຄົບ');</script>";
}
    



?>
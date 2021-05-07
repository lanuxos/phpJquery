<?php
$i=1;
include('connectionDB.php');
$qry = mysqli_query($conDB,"select * from tb_user");
while($re=mysqli_fetch_assoc($qry)){
?>
<tr>
    <td><?=$i?></td>
    <td><?=$re['fname']?></td>
    <td><?=$re['lname']?></td>
    <td><?=$re['tel']?></td>
    <td><?=$re['email']?></td>
    <td><?=$re['pass']?></td>
    <td>
        <button class="btn btn-primary btn-sm" name="btn_view" id="btn_view">ເບີ່ງເພີ່ມ</button>
        <button class="btn btn-warning btn-sm" name="btn_view" id="btn-edit">ແກ້ໄຂ</button>
        <button class="btn btn-danger btn-sm" name="btn_view" id="btn-del">ລືບ</button>
    </td>
</tr>
<?php
$i++;
}
?>
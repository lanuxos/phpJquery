<?php
session_start();
$id = $_SESSION['login_id'];
$u_id = @$_REQUEST['u_id'];
if ($u_id == $id) {
?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;font-size:24px">
                <span style="font-family:monoton;font-size:30px">MP</span> Solution
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mt-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ຕິດຕໍ່</a>
                    </li>

                </ul>

            </div>
            <div class="d-flex">
                <a class="nav-link" href="#"> <span style="font-size: 1.5em; color: blue;"><i class="fas fa-user-tie"></i></span> ຜູ້ໃຊ້ງານ
                </a>
                <a class="nav-link" href="#" onclick="logOut()"><span style="font-size: 1.5em;color: red;"><i class="fas fa-power-off"></i></span> ອອກ</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-10 mt-5">
                <div class="card">
                    <div class="card-header">
                        ສະແດງຂໍ້ມູນຜູ້ໃຊ້ງານ
                    </div>
                    <div class="card-body">
                        <div class=" mb-3 right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#md-register">Add user</button>
                        </div>
                        <table class="table bg-info">
                            <thead class="table-success">
                                <tr>
                                    <th>Id</th>
                                    <th>ຊື່</th>
                                    <th>ນາມສະກຸນ</th>
                                    <th>ເບີໂທ</th>
                                    <th>ອີເມລ</th>
                                    <th>ລະຫັດຜ່ານ</th>
                                    <th>ຈັດການ</th>
                                </tr>
                            </thead>
                            <tbody id='tb-user'>
                                <?php
                                $i = 1;
                                include('connectionDB.php');
                                $qry = mysqli_query($conDB, "select * from tb_user");
                                while ($re = mysqli_fetch_assoc($qry)) {
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $re['fname'] ?></td>
                                        <td><?= $re['lname'] ?></td>
                                        <td><?= $re['tel'] ?></td>
                                        <td><?= $re['email'] ?></td>
                                        <td><?= $re['pass'] ?></td>
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
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form-register" class="needs-validation">
        <div class="modal" tabindex="-1" id="md-register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ລົງທະບຽນ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="md-register">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-6 col-sm-8 col-10 mt-4">
                                <h1 class="mb-3" style="direction: ltr; text-align: center;">ຟອມສະໝັກສະມາຊິກ</h1>
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label for="firstName" class="form-label">ຊື່</label>
                                        <input type="text" name="fName" class="form-control" id="firstName" placeholder="" require>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="lastName" class="form-label">ນາມສະກຸນ</label>
                                        <input type="text" name="lName" class="form-control" id="lastName" placeholder="" require>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="sex" class="form-label">ເພດ</label>
                                        <select name="sex" class="form-select form-control" id="sex" require>
                                            <option value="male">ຊາຍ</option>
                                            <option value="female">ຍິງ</option>
                                        </select>

                                    </div>
                                    <div class="col-12">

                                        <label for="username" class="form-label">ຊື່ຜູ້ໃຊ້</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" style="direction: ltr; text-align: left;" require>

                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <label for="password" class="form-label">ລະຫັດຜ່ານ</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            <input type="password" name="pass" class="form-control" id="username" placeholder="You password" style="direction: ltr; text-align: left;" require>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">e-mail</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="fa fa-at"></i></span>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="you@email.com" style="text-align: left;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="tel" class="form-label" style="direction: ltr; text-align: left;">ເບີໂທ</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            <input type="text" name="tel" class="form-control" id="address" placeholder="020XXXXXXXX" style="direction: ltr; text-align: left;">
                                        </div>
                                    </div>
                                    <div>
                                        </hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        // var md = $("#md-register");
        // md.addEventListener('shown.bs.modal', function() {})
        var loadTB = () => {
            $("#tb-user").load('server/loadTB.php');
        }
        $("#form-register").on("submit", function(ev) {
            ev.preventDefault();
            let data_s = $(this).serialize();
            $.post("server/registerDB.php", data_s, function(data_re) {
                if (data_re == 1) {
                    $(".btn-close").trigger('click');
                    loadTB();
                } else {
                    alert(data_re);
                }
            })
        })
    </script>
<?php
} else {
    exit('error');
}
?>
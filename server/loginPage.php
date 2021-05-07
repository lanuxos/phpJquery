<form id="form-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                    <div class="bg-info p-3 mt-5" style="border-radius:15px;">
                        <div class="text-center">
                            <img src="assets/img/user.png" style="border-radius: 50%; width: 50%; height: auto;">
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label>ຊື່ຜູ້ໃຊ້ງານ:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input value="admin" type="text" name="u_name" id="u_name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-12">
                                <label>ລະຫັດຜ່ານ:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input value="1234" type="password" name="pass" id="pass" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                     ຈື່ຂ້ອຍໄວ້ແດ່ເດີ
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fa fa-sign-in"></i>
                                    ເຂົ້າສູ່ລະບົບ
                                </button>
                                <div id="show"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $("#form-login").on("submit", function(ev) {
                ev.preventDefault();
                let data = $(this).serialize();
                $.post("server/login.php", data, function(respone) {
                    if (respone.state == 1) {
                        window.localStorage.setItem('login_id', respone.info.Id);
                        $("#content").load('server/home.php?u_id=' + respone.info.Id);
                    } else {
                        alert("User and password faild");
                    }
                }, "JSON")
            })
    </script>
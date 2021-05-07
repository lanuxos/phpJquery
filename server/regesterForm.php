
    <div class="container bg-primary col-lg-8 col-md-6 col-sm-8 col-10 mt-4 -5" style="border-radius:15px">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 col-sm-8 col-10 mt-4">
                <h1 class="mb-3" style="direction: ltr; text-align: center;">ຟອມສະໝັກສະມາຊິກ</h1>
                <form id="form-regester" class="needs-validation" action="../server/regester.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="firstName" class="form-label">ຊື່</label>
                            <input type="text" name="fName" class="form-control" id="firstName" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label for="lastName" class="form-label">ນາມສະກຸນ</label>
                            <input type="text" name="lName" class="form-control" id="lastName" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label for="sex" class="form-label">ເພດ</label>
                            <select name="sex" class="form-select form-control" id="sex"> 
                                <option value="male" >ຊາຍ</option>
                                <option value="female">ຍິງ</option> </select>

                        </div>
                        <div class="col-12">

                            <label for="username" class="form-label">ຊື່ຜູ້ໃຊ້</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" style="direction: ltr; text-align: left;">

                            </div>
                        </div>
                        <div class="col-12">

                            <label for="password" class="form-label">ລະຫັດຜ່ານ</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                <input type="password" name="pass" class="form-control" id="username" placeholder="You password" style="direction: ltr; text-align: left;">

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

                        <div class="col-sm-6 mt-2">
                            <button class="btn btn-info">
                            <input type="file" id="upload" hidden/>
                            <i class="fa fa-user-circle"></i>
                            <label for="upload">ເລືອກຮູບປະຈຳໂຕ</label>
                        </button>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" id="submit" class="btn btn-success w-100 mt-3 mb-3">
                                <i class="fa fa-registered"></i>
                               ສະໝັກສະມາຊິກ
                            </button>
                        </div>
                </form>
                </div>
            </div>
        </div>
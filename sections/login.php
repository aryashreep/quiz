<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <?php
      if(isset($_SESSION['alert']) && $_SESSION['alert']){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
      }
      ?>
        <div class="col">
            <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                        <img src="./assets/img/damodar.jpg" alt="Sample photo" class="img-fluid"
                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                            <div class="form-right h-100 py-5 px-5">
                                <form action="" method="post" class="row g-4">
                                    <div class="col-12">
                                        <label>Username<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                            <input type="text" name="phone_no" class="form-control"
                                                placeholder="Enter mobile number" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Enter Password" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            &nbsp;
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <a href="#" class="float-end text-primary">Forgot Password?</a>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4 float-end mt-4">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
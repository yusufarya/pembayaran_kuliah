<!-- container -->
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-block p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-md-5 d-none d-lg-block my-auto"><img src="<?php echo base_url('assets/'); ?>img/logo/logo_pay.png" class="pl-5 my-auto mx-auto col-md-10 d-lg-block d-none"></div>
                <img src="">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar akun baru!</h1>
                        </div>
                        <form class="user" method="post" action="<?php echo base_url('auth/registrasi'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control" id="nama" name="nama" placeholder="Nama Lengkap anda...">
                                <?= form_error('nama', '<small class="text-danger pl-2">', ' </small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control" id="email" name="email" placeholder="Masukan email anda">
                                <?= form_error('email', '<small class="text-danger pl-2">', ' </small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-2">', ' </small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-md btn-block">
                                Daftar
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End container -->
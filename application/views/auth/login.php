<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-block p-0" id="bg">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php echo $title; ?></h1>
                                </div>
                                <?php echo $this->session->flashdata('message'); ?>
                                <form method="post" action="<?php echo base_url('auth') ?>" class=" user">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email anda..." value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger pl-2">', ' </small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-2">', ' </small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-md btn-block">
                                        Login
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('auth/registrasi'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End Outer row -->
</div>
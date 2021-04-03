              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h2 mb-4 text-white shadow-sm"><?php echo $title ?></h1>
                <div class="row">
                  <div class="col-md-6">
                    <?php echo $this->session->flashdata('message'); ?>
                  </div>
                </div>
                <div class="card card-block" style="max-width: 500px;">
                  <div class="row no-gutters">
                    <div class="col-sm-4">
                      <img src="<?php echo base_url('assets/img/profile/') . $user['image'] ?>" alt="" class="card-img">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $user['nama'] ?></h5>
                        <p class="card-text"><?php echo $user['email'] ?></p>
                        <p class="card-text"><small class="text-muted">User since - <?php echo date('M Y', $user['date_created']); ?></small></p>

                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/edit_profile') ?>">
                          Edit Profile
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.container-fluid -->

              </div>
              <!-- End of Main Content -->
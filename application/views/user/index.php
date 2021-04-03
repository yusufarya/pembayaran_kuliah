        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-8">
              <!-- Page Heading -->
              <h1 class="h2 mb-4 text-white shadow-sm"><i class="far fa-fw fa-user"></i><?php echo $title ?></h1>
              <?php echo $this->session->flashdata('message'); ?>
            </div>
          </div>
          <!-- row-content profile -->
          <div class="row">
            <div class="col-md-2 mx-3 card card-block">
              <img src="<?php echo base_url('assets/img/profile/') . $user['image'] ?>" alt="" class="card-img mt-2 p-2 shadow-sm">
              <p class="card-text text-center mt-2"><small class="text-muted">User since - <?php echo date('M Y', $user['date_created']); ?></small></p>
            </div>

            <div class="col-md-6 card card-block">
              <div class="form-group row mt-3">
                <h2 class="ml-4 text-dark"><?php echo $user['nama'] ?></h2>
                <table class="table table-striped mx-3 text-dark">

                  <tr>
                    <th>Nim</th>
                    <td><?php echo $user['nim'] ?></td>
                  </tr>
                  <tr>
                    <th>Jurusan</th>
                    <td><?php echo $user['nama_jurusan'] ?></td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <td><?php echo $user['kd_kelas'] ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?php echo $user['email'] ?></td>
                  </tr>
                  <tr>
                    <th>No. Telp</th>
                    <td><?php echo $user['no_telp'] ?></td>
                  </tr>
                  <tr>
                    <th>Alamat Lengkap</th>
                    <td><?php echo $user['alamat'] ?></td>
                  </tr>


                </table>
                <div class="col-sm-4 ml-2">
                  <a class="btn btn-sm btn-info form-control" href="<?php echo base_url('user/edit_profile') ?>"><i class="fas fa-fw fa-user-edit"></i> Lengkapi Profile</a>
                </div>
              </div>


              <div class="form-group row">

              </div>
            </div>

          </div>
          <!-- end-row -->
          <br>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
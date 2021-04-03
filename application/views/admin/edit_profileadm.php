	<!-- Begin Page Content -->
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-md-9">
	            <!-- Page Heading -->
	            <h1 class="h3 mb-4 text-white shadow-sm"><i class="fas fa-edit"></i> <?php echo $title ?></h1>
	        </div>
	    </div>
	    <!-- Content Row -->
	    <div class="row">
	        <div class="col-lg-10">
	            <?php echo form_open_multipart('admin/edit_profile'); ?>
	            <div class="form-group row">
	                <label for="name" class="col-sm-3 col-form-label text-white">Nama Lengkap</label>
	                <div class="col-lg-8">
	                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama'] ?>">
	                    <?= form_error('nama', '<small class="text-danger pl-2">', ' </small>'); ?>
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="email" class="col-sm-3 col-form-label text-white">Email</label>
	                <div class="col-lg-8">
	                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>" readonly>
	                </div>
	            </div>

	            <div class="form-group row">
	                <div class="col-sm-3 text-white">Foto Profile</div>
	                <div class="col-sm-8">
	                    <div class="row">
	                        <div class="col-sm-3">
	                            <img src="<?php echo base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
	                        </div>
	                        <div class="col-sm-9">
	                            <div class="custom-file">
	                                <input type="file" class="custom-file-input" id="image" name="image">
	                                <label class="custom-file-label" for="image">Choose File</label>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="from-group row">
	                <div class="col-sm-3"></div>
	                <div class="col-sm-4">
	                    <button class="btn btn-primary" type="submit">
	                        Simpan
	                    </button>
	                </div>
	            </div>

	        </div>
	    </div>
	    <!-- End row -->
	    <br>

	</div>
	<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
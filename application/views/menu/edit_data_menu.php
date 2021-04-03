            <!-- Begin Page Content -->
            <div class="container-fluid">
            	<!-- Row -->
            	<div class="row">
            		<div class="col-md-6">
            			<!-- Page Heading -->
            			<h1 class="h3 mb-4 text-white shadow-sm"><i class="fas fa-edit"></i> <?php echo $title ?></h1>
            			<?php foreach ($menu as $m) : ?>
            				<form action="<?php echo base_url('menu/update'); ?>" method="post">
            					<div class="form-group">
            						<label class="text-white">Nama Menu</label>
            						<input type="text" id="menu" name="menu" class="form-control" placeholder="Nama Menu" value="<?php echo $m->menu ?>">
            					</div>

            					<button type="submit" class="btn btn-sm btn-primary">
            						Simpan
            					</button>

            				</form>
            			<?php endforeach; ?>
            		</div>
            	</div>
            	<!-- End row -->
            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
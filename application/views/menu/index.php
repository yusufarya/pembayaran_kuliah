            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                	<div class="col-lg-6">
	                <!-- Page Heading -->
	                <h1 class="h2 mb-4 text-white shadow"><?php echo $title ?></h1>
                		<?= form_error('menu', '<div class="alert alert-success" role="alert">', '</div>'); ?>

                		<?php echo $this->session->flashdata('message') ?>
                		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">+ Add New Menu</a>

                		<table class="table table-hover bg-light">
                			<thead>
                				<tr>
							      <th scope="col">#</th>
							      <th scope="col">Menu</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach ($menu as $m) : ?>
							    <tr>
							      <th scope="row"><?php echo $i++; ?></th>
							      <td><?php echo $m['menu'] ?></td>
							      <td>
							      	<a href="<?php echo base_url('menu/edit_data_menu/') . $m['id'] ?>" class="badge badge-success">Edit</a>
							      	<a href="<?php echo base_url('menu/delete_menu/') . $m['id'] ?>" class="badge badge-danger">Hapus</a>
							      </td>
							    </tr>
								<?php endforeach; ?>
							</tbody>
						</table>
                	</div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

		<!-- Modal -->
		<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModal" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newMenuModal">New Menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?php echo base_url('menu'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
				    <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
				  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
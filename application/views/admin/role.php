            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h2 mb-4 text-white shadow-sm"><?php echo $title ?></h1>
                
                <div class="row">
                	<div class="col-lg-6">
                		<?= form_error('role', '<div class="alert alert-success" role="alert">', '</div>'); ?>

                		<?php echo $this->session->flashdata('message') ?>
                		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">+ Add New Role</a>

                		<table class="table table-hover bg-light">
                			<thead>
                				<tr>
							      <th scope="col">#</th>
							      <th scope="col">role</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach ($role as $r) : ?>
							    <tr>
							      <th scope="row"><?php echo $i++; ?></th>
							      <td><?php echo $r['role'] ?></td>
							      <td>
							      	<a href="<?php echo base_url('admin/roleaccess/') . $r['id'] ?>" class="badge badge-warning">Access</a>
							      	<a href="" class="badge badge-success">Edit</a>
							      	<a href="" class="badge badge-danger">Hapus</a>
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
		<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModal" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newRoleModal">New Role</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?php echo base_url('admin/role'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
				    <input type="text" class="form-control" id="role" name="role" placeholder="role name">
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
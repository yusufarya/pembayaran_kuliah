            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h2 mb-4 text-white shadow-sm"><?php echo $title ?></h1>
                
                <div class="row">
                	<div class="col-lg-6">
                		
                		<?php echo $this->session->flashdata('message') ?>

                		<h5 class="text-white">Role : <?php echo $role['role'] ?></h5>

                		<table class="table table-hover bg-light">
                			<thead>
                				<tr>
							      <th scope="col">#</th>
							      <th scope="col">Menu</th>
							      <th scope="col">Access</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach ($menu as $m) : ?>
							    <tr>
							      <th scope="row"><?php echo $i++; ?></th>
							      <td><?php echo $m['menu'] ?></td>
							      <td>
							      	 <div class="mb-3 form-check">
									    <input type="checkbox" class="form-check-input" <?php echo check_access($role['id'], $m['id']); ?> data-role="<?php echo $role['id']; ?>" data-menu="<?php echo $m['id']; ?>">
									  </div>
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
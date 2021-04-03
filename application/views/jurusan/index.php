                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row mx-4">
                    	<div class="col-lg-12">
                    <!-- Page Heading -->
                    <h1 class="h2 mb-4 text-white shadow-lg"><?php echo $title ?></h1>

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newsubMenuModal">+ Add New Submenu</a>

			                <table class="table table-bordered table-hover shadow-lg text-body-9999" style="background-color: rgb(255 250 250);">
			                	<thead class="thead-dark">
			                		<tr>
			                    		<th>#</th>
			                    		<th>Kode Jurusan</th>
			                    		<th>Jurusan</th>
			                    		<th>Aksi</th>
			                    	</tr>
			                	</thead>
			                
			                <?php 
			                $i = 1;
			                foreach ($jurusan as $j) : ?>
			                	<tbody>
			                		<tr>
			                    		<td><?php echo $i++; ?></td>
			                    		<td><?php echo $j['kd_jurusan'] ?></td>
			                    		<td><?php echo $j['nama_jurusan'] ?></td>
			                    		<td>
			                    			<a href="" class="badge badge-success">Edit</a>
			                    			<a href="" class="badge badge-danger">Hapus</a>
			                    		</td>
			                    	</tr>
			                	</tbody>
			            	<?php endforeach; ?>
			                </table>
                    	</div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
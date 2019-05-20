        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- FlashData Notifikasi Berhasil-->
        	<?php if ($this->session->flashdata('flash-message')): ?>
        	<div class="alert alert-success alert-dismissible show" role="alert"
        		style="margin-top:15px; margin-bottom:15px">
        		Data <strong>berhasil</strong>
        		<?=$this->session->flashdata('flash-message');?>
        		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        	</div>
        	<?php endif;?>
        	<!-- Page Heading -->
        	<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <h2 class="m-0 mb-2 font-weight-bold text-primary">Daftar Waralaba</h2> -->

        	<!-- DataTales Example -->
        	<div class="card shadow mb-4">
        		<div class="card-header py-3">
        			<h2 class="m-0 font-weight-bold text-primary">Daftar Waralaba</h2>

        			<a href="<?=base_url();?>create-waralaba" class="btn btn-primary float-right"
        				style="margin-top:-40px">
        				<b>Tambah Waralaba</b>
        			</a>
        		</div>
        		<div class="card-body">
        			<div class="table-responsive">
        				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        					<thead>
        						<tr>
        							<th>Name</th>
        							<th>Kota</th>
        							<th>Aksi</th>
        						</tr>
        					</thead>
        					<tfoot>
        						<tr>
        							<th>Name</th>
        							<th>Kota</th>
        							<th>Aksi</th>
        						</tr>
        					</tfoot>
        					<tbody>
        						<?php foreach ($waralaba as $w) :?>
        						<tr>
        							<td><?=$w['nama_waralaba']?></td>
        							<td><?=$w['alamat']?></td>
        							<td> 
										<a href="<?=base_url();?>detail-waralaba/<?=$w['id']?>" class="btn btn-sm btn-success mb-2">Detail</a>
        								<a href="<?=base_url();?>edit-waralaba/<?=$w['id']?>" class="btn btn-sm btn-primary mb-2">Edit</a>
        								<a href="<?=base_url();?>delete-waralaba/<?=$w['id']?>" class="btn btn-sm btn-danger mb-2" onclick="return confirm('Anda yakin ingin menghapus <?=$w['nama_waralaba']?> ?');">Delete</a>
        							</td>

        						</tr>
        						<?php endforeach?>
        					</tbody>
        				</table>
        			</div>
        		</div>
        	</div>

        </div>
        <!-- /.container-fluid -->
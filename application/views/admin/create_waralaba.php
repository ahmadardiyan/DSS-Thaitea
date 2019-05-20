        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- Page Heading -->
        	<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <h2 class="m-0 mb-2 font-weight-bold text-primary">Daftar Waralaba</h2> -->

        	<!-- DataTales Example -->
        	<div class="card shadow mb-4">
        		<div class="card-header py-3">
        			<h2 class="m-0 font-weight-bold text-primary">Tambah Waralaba</h2>
        		</div>
        		<div class="card-body">
        			<form action="" method="post" enctype="multipart/form-data">
        				<div class="form-group">
        					<label for="nama_waralaba">Nama Waralaba</label>
        					<input type="nama_waralaba" class="form-control" id="nama_waralaba" name="nama_waralaba"
        						value="<?=set_value('nama_waralaba')?>">
        					<small class="form-text text-danger"><?=form_error('nama_waralaba')?></small>
        				</div>
        				<div class="form-group">
        					<label for="phone">Phone</label>
        					<input type="phone" class="form-control" id="phone" name="phone"
        						value="<?=set_value('phone')?>">
        					<small class="form-text text-danger"><?=form_error('phone')?></small>
        				</div>
        				<div class="form-group">
        					<label for="alamat">Alamat</label>
        					<input type="text" class="form-control" id="alamat" name="alamat"
        						value="<?=set_value('alamat')?>">
        					<small class="form-text text-danger"><?=form_error('alamat')?></small>
        				</div>
        				<div class="form-group">
        					
        							<label for="jarak">Jarak (Yogyakarta dengan Pusat Waralaba ) (Km)</label>
        							<input type="text" class="form-control" id="jarak" name="jarak"
        								value="<?=set_value('jarak')?>">
        							<small class="form-text text-danger"><?=form_error('jarak')?></small>
        						
        				</div>
        				<div class="form-group">
        					
        							<label for="laba">Laba Bersih (per-bulan)</label>
        							<input type="text" class="form-control" id="laba" name="laba"
        								value="<?=set_value('laba')?>">
        							<small class="form-text text-danger"><?=form_error('laba')?></small>
        						
        				</div>
        				<div class="form-group">
        					
        							<label for="modal">Modal</label>
        							<input type="text" class="form-control" id="modal" name="modal"
        								value="<?=set_value('modal')?>">
        							<small class="form-text text-danger"><?=form_error('modal')?></small>
        						
        				</div>
        				<div class="form-group">
        					
        							<label for="jumlah_cabang">Jumlah Cabang</label>
        							<input type="text" class="form-control" id="jumlah_cabang" name="jumlah_cabang"
        								value="<?=set_value('jumlah_cabang')?>">
        						
        				</div>

        				<div class="form-group">
        					<label for="foto">Logo Brand</label><br>

        					<input type="file" class="form-control-file" id="foto" name="foto"
        						value="<?=set_value('foto')?>">
        					<small class=" form-text text-danger">
        						<?=form_error('foto')?>
        					</small>
						</div>
						
						<div class="form-group">
                            <label for="deskripsi_waralaba">Deskripsi Waralaba</label>
                            <textarea class="form-control" id="ckeditor" name="deskripsi_waralaba" rows="10"></textarea>
                            <small class="form-text text-danger">
                                <?=form_error('deskripsi_waralaba')?></small>
                        </div>

        				<div class="text-center">
        					<button type="submit" name="register" class="btn btn-primary tombol">Submit</button>
        				</div>
        			</form>
        		</div>
        	</div>

        </div>
        <!-- /.container-fluid -->
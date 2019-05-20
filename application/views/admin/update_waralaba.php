        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- DataTales Example -->
        	<div class="card shadow mb-4">
        		<div class="card-header py-3">
        			<h2 class="m-0 font-weight-bold text-primary">Edit Waralaba</h2>
        		</div>
        		<div class="card-body">
        			<form action="" method="post" enctype="multipart/form-data">
        				<input type="hidden" name="id" value="<?=$waralaba['id'];?>">
						<input type="hidden" name="foto_lama" value="<?=$waralaba['logo'];?>">
						
        				<div class="form-group">
        					<label for="nama_waralaba">Nama Waralaba</label>
        					<input type="nama_waralaba" class="form-control" id="nama_waralaba" name="nama_waralaba"
        						value="<?=$waralaba['nama_waralaba'];?>">
        					<small class="form-text text-danger"><?=form_error('nama_waralaba')?></small>
        				</div>
        				<div class="form-group">
        					<label for="phone">Phone</label>
        					<input type="phone" class="form-control" id="phone" name="phone"
        						value="<?=$waralaba['phone'];?>">
        					<small class="form-text text-danger"><?=form_error('phone')?></small>
        				</div>
        				<div class="form-group">
        					<label for="alamat">Alamat</label>
        					<input type="text" class="form-control" id="alamat" name="alamat"
        						value="<?=$waralaba['alamat'];?>">
        					<small class="form-text text-danger"><?=form_error('alamat')?></small>
        				</div>
        				<div class="form-group">
        					<label for="jarak">Jarak (Yogyakarta dengan Pusat Waralaba ) (Km)</label>
        					<input type="text" class="form-control" id="jarak" name="jarak"
        						value="<?=$waralaba['jarak'];?>">
        					<small class="form-text text-danger"><?=form_error('jarak')?></small>
        				</div>
        				<div class="form-group">
        					<label for="laba">Laba Bersih (per-bulan)</label>
        					<input type="text" class="form-control" id="laba" name="laba"
        						value="<?=$waralaba['laba'];?>">
        					<small class="form-text text-danger"><?=form_error('laba')?></small>
        				</div>
        				<div class="form-group">
        					<label for="modal">Modal</label>
        					<input type="text" class="form-control" id="modal" name="modal"
        						value="<?=$waralaba['modal'];?>">
        					<small class="form-text text-danger"><?=form_error('modal')?></small>
        				</div>
        				<div class="form-group">
        					<label for="jumlah_cabang">Jumlah Cabang</label>
        					<input type="text" class="form-control" id="jumlah_cabang" name="jumlah_cabang"
        						value="<?=$waralaba['jumlah_cabang'];?>">
        					<small class="form-text text-danger"><?=form_error('jumlah_cabang')?></small>
        				</div>

        				<div class="form-group">
        					<label for="foto">Logo Brand</label><br>

							<img class="img-thumbnail mb-2"
                            src="<?=base_url();?>assets/img/logo/<?=$waralaba['logo']?>" width="100px"
                            height="100px">
        					<input type="file" class="form-control-file" id="foto" name="foto">
        					<small class=" form-text text-danger">
        						<?=form_error('foto')?>
        					</small>
        				</div>

        				<div class="text-center">
        					<button type="submit" name="register" class="btn btn-primary tombol">Submit</button>
        				</div>
        			</form>
        		</div>
        	</div>

        </div>
        <!-- /.container-fluid -->
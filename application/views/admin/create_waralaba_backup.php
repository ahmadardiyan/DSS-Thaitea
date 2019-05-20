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
        					<div class="row">
        						<div class="col-md-6 col-xs-6">
        							<label for="jarak">Jarak (Yogyakarta dengan Pusat Waralaba ) (Km)</label>
        							<input type="text" class="form-control" id="jarak" name="jarak"
        								value="<?=set_value('jarak')?>">
        							<small class="form-text text-danger"><?=form_error('jarak')?></small>
        						</div>
        						<div class="col-md-6 col-xs-6">
        							<label for="bobot_jarak">Bobot Jarak</label>
        							<select name="bobot_jarak" class="form-control" id="bobot_jarak">
        								<option value="">Pilih</option>
        								<option value="1">Sangat Jauh</option>
        								<option value="2">Jauh</option>
        								<option value="3">Sedang</option>
        								<option value="4">Dekat</option>
        								<option value="5">Sangat Dekat</option>
        							</select>
        							<small class="form-text text-danger"><?=form_error('bobot_jarak')?></small>
        						</div>
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-md-6 col-xs-6">
        							<label for="laba">Laba Bersih (per-bulan)</label>
        							<input type="text" class="form-control" id="laba" name="laba"
        								value="<?=set_value('laba')?>">
        							<small class="form-text text-danger"><?=form_error('laba')?></small>
        						</div>
        						<div class="col-md-6 col-xs-6">
        							<label for="bobot_laba">Bobot Laba</label>
        							<select name="bobot_laba" class="form-control" id="bobot_laba">
        								<option value="">Pilih</option>
        								<option value="1">Sangat Sedikit</option>
        								<option value="2">Sedikit</option>
        								<option value="3">Sedang</option>
        								<option value="4">Banyak</option>
        								<option value="5">Sangat Banyak</option>
        							</select>
        							<small class="form-text text-danger"><?=form_error('bobot_laba')?></small>
        						</div>
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-md-6 col-xs-6">
        							<label for="modal">Modal</label>
        							<input type="text" class="form-control" id="modal" name="modal"
        								value="<?=set_value('modal')?>">
        							<small class="form-text text-danger"><?=form_error('modal')?></small>
        						</div>
        						<div class="col-md-6 col-xs-6">
        							<label for="laba">Bobot Modal</label>
        							<select name="laba" class="form-control" id="laba">
        								<option value="">Pilih</option>
        								<option value="1">Sangat Tinggi</option>
        								<option value="2">Tinggi</option>
        								<option value="3">Sedang </option>
        								<option value="4">Rendah</option>
        								<option value="5">Sangat Rendah</option>
        							</select>
        							<small class="form-text text-danger"><?=form_error('laba')?></small>
        						</div>
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-md-6 col-xs-6">
        							<label for="jumlah_cabang">Jumlah Cabang</label>
        							<input type="text" class="form-control" id="jumlah_cabang" name="jumlah_cabang"
        								value="<?=set_value('jumlah_cabang')?>">
        							<small class="form-text text-danger"><?=form_error('jumlah_cabang')?></small>
        						</div>
        						<div class="col-md-6 col-xs-6">
        							<label for="laba">Bobot Jumlah Cabang</label>
        							<select name="laba" class="form-control" id="laba">
        								<option value="">Pilih</option>
        								<option value="1">Sangat Sedikit</option>
        								<option value="2">Sedikit</option>
        								<option value="3">Sedang</option>
        								<option value="4">Banyak</option>
        								<option value="5">Sangat Banyak</option>
        							</select>
        							<small class="form-text text-danger"><?=form_error('laba')?></small>
        						</div>
        					</div>
        				</div>

        				<div class="form-group">
        					<label for="foto">Logo Brand</label><br>

        					<input type="file" class="form-control-file" id="foto" name="foto"
        						value="<?=set_value('foto')?>">
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
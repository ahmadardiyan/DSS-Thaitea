<div class="jumbotron jumbotron-fluid">
<div class="container">
	
	<div class="row justify-content-center">
		<div class="col-md-8 content text-left">
			<form action="" method="post">
					<h3 class="text-center ">Rekomendasi Waralaba Thaitea</h3>
				<div class="form-group">
					<label for="jarak">Jarak</label>
					<select name="jarak" class="form-control" id="jarak">
                                <option value="">Pilih</option>
                                <option value="1">Sangat Tidak Penting</option>
                                <option value="2">Tidak Penting</option>
                                <option value="3">Biasa</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
					<small class="form-text text-danger"><?=form_error('jarak')?></small>
				</div>
				<div class="form-group">
					<label for="laba">Laba</label>
					<select name="laba" class="form-control" id="laba">
                                <option value="">Pilih</option>
                                <option value="1">Sangat Tidak Penting</option>
                                <option value="2">Tidak Penting</option>
                                <option value="3">Biasa</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
					<small class="form-text text-danger"><?=form_error('laba')?></small>
				</div>
				<div class="form-group">
					<label for="modal">Modal</label>
					<select name="modal" class="form-control" id="modal">
                                <option value="">Pilih</option>
                                <option value="1">Sangat Tidak Penting</option>
                                <option value="2">Tidak Penting</option>
                                <option value="3">Biasa</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
					<small class="form-text text-danger"><?=form_error('modal')?></small>
				</div>
				<div class="form-group">
					<label for="jumlah_cabang">Jumlah Cabang</label>
					<select name="jumlah_cabang" class="form-control" id="jumlah_cabang">
                                <option value="">Pilih</option>
                                <option value="1">Sangat Tidak Penting</option>
                                <option value="2">Tidak Penting</option>
                                <option value="3">Biasa</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
					<small class="form-text text-danger"><?=form_error('jumlah_cabang')?></small>
				</div>
				
				<div class="text-center">
					<button type="submit" name="register" class="btn btn-primary tombol">Submit</button>
				</div>
			</form>
		</div>
	</div>

</div>
</div>
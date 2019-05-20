        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- Page Heading -->
        	<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <h2 class="m-0 mb-2 font-weight-bold text-primary">Daftar Waralaba</h2> -->

        	<!-- DataTales Example -->
        	<div class="card shadow mb-4">
        		<div class="row" style="margin-top:40px;margin-right:70px">

        			<div class="col-md-4 col-xs-12 ">
        				<div class="content">

        					<div class="text-center" style="margin-bottom:50px">
        						<h3 class="mb-3"><?= $waralaba['nama_waralaba'] ;?></h3>
        						<img class="img-thumbnail mb-2"
        							src="<?=base_url();?>assets/img/logo/<?=$waralaba['logo']?>" width="200px"
        							height="200px">
        					</div>

        				</div>
        			</div>
        			<div class="col-md-4 col-xs-12 ">
        				<h5 style="margin-bottom:5px">Phone</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['phone'] ;?> </p>

        				<h5 style="margin-bottom:5px">Lokasi</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['alamat'] ;?> </p>

        				<h5 style="margin-bottom:5px">Jarak</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['jarak']?> Km</p>

        			</div>
        			<div class="col-md-4 col-xs-12 ">
        				<h5 style="margin-bottom:5px">Laba</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['laba']?></p>

        				<h5 style="margin-bottom:5px">Modal</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['modal']?></p>

        				<h5 style="margin-bottom:5px">Jumlah Cabang</h5>
        				<p style="margin-bottom:20px"><?= $waralaba['jumlah_cabang']?></p>
        			</div>

        			<div class="col-md-12 col-xs-12" style="margin:0px 40px 40px 40px">
        				<div class="content">


        					<?= $waralaba['deskripsi_waralaba']?>


        				</div>
        			</div>

        		</div>
        	</div>
        </div>
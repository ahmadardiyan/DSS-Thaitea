  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  	<div class="container">
  		<h1 class="display-4">Sistem Pendukung Keputusan <br><span>(Metode Weighted Product)</span> <br> Pemilihan
  			Waralaba Thaitea</h1>
  		<!-- <h1 class="display-4">Get work done <span>faster</span> <br>and <span>better</span> with us</h1> -->
  		<a href="<?=base_url()?>rekomendasi" class=" btn btn-primary tombol"> Get Started </a>
  	</div>
  </div>
  <!-- end jumbotron -->

  <!-- container -->
  <div class="container">
  	<section id="daftar-waralaba">
  		<h1 class="text-center mb-3">Daftar Waralaba Thaitea</h1>
  		<div class="row justify-content-center text-center">

  			<?php foreach ($waralaba as $w):?>
  			<a href="<?=base_url();?>detail-waralaba/<?=$w['id']?>">
  				<div class="col-md-4 mb-4">
  					<div class="card" style="width: 18rem;">
  						<img src="<?=base_url();?>assets/img/logo/<?=$w['logo']?>" class="card-img-top" alt="..." height="50%">
  						<!-- <div class="card-body"> -->
  							<!-- <h5 class="card-title">DUM DUM THAI TEA</h5> -->
  							<!-- <a href="#" class="btn btn-primary tombol">Go somewhere</a> -->
  						<!-- </div> -->
  					</div>
  				</div>
  			</a>
  			<?php endforeach;?>

  		</div>
  	</section>

  </div>
  <!-- end container -->
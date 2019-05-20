<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- My Font -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- FOnt Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<title>ThaiTea</title>
</head>

<body>
	<!-- navbar -->

	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="<?=base_url()?>">ThaiTea</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="<?=base_url()?>">Home <span
							class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#daftar-waralaba">Daftar Waralaba</a>
					<a class="nav-item nav-link" href="<?=base_url()?>rekomendasi">Rekomendasi</a>
					<a class="nav-item nav-link " href="#">About</a>
					<?php if (!isset($_SESSION['login'])) : ?>
					<a class="nav-item btn btn-primary tombol" href="<?=base_url();?>login">Login</a>
					<?php else : ?>
					<!-- <a class="nav-item btn btn-danger tombol" href="<?=base_url();?>logout">logout</a> -->
					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> -->
							<img class="img-profile rounded-circle" width="30px" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
							aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?=base_url()?>admin">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="<?=base_url()?>logout" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</nav>

	<!-- end navbar -->
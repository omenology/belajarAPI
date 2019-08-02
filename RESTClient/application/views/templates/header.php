<!DOCTYPE html>
<html>
	<head>
		<title><?= $judul ?></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= base_url(); ?>">Belajar CI</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>Mahasiswa">Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang</a>
					</li>
				</ul>
			</div>
		</nav>
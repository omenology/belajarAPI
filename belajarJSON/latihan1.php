<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);
$menu = $menu['menu'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HUT</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="120px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>All Menu</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach ($menu as $row): ?>
				<div class="col-4">
					<div class="card mb-3">
						<img src="img/menu/<?=$row['gambar'] ?>" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?=$row['nama'] ?></h5>
							<p class="card-text"><?=$row['deskripsi'] ?></p>
							<h5 class="card-title">Rp.<?=$row['harga'] ?></h5>
							<a href="#" class="btn btn-primary">Pesan Sekarang</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
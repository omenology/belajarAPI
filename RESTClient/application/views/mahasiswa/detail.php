<div class="container">
	<div class="row">
		<div class="card mt-3">
			<div class="card-header">
				Detail Mahasiswa
			</div>
			<div class="card-body">
				<h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
				<p class="card-text"><?= $mahasiswa['npm'] ?></p>
				<p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
				<a href="<?=base_url() ?>mahasiswa" class="btn btn-primary">kembali</a>
			</div>
		</div>
	</div>
</div>
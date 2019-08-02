<div class="container">
	<div class="row">
		<div class="col-6">
			<a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary my-3">Tambah Data</a>
			<?php if($this->session->flashdata('flasher')): ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Data mahasiswa berhasil <strong><?= $this->session->flashdata('flasher') ?></strong>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<div class="card">
				<div class="card-header">
					Mahasiswa
				</div>
				<ul class="list-group list-group-flush">
					<?php foreach ($mahasiswa as $row): ?>
					<li class="list-group-item">
						<?= $row['nama'] ?>
						<a href="<?=base_url().'mahasiswa/hapus/'.$row['id']; ?>" onclick="return confirm('yakin ?')" class="badge badge-danger float-right ml-1">Delete</a>
						<a href="<?=base_url().'mahasiswa/detail/'.$row['id']; ?>"class="badge badge-primary float-right ml-1">Detail</a>
						<a href="<?=base_url().'mahasiswa/ubah/'.$row['id']; ?>"class="badge badge-success float-right ml-1">Update</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
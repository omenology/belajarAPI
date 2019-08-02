<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card mt-3">
				<div class="card-header">
					Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label>NPM</label>
							<input type="number" class="form-control" name="npm">
							<small><?= form_error('npm')?></small>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama">
							<small><?= form_error('nama')?></small>
						</div>
						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" name="email">
							<small><?= form_error('email')?></small>
						</div>
						<div class="form-group">
							<label>Jurusan</label>
							<select class="form-control" name="jurusan">
								<option value="informatika">informatika</option>
								<option value="industri">industri</option>
								<option value="sipil">sipil</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
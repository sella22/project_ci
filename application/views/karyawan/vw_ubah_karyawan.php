<!-- Page Content -->
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Karyawan
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?= $karyawan['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" value="<?= $karyawan['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="nim">Bagian</label>
							<input type="text" name="bagian" value="<?= $karyawan['bagian']; ?>" class="form-control" id="bagian" placeholder="Bagian">
							<?= form_error('bagian', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="status">Status Pekerjaan</label>
							<select name="status" id="status" class="form-control">
								<option value="Aktif" <?php if ($karyawan['status'] == "Aktif") {
																echo "selected";
															} ?>>Aktif</option>
								<option value="Berhenti" <?php if ($karyawan['status'] == "Berenti") {
																echo "selected";
															} ?>>Berenti</option>
							</select>
							<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('Karyawan/') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Karyawan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>

<!-- Page Content -->
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $judul; ?></h1>

				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<img src="<?= base_url('assets/img/makanan/') . $makanan['gambar']; ?>" style="width:400px" class="img-thumbnail">
						</div>
						<div class="col mr-2">
							<div class="card-body">
								<form action="" method="POST">
									<input type="hidden" name="id" value="<?= $makanan['id']; ?>">
									<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
									<input type="hidden" name="stok" value="<?= $makanan['stok'] ?>">
									<div class="form-group">
										<label for="nama">Nama Makanan</label>
										<input name="nama" type="text" value="<?= $makanan['nama']; ?>" readonly class="form-control" id="nama">
									</div>
									<div class="form-group">
										<label for="stok">Stok</label>
										<input name="stok" value="<?= $makanan['stok']; ?>" type="text" readonly class="form-control" id="pengarang">
									</div>
									<div class="form-group">
										<label for="harga">Harga</label>
										<input name="harga" value="<?= $makanan['harga']; ?>" type="text" readonly class="form-control" id="harga">
									</div>
									<div class="form-group">
										<label for="jumlah">Jumlah</label>
										<input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
										<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="total">Total Harga</label>
										<input type="text" name="total" id="total" readonly class="form-control">
									</div>
									<button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

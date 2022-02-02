<!-- Page Content -->
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $judul; ?></h1>
                <div class="card-header justify-content-center">
                    Form Tambah Data Makanan
                    </div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input name="harga" type="text" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="stok">Stok</label>
							<input name="stok" value="<?= set_value('stok'); ?>" type="text" class="form-control" id="stok" placeholder="Stok">
							<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
							</div>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Makanan</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Data Makanan
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $makanan['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $makanan['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama','<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga</label>
                            <input type="text" name="harga" value="<?= $makanan['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga','<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Stok</label>
                            <input type="text" name="stok" value="<?=$makanan['stok']; ?>" class="form-control" id="stok" placeholder="Stok">
                            <?= form_error('stok','<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/makanan/'). $makanan['gambar']; ?>" style="width:100px" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Makanan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Update Makanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
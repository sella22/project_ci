<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="clearfix">
			<div class="float-left">
				<h1 class="page-header"><?php echo $judul; ?></h1>
			</div>
			<div class="col-md-4 col-md-offset-10">
				<h1 class="h3 mb-4 text-gray 800">
					<a href="<?= base_url(); ?>Makanan/tambah" class="btn btn-outline btn-info btn-sm">Tambah Makanan</a>
				</h1>
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama</td>
								<td>Harga</td>
								<td>Stok</td>
								<td>Gambar</td>
								<td>Aksi</td>
							</tr>
						</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($makanan as $us) : ?>
									<tr>
										<td> <?= $i; ?>.</td>
										<td><?= $us['nama']; ?></td>
										<td><?= $us['harga']; ?></td>
										<td><?= $us['stok']; ?></td>
										<td><img src="<?= base_url('assets/img/makanan/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
										<td>
											<a href="<?= base_url('Makanan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
											<a href="<?= base_url('Makanan/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
										</td>
									</tr>
									<?php $i++; ?>
									<?php endforeach; ?>
							</tbody>
					</table>
				</div>
			</div>
                        <!-- /.col-lg-12 -->
         </div>
                    <!-- /.row -->
	</div>
                <!-- /.container-fluid -->
</div>
            <!-- /#page-wrapper -->


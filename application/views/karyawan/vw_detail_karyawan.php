<!-- Page Content -->
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $judul; ?></h1>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Detail Karyawan
				</div>
				<div class="card-body">

					<h2 class="card-title"><?= $karyawan['nama']; ?></h2>
					<div class="row">
						<div class="col-md-4">Bagian</div>
						<div class="col-md-2">:</div>
						<div class="col-md-6"><?= $karyawan['bagian']; ?></div>
					</div>

					<div class="row">
						<div class="col-md-4">Status</div>
						<div class="col-md-2">:</div>
						<div class="col-md-6"><?= $karyawan['status']; ?></div>
					</div>
				</div>
				<div class="card-footer justify-content-center">
					<a href="<?= base_url('Karyawan') ?>" class="btn btn-danger">Tutup</a>
				</div>
			</div>
		</div>

	</div>
</div>

</div>

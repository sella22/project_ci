<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="float-left">
					<h1 class="page-header"><?php echo $judul; ?></h1>
				</div>
				<div class="row">
                    <div class="col-lg-12">
							<div class="float-right">
								<h1 class="h3 mb-4 text-gray 800">
									<a href="<?= base_url(); ?>Penjualan/export"class="btn btn-info btn-sm">Export</a>
								</h1>
							</div>
    	
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="100%" cellspacing="0">
											<thead>
												<tr>
													<td>No</td>
													<td>No Pembelian</td>
													<td>Tanggal</td>
													<td>Pelanggan</td>
													<td>Total</td>
													<td>Status</td>
													<td>Aksi</td>
												</tr>
											</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($penjualan as $us) : ?>
												<tr>
													<td><?= $i; ?>.</td>
													<td><?= $us['no_penjualan']; ?></td>
													<td><?= $us['tanggal']; ?></td>
													<td><?= $us['nama']; ?></td>
													<td><?= $us['total_bayar']; ?></td>
													<td><?= $us['status']; ?></td>
													<td>
														<a href="<?= base_url('Penjualan/detail/' . $us['no_penjualan']); ?>" class="badge badge-danger">Detail</a>
													</td>
												</tr>
												<?php $i++ ?>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
    						</div>
						</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

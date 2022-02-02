<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="float-left">
					<h1 class="page-header"><?php echo $judul; ?></h1>
	<div class="row">
		<div class="col-md-12">
			<?= $this->session->flashdata('message');
			?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>No Pembelian</td>
						<td>Tanggal</td>
						<td>Total</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($pembelian as $us) : ?>
						<tr>
							<td> <?= $i; ?>.</td>
							<td><?= $us['no_penjualan']; ?></td>
							<td><?= $us['tanggal']; ?></td>
							<td><?= $us['total_bayar']; ?></td>
							<td><?= $us['status']; ?></td>
							<td>
								<a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

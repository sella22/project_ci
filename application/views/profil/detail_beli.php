<div id="page-wrapper">
	<div class="container-fluid">
		<div class="clearfix">
			<div class="float-left">
				<h1 class="page-header"><?php echo $judul; ?></h1>
	<div class="row">
	<div class="float-right">
            <a href="<?= base_url('Profil/pembelian') ?>" class="btn btn-secondary btn-sm">
                <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali
            </a>
        </div>
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
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
        <form action="" method="POST">
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>No Pembelian</td>
						<td>Makanan</td>
						<td>Jumlah</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($detailbeli as $us) : ?>
						<tr>
							<td><?= $i; ?>.</td>
							<td><?= $us['no_penjualan']; ?></td>
							<td><?= $us['nama_makanan']; ?></td>
							<td><?= $us['jumlah']; ?></td>
							<td><?= $us['total']; ?></td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
	</div>
        <div class="col-md-12">
        <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
        <table class="table">
        <tr>
            <td>Apakah Pesanan Susah Anda Terima ?</td>
            <td>
                <select name="status" id="status" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="Diterima">Sudah</option>
                    <option value="Gagal">Belum</option>
                </select>
                <?= form_error('status', '<small class="text-danger pi-3">', '</small>');?>
            </td>
            <td>
            <td>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah Status</button>
        </div>
    </form>
</div>
</div>

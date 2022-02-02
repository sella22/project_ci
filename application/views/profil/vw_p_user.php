<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $judul; ?></h1>
				<?= $this->session->flashdata('message');
				?>
			</div>
				<?php $i = 1; ?>
				<?php foreach ($makanan as $us) : ?>
		 		<div class="col-xl-1 col-md-3 mb-5">
					<div class="col-lg-11">
						<div class="panel panel-info">
                            <div class="panel-heading">
								<a><?= $us['nama'] ?></a>
                            </div>
							<div class="panel-body">
								<img src="<?= base_url('assets/img/makanan/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail">
									<div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
									<div>Stok <a class="badge badge-info"><?= $us['stok'] ?></a></div>
							</div>
												
							<div class="panel-footer">
								<a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>"class="btn btn-info">Beli</a>
							</div>
						</div>	
					</div>				
				</div>
				<?php endforeach ?>
		</div>	
	</div>
</div>


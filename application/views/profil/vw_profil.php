<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $title; ?></h1>
			</div>
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-1">
						<img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
					</div>
					<div class="col-md-8"  style="max-width: 540px;">
						<div class="card-body">
							<h5 class="card-title"><?= $user['nama']; ?></h5>
							<p class="card-text"><?= $user['email']; ?></p>
							<p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
						<h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
						</div>
						<form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
							<div class="form-group">
								<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Daftar Akun
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="<?= base_url(); ?>auth">Sudah Punya akun? Login!</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
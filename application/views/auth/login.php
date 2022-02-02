		<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Halaman Login</h1>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
								<form class="user" method="post" action="<?= base_url('auth'); ?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Alamat Email...">
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>

									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgot-password.html">Lupa Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="<?= base_url(); ?>auth/registrasi">Buat akun!</a>
								</div>
                    </div>
                </div>
            </div>
        </div>

       
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-cutlery fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                            				<div class="huge"> <?= $makanan ?> </div>
											<div>Jumlah Makanan</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="<?= base_url(); ?>Makanan">View Makanan</a></span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?= $penjualan ?></div>
                                            <div>Jumlah Penjualan</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="<?= base_url(); ?>Penjualan">View Penjualan</a></span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?= $us ?></div>
                                            <div>Jumlah User</div>
                                        </div>
                                    </div>
                                </div>
                                
                                </a>
                            </div>
                        </div>
                    </div>

					<div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6207598678843!2d101.42331541457196!3d0.5701811995840219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab67086f2e89%3A0x65a24264fec306bb!2sPoliteknik%20Caltex%20Riau!5e0!3m2!1sen!2sid!4v1626971272815!5m2!1sen!2sid" width="885" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
								<div class="panel-body">
                                    <div id="myChart"></div>
                                </div>
							</div>
						</div>
					</div>

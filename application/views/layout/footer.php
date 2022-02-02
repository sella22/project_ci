<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

</div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?=base_url('assets/')?>js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?=base_url('assets/')?>js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
		<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?=base_url('assets/')?>js/startmin.js"></script>

        <script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	})
	$(document).ready(function() {
		$("#jumlah").on('keydown keyup change blur', function() {
			var harga = $("#harga").val();
			var jumlah = $("#jumlah").val();

			var total = parseInt(harga) * parseInt(jumlah);
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
				alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
				reset()
			}
		});

		function reset() {
			$('input[name="jumlah"]').val('')
			$('input[name="total"]').val('')
		}
	});
</script>

<script type="text/javascript">
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php
				foreach ($totalb as $data) {
					echo "'" . $data['makanan'] . "',";
				}
				?>
			],
			datasets: [{
				label: 'Jumlah Makanan Terjual',
				backgroundColor: "#4e73df",
				hoverBackgroundColor: "#2e59d9",
				borderColor: "#4e73df",
				data: [
					<?php
					foreach ($totalb as $data) {
						echo $data['jum'] . ", ";
					}
					?>
				]
			}]
		},
		options: {
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 10,
					right: 25,
					top: 25,
					bottom: 0
				}
			},
			scales: {
				xAxes: [{
					time: {
						unit: 'makanan'
					},
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						maxTicksLimit: 20
					},
					maxBarThickness: 50,
				}],
				yAxes: [{
					gridLines: {
						color: "rgb(234,236,244)",
						zeroLineColor: "rgb(234,236,244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					}
				}],
			},
			tooltips: {
				titleMarginBottom: 10,
				titleFontColor: '#6e707e',
				titleFontSize: 14,
				backgroundColor: "rgb(255,255,255)",
				bodyFontColor: "#858796",
				borderColor: "#dddfeb",
				borderWidth: 1,
				xPadding: 15,
				yPadding: 15,
				displayColors: false,
				caretPadding: 10,
			},
		}
	});
</script>

    </body>
</html>

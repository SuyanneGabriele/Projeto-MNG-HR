<!DOCTYPE html>
<html>

<head>

	<title>Vagas</title>

	<?php
	require_once('include/links.php')
	?>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar --> 
		<?php 
		require_once('include/navbar.php');
		?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php
				require_once('include/topbar.php')
				?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Content Row -->
					<div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-primary text-uppercase mb-1">Recursos Humanos</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-male fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-success text-uppercase mb-1">Financeiro</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-dollar fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-secondary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-secondary text-uppercase mb-1">Adminstração</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-paste fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pending Requests Card Example -->
						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-warning text-uppercase mb-1">Comercial</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-truck fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pending Requests Card Example -->
						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-danger shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-danger text-uppercase mb-1">Operacional</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-laptop fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-md-6 mb-4">
							<div class="card border-left-dark shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="font-weight-bold text-dark text-uppercase mb-1">Produção</div>
										</div>
										<div class="col-auto">
											<i class="fas fa fa-barcode fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<?php
			require_once('include/footer.php');
			?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/chart-area-demo.js"></script>
	<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

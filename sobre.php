	<!DOCTYPE html>
	<html>

	<head>

		<meta charset="utf-8">

		<title>Início</title>

		<?php
		require_once('include/links.php')
		?>
		
	</head>

	<body>

		<!-- Page Wrapper -->
		<div id="wrapper">

			<?php
			require_once('include/navbar.php');
			?>

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column" style="background-image:url('media/images/imagem.jpg')">

				<!-- Content -->
				<div id="content">

					<!-- Topbar -->

					<?php
					require_once('include/topbar.php')
					?>

					<!-- End of Topbar -->
				</div>


				<!-- Inicio -->

				<div class="card" style=" margin-top:5rem; margin-right: 12rem; margin-left: 12rem; font-size: 25px; text-align: center;
				border-radius:25px; opacity: 0.8;">
				<img src="..." class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="card-title" style="text-align: center; font-size: 35px;">
						<!--Sobre a nossa pagina -->
						<strong algin="justify">SOBRE O NOSSO SISTEMA</strong></h5>
						<p class="card-text" algin="justify">O nosso sistema é feito para empresas que porcuram praticidade e uma melhor perfomance na área de Recursos Humanos, tem como principais funções organizar e fazer o gerenciamento dos curriculos selecionados mais fácil</p>
						<!-- 		Parceiros -->
						<div class="parceiros p-2">
							<p>
								<strong>Parceiros:</strong>
								<p algin="justify">Havan | Senior | HBSIS</p>
								<br>
							</p>
							<!-- Missão -->
						</div><p><strong>Missão:</strong></p>
						<p algin="justify">Ajudar empresas que procuram um melhor desempenho na área de Recursos Humanos</p>

						<!-- Visão -->
						<p><strong>Visão:</strong></p>
						<p algin="justify">Nós acreditamos que a organização é essecial, então desenvolvemos um sistema que auxilia os funcionários a ordenar os curriculos aumentando a eficiência e agilidade do trabalho.</p>

						<p algin="justify">Ficou interessado? clique no botão trabalhe conosco<br>
							<button type="button" class="btn btn-primary mt-5" href="">
								Trabalhe conosco
							</button></p>
						</div>
					</div>

					<!-- Fim -->

					<!-- Footer -->
					<?php
					require_once('include/footer.php')
					?>
					<!-- End of Footer -->
				</div>
				<!-- End of Content Wrapper -->
			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>
		
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

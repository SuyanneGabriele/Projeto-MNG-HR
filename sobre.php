<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Início</title>
	<?php
	require_once('include/links.php')
	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.card-title-ico {
			color: blue;
			font-size: 25px;
			font-weight: 800;
		}

		.card-text-ico {
			font-size: 20px;
		}
	</style>
</head>
<body style="background-color: rgb(241, 241, 208);">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<?php
		require_once('include/navbar.php');
		?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column" style="color: black;">
			<!-- Content -->
			<div id="content">
				<!-- Topbar -->
				<?php
				require_once('include/topbar.php')
				?>
				<!-- End of Topbar -->
			</div>

			<!-- Inicio -->
			<header>
				<img src="media/images/sobre4.jpg" style="opacity: 0.9;">
			</header>
			<div style=" margin-top:1rem; font-size: 25px; text-align: center;">
				<div class="card-body">
					<!--Sobre a nossa pagina -->
					<h5 class="card-title" style="text-align: center; font-size: 35px;"><strong algin="justify">Sobre</strong></h5>
					<p class="card-text" algin="justify">O nosso sistema é feito para empresas que porcuram praticidade e uma melhor perfomance na área de Recursos Humanos, tem como principais funções organizar e fazer o gerenciamento dos curriculos selecionados mais fácil</p>
					<!-- 		Parceiros -->
					<div class="parceiros p-2">
						<p>
							<strong>Parceiros:</strong>
							<p algin="justify">Havan | Senior | HBSIS</p>
							<br>
						</p>
					</div>
					<!-- Missão -->
					<p><strong>Missão:</strong></p>
					<p algin="justify">Ajudar empresas que procuram um melhor desempenho na área de Recursos Humanos</p>

					<!-- Visão -->
					<p><strong>Visão:</strong></p>
					<p algin="justify">Nós acreditamos que a organização é essecial, então desenvolvemos um sistema que auxilia os funcionários a ordenar os curriculos aumentando a eficiência e agilidade do trabalho.</p>

					<p algin="justify">Ficou interessado? clique no botão trabalhe conosco<br>
						<button type="button" class="btn btn-primary mt-5" href="">Trabalhe conosco</button></p>
					</div>


					<div class="container">
						<div class="row">
							<div class="card-group mb-5" style="margin-left: auto; margin-right: auto;">
								<div class="card col-5 mx-4">
									<div class="card-body">
										<h5 class="card-title-ico">ICO Missão</h5>
										<p class="card-text-ico">Ajudar empresas que procuram um melhor desempenho na área de Recursos Humanos.</p>
									</div>
								</div>
								<div class="card col-5 mx-4">
									<div class="card-body">
										<h5 class="card-title-ico">ICO Visão</h5>
										<p class="card-text-ico">Nós acreditamos que a organização é essecial, então, desenvolvemos um sistema que auxilia os funcionários a ordenar os curriculos aumentando a eficiência e agilidade do trabalho.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
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
</div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

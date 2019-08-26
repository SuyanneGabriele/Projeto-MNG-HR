<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>Vagas</title>

	<?php
	require_once('include/links.php')
	?>

</head>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php
		require_once('include/navbar.php');
		?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Content -->
			<div id="content">

				<!-- Topbar -->

				<?php
				require_once('include/topbar.php')
				?>

				<!-- End of Topbar -->
				<!-- Inicio -->

				<div class="container">
					<!-- Outer Row -->
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-12 col-md-9">
							<div class="card o-hidden border-0 shadow-lg my-5">
								<div class="card-body p-0">

									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12 col">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4"><strong>Oportunidades</strong></h1>
												</div>
												<hr>
												<form class="form-inline md-form form-sm">
													<input class="form-control form-control-sm mr-3 w-75 col-11" type="text" placeholder="Search"
													aria-label="Search">
													<i class="fas fa fa-search"></i>
												</form>
												<hr>
												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Arquiteto de Software (DevOps)</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Blumenau(SC)</span>
													</div>
												</a>

												<hr>
												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Arquiteto de Software (Tecnologia)</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Itu(SP) ou Curitiba(PR)</span>
													</div>
												</a>
												<hr>

												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Dev Java (Manutenção Performance Corporativa e Tecnologia)</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Blumenau(SC)</span>
													</div>
												</a>
												<hr>

												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Dev Java (DevOps)</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Blumenau(SC)</span>
													</div>
												</a>
												<hr>

												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Analista de Sistemas Java (DevOps)</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Blumenau(SC)</span>
													</div>
												</a>
												<hr>

												<a href="informacoes_vaga.php" style="text-decoration: none;">	
													<div class="topnav">
														<button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button>
														<span style="color: black;">Analista de Inteligência de Mercado</span><br>
														<span style="font-size: 15px; color: rgba(0,0,0,.5);">Blumenau(SC)</span>
													</div>
												</a>
												<hr>
												<nav aria-label="...">
													<ul class="pagination pagination-sm">
														<li class="page-item disabled">
															<span class="page-link" id="pagina-first" disabled="disabled" tabindex="-1">«</span>
														</li>
														<li class="page-item disabled">
															<span class="page-link" id="pagina-previous" disabled="disabled" tabindex="-1">‹</span>
														</li>
														<li class="page-item active"><span class="page-link">
																1
																<span class="sr-only">(current)</span>
															</span>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#" id="pagina-next">›</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#" id="pagina-last">»</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim -->
			</div>



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
<?php
  require_once('links_footer.php');
?>


</body>

</html>

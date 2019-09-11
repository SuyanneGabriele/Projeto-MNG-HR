<?php 

	require_once('include/conexao.php');

	$sql = "SELECT * FROM curriculos";
	$result = mysqli_query($con, $sql) or die();
	$curriculo = $result->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem</title>
	<!-- Bootstrap CSS -->
	<?php
		/*require_once('include/area_restrita.php');*/
	?>
	<?php
	error_reporting(0);
	require_once('include/links.php');
	?>
</head>
<body class="bg-dark">

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
				require_once('include/topbar.php');
				?>
				<!-- End of Topbar -->
				<div class="container">
					<!-- Outer Row -->
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-12 col-md-9">
							<div class="card o-hidden border-0 shadow-lg my-5">
								<div class="card-body p-0 text-center">

									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12 col" style="margin-left: auto; margin-right: auto;">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4"><strong>Curriculos</strong></h1>
												</div>

												<?php if (isset($alerta)) { ?>
													<div class="alert alert-<?=$alerta['tipo']?>">
														<?=$alerta['mensagem']?>
													</div>
												<?php } ?>

												<table class="table table-striped table-hover">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nome</th>
															<th>Sobrenome</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php while ($resultado = mysqli_fetch_array($result)) { ?>
															<tr>
																<th><?=$resultado['id']?></th>
																<td><?=$resultado['nome']?></td>
																<td><?=$resultado['sobrenome']?></td>
																<td><a type="button" name="infoVaga" href="cadastro.php?id=<?=$resultado['id']?>" class="btn btn-primary" style="float: right;">Ver detalhes</a></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
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
			require_once('include/footer.php')
			?>
			<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->
	</div>

	<!-- End of Page Wrapper -->
	<!-- Boostrap JS -->

	<?php
	  require_once('include/links_footer.php');
	?>

</body>
</html>
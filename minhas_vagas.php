<?php

require_once('include/conexao.php');
error_reporting(0);

$id = $_GET['id'];

$sql_profissao = "SELECT * FROM exp_profissional WHERE fk_usuario = '$id'";
$result_profissao = mysqli_query($con, $sql_profissao);
$num_profissao = mysqli_num_rows($result_profissao);    

$sql_escolaridade = "SELECT * FROM escolaridade WHERE fk_usuario = '$id'";
$result_escolaridade = mysqli_query($con, $sql_escolaridade);
$num_escolaridade = mysqli_num_rows($result_escolaridade);   

$sql_candidatado = "SELECT * FROM vagas_usuarios WHERE fk_usuario = '$id'";
$result_candidatado = mysqli_query($con, $sql_candidatado); 	
$num_candidatado = mysqli_num_rows($result_candidatado);
$info_candidatado = mysqli_fetch_assoc($result_candidatado);

$sql_vaga = "SELECT fk_usuario, fk_vaga, nome_vaga FROM vagas_usuarios
INNER JOIN vagas ON vagas_usuarios.fk_vaga = vagas.id WHERE fk_usuario = '$id'";
$result_vaga = mysqli_query($con, $sql_vaga);


?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Minhas vagas</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php
	require_once('include/links.php')
	?>

</head>
<style type="text/css">

.oculta_pesquisa{
	display: none;
}

.oculta_pesquisa{
	display: none;
}
.oculta_pesquisa{
	display: none;
}

</style>
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
								<div class="card-body p-0 text-center">

									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12 col" style="margin-left: auto; margin-right: auto;">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4"><strong>Minhas Vagas</strong></h1>
												</div>
												<table class="table table-striped table-hover">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nome</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php if ($num_candidatado > 0) { ?>
														<?php while ($info_vaga = mysqli_fetch_array($result_vaga)) { ?>
														<tr>
															<td><?=$info_vaga['fk_vaga']?></td>
															<td>
																<?php echo utf8_encode($info_vaga['nome_vaga']); ?>	
															</td>
															<td><a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($info_vaga['fk_vaga']); ?>"><button type="button" name="infoVaga"  class="btn btn-info" style="float: right;">Ver detalhes</button></a></td>
														</tr>
														<?php } ?>
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


			<script type="text/javascript">
				<!-- Page Wrapper -->
				$("#barra_pesquisa").keydown(function(){
					$("#oculta_div").addClass("d-none");
				});
			</script>


			<!-- Footer -->
			<?php
			require_once('include/footer.php')
			?>
			<?php
			require_once('include/links_footer.php');
			?>

		</body>
		</html>
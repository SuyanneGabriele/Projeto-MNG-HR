<?php 

require_once('include/conexao.php');
require_once('include/area_restrita.php');

//	Verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (!isset($_GET['pagina'])) ? 1 :  $_GET['pagina']; 

//	Seta a quantidade de itens por página, neste caso, 5 itens 
$exibir = 10; 

$inicio_exibir = ($exibir * $pagina) - $exibir;

$sql = "SELECT * FROM usuario WHERE nivel = '0' LIMIT $inicio_exibir, $exibir";
$result = mysqli_query($con, $sql) or die();
$num = $result->num_rows;

//	Seleciona todos os itens da tabela 
$sql2 = "SELECT * FROM vagas";
$result2 = mysqli_query($con, $sql2) or die();
$num2 = $result2->num_rows;

$sql3 = "SELECT * FROM usuario";
$result3 = mysqli_query($con, $sql3) or die();
$num3 = $result3->num_rows;
$total2 = ceil($num3/$exibir);

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
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php while ($resultado = mysqli_fetch_array($result)) { ?>
															<tr>
																<th><?=$resultado['id']?></th>
																<td><?=utf8_encode($resultado['nome'])?></td>
																<td><a href="ver_perfil.php?id=<?php echo utf8_encode($resultado['id']); ?>"><button type="button" name="infoVaga" class="btn btn-info" style="float: right;">Ver detalhes</button></a></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
												<!-- ------ INÍCIO PAGINAÇÃO ------ -->
												<div class="row w-100 mt-3">
													<div class="col-6 col-md-6">
														<nav>
															<ul class="pagination">
																<li class="page-item <?=($pagina == 1) ? 'disabled' : ''?>"><a class="page-link" href="curriculos_admin.php?pagina=<?php echo $pagina-1; ?>">Anterior</a></li>
																
																<?php for ($i = 1; $i <= $total2; $i++){?>

																	<li class="page-item"><a class="page-link" href="curriculos_admin.php?pagina=<?=$i?>"><?php echo $i ?></a></li>

																<?php } ?>

																<li class="page-item <?=($pagina == $total2) ? 'disabled' : ''?>  "><a class="page-link" href="curriculos_admin.php?pagina=<?php echo $pagina+1; ?>">Próximo</a></li>
															</ul>
														</nav>
													</div>

													<!-- ------- FIM PAGINAÇÃO ------- -->
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
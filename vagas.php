<?php
require_once('include/conexao.php');
error_reporting(0);

//  Definir itens por página
$itens_por_pagina = 8;

//  Pegar página atual
$pagina = (isset($_GET["pagina"]))? (int)$_GET["pagina"] : 1;

//  Puxar informações do banco de dados
$sql = "SELECT * FROM vagas LIMIT $pagina, $itens_por_pagina";
$result = mysqli_query($con, $sql) or die();
$vaga = $result->fetch_assoc();
$num = $result->num_rows;

//  Pega a quantidade de vagas do banco de dados
$sql2 = mysqli_query($con, "SELECT nome_vaga, cidade FROM vagas");
$num_total = mysqli_num_rows($sql2);

//  Definir número de páginas
$num_pagina = ceil($num_total/$itens_por_pagina);
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Vagas</title>

	<?php
	require_once('include/links.php')
	?>

</head>
<style type="text/css">

<<<<<<< HEAD
	.oculta_pesquisa{
		display: none;
	}
=======
<<<<<<< HEAD
	.oculta_pesquisa{
		display: none;
	}
=======
.oculta_pesquisa{
	display: none;
}
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d
>>>>>>> e1a3863b840c27f282bccf17e855f0b1361563c9

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
								<div class="card-body p-0">

									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12 col">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4"><strong>Oportunidades</strong></h1>
												</div>
												<hr>
												<form class="form-inline md-form form-sm mb-3 mr-2 w-100 Row" method="POST">

													<!-- -------- AVISOS ---------- -->
													<?php if ($_SESSION['add_sucesso']) { ?>
														<div class="col-12">
															<div class="alert alert-success" role="alert">
																Vaga adicionada com sucesso!
															</div>
														</div>
													<?php }; UNSET($_SESSION['add_sucesso']); ?>

													<!-- ---------	BARRA PESQUISAR ---------- -->
													<input class="form-control form-control-sm ml-3 mr-3 w-75 col-11" type="search" id="barra_pesquisa" name="pesquisar" placeholder="Pesquisar" aria-label="Search">
													<i class="fas fa fa-search"></i>
<<<<<<< HEAD
=======
													<?php
													if ($pesquisar = $_POST['pesquisar'])
														$sql3 = "SELECT * FROM vagas WHERE nome_vaga LIKE '%$pesquisar%'";
													$result3 = mysqli_query($con, $sql3);
													while ($rows_vagas = mysqli_fetch_array($result3)){ ?>
<<<<<<< HEAD
													</form>
													<div class="topnav">
														<a href="informacoes_vaga.php" style="text-decoration: none;">
=======
>>>>>>> e1a3863b840c27f282bccf17e855f0b1361563c9
												</form>
												<?php
<<<<<<< HEAD
												if ($pesquisar = $_POST['pesquisar'])
													$sql3 = "SELECT * FROM vagas WHERE nome_vaga LIKE '%$pesquisar%'";
												$result3 = mysqli_query($con, $sql3);
												
												while ($rows_vagas = mysqli_fetch_array($result3)){ ?>
													<div class="topnav">
														<a href="informacoes_vaga.php" style="text-decoration: none;">
=======
												if ($num >0) { ?>
												<div class="topnav w-100 mt-3 d" id="oculta_div">

													<?php do{ ?>
													<div class="topnav mr-0">
														<a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" name="infoVaga" style="text-decoration: none;">
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d
>>>>>>> e1a3863b840c27f282bccf17e855f0b1361563c9
															<table class="w-100">
																<tbody>
																	<tr style="color: black;"><td><?php echo utf8_encode($rows_vagas['nome_vaga']); ?></td></tr>
																	<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($rows_vagas['cidade']); ?></td>
																	<td><button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button></td>
																	<tr><hr></tr>
																</tbody>
															</table>
														</a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
													</div>
												<?php } ?>

												<?php
												if ($num >0) { ?>
													<div class="topnav w-100 mt-3 d" id="oculta_div">

														<?php do{ ?>
															<div class="topnav mr-0">
																<a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" name="infoVaga" style="text-decoration: none;">
																	<table class="w-100">
																		<tbody>
																			<tr style="color: black;"><td><?php echo utf8_encode($vaga['nome_vaga']); ?></td></tr>
																			<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vaga['cidade']); ?></td>
																			<td><a type="button" name="infoVaga" href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" class="btn btn-primary" style="float: right;">Ver detalhes</a></td>
																			<tr><hr></tr>
																		</tbody>
																	</table>
																</a>
															<?php } while($vaga = $result->fetch_assoc()); ?>
														</div>

													</div>
														<?php } while($vaga = $result->fetch_assoc()); ?>
>>>>>>> e1a3863b840c27f282bccf17e855f0b1361563c9
													</div>
												<?php } ?>

													<?php
													if ($num >0) { ?>
														<div class="topnav w-100 mt-3 d" id="oculta_div">

															<?php do{ ?>
																<div class="topnav mr-0">
																	<a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" name="infoVaga" style="text-decoration: none;">
																		<table class="w-100">
																			<tbody>
																				<tr style="color: black;"><td><?php echo utf8_encode($vaga['nome_vaga']); ?></td></tr>
																				<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vaga['cidade']); ?></td>
																				<td><a type="button" name="infoVaga" href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" class="btn btn-primary" style="float: right;">Ver detalhes</a></td>
																				<tr><hr></tr>
																			</tbody>
																		</table>
																	</a>
																<?php } while($vaga = $result->fetch_assoc()); ?>
															</div>

														</div>
													<?php } ?>

													<!-- Pagination -->
													<div class="row w-100 mt-3">
														<div class="col-12 col-md-6">
															<nav>
																<ul class="pagination">
																	<li class="page-item"><a class="page-link" href="vagas.php?pagina=0">Anterior</a></li>

																	<?php
																	for ($i = 0; $i < $num_pagina; $i++) {
																		$estilo = "";
																		if ($pagina == $i)
																			$estilo = "\"active\"";
																		?>
																		<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="vagas.php?pagina=<?php echo $i; ?>"><?php echo $i+1;?></a></li>

<<<<<<< HEAD
																<?php } ?>
																<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?php echo $num_pagina-1; ?>">Próximo</a></li>
															</ul>
														</nav>
													</div>
													<div class="col-12 col-md-6 p-0">
														<a href="addvaga.php" class="btn btn-info float-right mt-2" style="margin-right: -12px">+ Adicionar vaga</a>
=======
																	<?php } ?>
																	<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?php echo $num_pagina-1; ?>">Próximo</a></li>
																</ul>
															</nav>
														</div>
														<div class="col-12 col-md-6 p-0">
															<a href="addvaga.php" class="btn btn-info float-right mt-2" style="margin-right: -12px">+ Adicionar vaga</a>
														</div>
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
<<<<<<< HEAD

=======
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
<<<<<<< HEAD
</div>
=======
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d

<script type="text/javascript">

	// $("#barra_pesquisa").keydown(function(){
	// 	$("#oculta_div").addClass("d-none");
	// });

	$( "#pesquisar" ).keypress(function( event ) {   
		if ( event.which == 13 ) {
			alert('enter pressionado');  
		}
	});


</script>

<!-- Footer -->
<?php
require_once('include/footer.php')
?>
<!-- End of Footer -->

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 7cf0257bfba859cebdcda1b6f3f060684d35f80d

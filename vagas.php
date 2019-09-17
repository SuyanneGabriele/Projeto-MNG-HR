<?php
require_once('include/conexao.php');

    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

    //seleciona todos os itens da tabela 
$sql = "SELECT * FROM vagas";
$result = mysqli_query($con, $sql) or die();
$num = $result->num_rows;

    //seta a quantidade de itens por página, neste caso, 2 itens 
$registros = 1; 

    //variavel para calcular o início da visualização com base na página atual 
$inicio = ($registros*$pagina)+$registros; 

    //seleciona os itens por página 
$sql2 = "SELECT nome_vaga, cidade from vagas limit $inicio,$registros"; 	
$result2 = mysqli_query($con, $sql2); 
$total = $result2->num_rows; 

    //calcula o número de páginas arredondando o resultado para cima 
$numPaginas = ceil($total/$registros); 

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
.oculta_pesquisa{
	display: none;
}
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43

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
													<?php if ($_SESSION['add_sucesso']) { ?>
<<<<<<< HEAD
														<div class="col-12">
															<div class="alert alert-success" role="alert">
																Vaga adicionada com sucesso!
															</div>
														</div>
=======
													<div class="col-12">
														<div class="alert alert-success" role="alert">
															Vaga adicionada com sucesso!
														</div>
													</div>
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43
													<?php }; UNSET($_SESSION['add_sucesso']); ?>
													<input class="form-control form-control-sm ml-3 mr-3 w-75 col-11" type="text" id="barra_pesquisa" name="pesquisar" placeholder="Pesquisar" aria-label="Search">
													<i class="fas fa fa-search"></i>
													<?php
													if ($pesquisar = $_POST['pesquisar'])
														$sql3 = "SELECT * FROM vagas WHERE nome_vaga LIKE '%$pesquisar%'";
													$result3 = mysqli_query($con, $sql3);
													while ($rows_vagas = mysqli_fetch_array($result3)){ ?>
<<<<<<< HEAD
													</form>
													<div class="topnav">
														<a href="informacoes_vaga.php" style="text-decoration: none;">
															<table class="w-100">
																<tbody>
																	<tr style="color: black;"><td><?php echo utf8_encode($rows_vagas['nome_vaga']); ?></td></tr>
																	<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($rows_vagas['cidade']); ?></td>
																	<td><button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button></td>
=======
												</form>
												<div class="topnav">
													<a href="informacoes_vaga.php" style="text-decoration: none;">
														<table class="w-100">
															<tbody>
																<tr style="color: black;"><td><?php echo utf8_encode($rows_vagas['nome_vaga']); ?></td></tr>
																<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($rows_vagas['cidade']); ?></td>
																<td><button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button></td>
																<tr><hr></tr>
															</tbody>
														</table>
													</a>
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
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43
																	<tr><hr></tr>
																</tbody>
															</table>
														</a>
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
															<?php } while($vaga = $result->fetch_assoc()) ?>
														</div>

													</div>
=======
														<?php } while($vaga = $result->fetch_assoc()); ?>
													</div>

												</div>
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43
												<?php } ?>

												<!-- Pagination -->
												<div class="row w-100 mt-3">
													<div class="col-12 col-md-6">
														<nav>
															<ul class="pagination">
<<<<<<< HEAD
																<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?php echo $numPaginas-1; ?>">Anterior</a></li>

																<?php
																for($i = 1; $i < $numPaginas + 1; $i++) {  

																} 
																?>
																<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="vagas.php?pagina=<?php echo $i; ?>"><?php echo $i-1;?></a></li>

															<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?php echo $numPaginas+1; ?>">Próximo</a></li>
														</ul>
													</nav>
												</div>
												<div class="col-12 col-md-6 p-0">
													<a href="addvaga.php" class="btn btn-info float-right mt-2" style="margin-right: -12px;">+ Adicionar vaga</a>
=======
																<li class="page-item"><a class="page-link" href="vagas.php?pagina=0">Anterior</a></li>

																<?php
																for ($i = 0; $i < $num_pagina; $i++) {
																	$estilo = "";
																	if ($pagina == $i)
																		$estilo = "\"active\"";
																	?>
																	<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="vagas.php?pagina=<?php echo $i; ?>"><?php echo $i+1;?></a></li>

																	<?php } ?>
																	<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?php echo $num_pagina-1; ?>">Próximo</a></li>
																</ul>
															</nav>
														</div>
														<div class="col-12 col-md-6 p-0">
															<a href="addvaga.php" class="btn btn-info float-right mt-2" style="margin-right: -12px">+ Adicionar vaga</a>
														</div>
													</div>
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43
												</div>
											</div>
										</div>
									</div>
<<<<<<< HEAD
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
=======

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
>>>>>>> 455cb8e9e51406cb93260f5d9ce40ce74ddf9e43
</div>
</div>

<script type="text/javascript">

	$("#barra_pesquisa").keydown(function(){
		$("#oculta_div").addClass("d-none");
	});

</script>

<!-- Footer -->
<?php
require_once('include/footer.php')
?>
<!-- End of Footer -->

</body>
</html>
<?php
require_once('include/conexao.php');
require_once('include/area_restrita.php');
error_reporting(0);

//	Verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (!isset($_GET['pagina'])) ? 1 :  $_GET['pagina']; 

//	Seta a quantidade de itens por página, neste caso, 5 itens 
$exibir = 10; 

$inicio_exibir = ($exibir * $pagina) - $exibir;

//  Puxar informações do banco de dados
$sql = "SELECT * FROM vagas LIMIT $inicio_exibir, $exibir";
$result = mysqli_query($con, $sql) or die();	
$num = $result->num_rows;

$sql2 = "SELECT * FROM vagas";
$result2 = mysqli_query($con, $sql2) or die();
$num2 = $result2->num_rows;
$total2 = ceil($num2/$exibir);

$email = $_SESSION['email'];

$sql_nivel = "SELECT * FROM usuario WHERE email = '$email'";
$result_nivel = mysqli_query($con, $sql_nivel);
$info_nivel = mysqli_fetch_assoc($result_nivel);
$nivel = $info_nivel['nivel']; 

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Vagas</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Vagas</title>

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
													<!-- ---------- ALERTA ----------- -->
													<?php if ($_SESSION['add_sucesso']) { ?>
														<div class="col-12">
															<div class="alert alert-success" role="alert">
																Vaga adicionada com sucesso!
															</div>
														</div>
													<?php }; UNSET($_SESSION['add_sucesso']); ?>

													<?php if ($_SESSION['excluido']) { ?>
														<div class="col-12">
															<h5 class="alert alert-danger" role="alert">
																Vaga excluida com sucesso!
															</h5>
														</div>
													<?php }; UNSET($_SESSION['excluido']); ?>

													<?php if ($_SESSION['editado']) { ?>
														<div class="col-12">
															<h5 class="alert alert-success" role="alert">
																Vaga editada com sucesso!
															</h5>
														</div>
													<?php }; UNSET($_SESSION['editado']); ?>

													<?php if ($_SESSION['npesquisar']) { ?>
														<div class="col-12">
															<h5 class="alert alert-warning" role="alert">
																Não foi encontrado nenhum resultado com a sua pesquisa!
															</h5>
														</div>
													<?php }; UNSET($_SESSION['npesquisar']); ?>
													<!-- -------- FIM ALERTA -------- -->

													<!-- -------- INICIO PESQUISAR -------- -->
													<input class="form-control form-control-sm ml-3 mr-3 w-75 col-11" type="text" id="barra_pesquisa" name="pesquisar" placeholder="Pesquisar" aria-label="Search">
													<button type="submit"><i class="fas fa fa-search"></i></button>
												</form> 
												<?php
												if ($pesquisar = $_POST['pesquisar']) {
													$sql3 = "SELECT * FROM vagas WHERE nome_vaga LIKE '%pesquisar%'";
													$result3 = mysqli_query($con, $sql3);
													$rows_vagas = mysqli_fetch_assoc($result3);
													$nome = $rows_vagas['nome_vaga'];	
													$sql_pesquisar = "SELECT * FROM vagas WHERE nome_vaga = '$nome'";
													$result_pesquisar = mysqli_query($con, $sql_pesquisar);
													while ($rows_vagas2 = mysqli_fetch_array($result_pesquisar)){ ?>
														<div class="topnav">
															<a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($rows_vagas2['id']); ?>" style="text-decoration: none;">
																<table class="w-100">
																	<tbody>
																		<tr style="color: black;"><td><?php echo utf8_encode($rows_vagas2['nome_vaga']); ?></td></tr>
																		<td style="font-size: 15px; color: rgba(0 , 0, 0, .5);"><?php echo utf8_encode($rows_vagas2['cidade']); ?></td>
																		<td><button type="button" name="infoVaga" href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($rows_vagas2['id']); ?>" class="btn btn-info" style="float: right;">Ver detalhes</button></td>
																		<tr><hr></tr>
																	</tbody>
																</table>
															</a>
														</div>
													<?php } ?>
												<?php } ?>
												<!-- ------- FIM PESQUISAR ------- -->

												<!-- ------- INÍCIO INFORMAÇÕES VAGAS ------ -->
												<?php
												if ($num >0) { ?>

													<?php while($vaga = $result->fetch_assoc()) { ?>
														<div class="topnav w-100 mt-3 d" id="oculta_div">
															<div class="topnav mr-0">
																<a href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" name="infoVaga" style="text-decoration: none;">
																	<table class="w-100">
																		<tbody>
																			<tr style="color: black;"><td><?php echo utf8_encode($vaga['nome_vaga']); ?></td></tr>
																			<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vaga['cidade']); ?></td>
																			<td><button type="button" name="infoVaga" href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($vaga['id']); ?>" class="btn btn-info" style="float: right;">Ver detalhes</button></td>
																			<tr><hr></tr>
																		</tbody>
																	</table>
																</a>
															</div>
														</div>
													<?php } ?>
												<?php } ?>
												<!-- ------ FIM INFORMAÇÕES VAGAS ------- -->

												<!-- ------ INÍCIO PAGINAÇÃO ------ -->
												<div class="row w-100 mt-3">
													<div class="col-6 col-md-6">
														<nav>
															<ul class="pagination">
																<li class="page-item <?=($pagina == 1) ? 'disabled' : ''?>"><a class="page-link" href="vagas.php?pagina=<?php echo $pagina-1; ?>">Anterior</a></li>


																<?php for ($i = 1; $i <= $total2; $i++){?>

																	<li class="page-item"><a class="page-link" href="vagas.php?pagina=<?=$i?>"><?php echo $i ?></a></li>

																<?php } ?>

																<li class="page-item  <?=($pagina == $total2) ? 'disabled' : ''?>  "><a class="page-link" href="vagas.php?pagina=<?php echo $pagina+1; ?>">Próximo</a></li>
															</ul>
														</nav>
													</div>

													<!-- ------- FIM PAGINAÇÃO ------- -->

													<?php if ($info_nivel['nivel'] == '1') { ?>
														<div class="col-5 col-md-6 p-0">
															<a href="addvaga.php" class="btn btn-info float-right mt-2" style="margin-right: -12px">+ Adicionar vaga</a>
														</div>
													<?php } ?>
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
			<!-- Footer -->
			<?php
			require_once('include/footer.php');
			require_once('include/links_footer.php');
			?>
			<!-- End of Footer -->
			<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
			<!-- Font Awesome -->
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			<!-- Custom styles for this template-->
			<link href="media/css/sb-admin-2.min.css" rel="stylesheet">


		</body>
		</html>
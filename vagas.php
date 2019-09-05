<?php
require_once('include/conexao.php');

//  Definir itens por página
$itens_por_pagina = 5;

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
	// require_once('include/area_restrita.php');
	// require_once('include/links.php');
	// require_once('include/area_restrita.php');
	// require_once('include/area_restrita.php');
	// require_once('include/links.php');
	// require_once('include/area_restrita.php');
	?>

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
												<form class="form-inline md-form form-sm" method="POST">
													<input class="form-control form-control-sm mr-3 w-75 col-11" type="text" name="pesquisar" placeholder="Search"
													aria-label="Search">
													<i class="fas fa fa-search"></i>
													<?php
													if ($pesquisar = $_POST['pesquisar']){
														$sql3 = "SELECT * FROM vagas WHERE nome_vaga LIKE '%$pesquisar%'";
														$result3 = mysqli_query($con, $sql3);
														while ($rows_vagas = mysqli_fetch_array($result3)){
															echo "Nome da vaga:".$rows_vagas['nome_vaga']."<br>";
															echo "Cidade da vaga:".$rows_vagas['cidade']."<br>";
															
															?>
															<div class="topnav">
															<a href="informacoes_vaga.php" style="text-decoration: none;">	
															<table class="w-100">
															<tbody>
															<?php do{ ?>
																<tr style="color: black;"><td><?php echo utf8_encode($vaga['nome_vaga']); ?></td></tr>
																<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vaga['cidade']); ?></td>
																<td><button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button></td>
																<tr><td><hr></td></tr>
															<?php } while($vaga = $result->fetch_assoc()); ?>
														</tbody>
													</table>
											</div>
										</a>


									}
								}
								?>
							</form>
							<hr>
							<?php 
							if ($num >0) { ?>
								<div class="topnav">
									<a href="informacoes_vaga.php" style="text-decoration: none;">	
										<table class="w-100">
											<tbody>
												<?php do{ ?>
													<tr style="color: black;"><td><?php echo utf8_encode($vaga['nome_vaga']); ?></td></tr>
													<td style="font-size: 15px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vaga['cidade']); ?></td>
													<td><button type="button" class="btn btn-primary" style="float: right;">Ver detalhes</button></td>
													<tr><td><hr></td></tr>
												<?php } while($vaga = $result->fetch_assoc()); ?>
											</tbody>
										</table>
									<?php } ?> 
								</div>
							</a>

							<!-- Pagination -->
							<nav aria-label="Page navigation example">
								<ul class="pagination">
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
require_once('include/links_footer.php');
?>


</body>

</html>
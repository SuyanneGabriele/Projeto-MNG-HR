<?php

// 	// Eliminar a exibição de avisos
error_reporting(0);

// 	// Conexão com o banco de dados 

// CONST HOST = "127.0.0.1";
// CONST USER = "root";
// CONST PASS = "";
// CONST DB   = "jogos";

// $con = mysqli_connect(HOST, USER, PASS, DB);

// if (!$con) {
// 	die("ERRO: Não foi possível conectar no banco de dados -> " . mysqli_connect_error());
// }

// 	// Buscar informações dos jogos no banco
// $sql = "SELECT * FROM tabela_jogos";
// $queryJogos = mysqli_query($con, $sql);
// session_start();

// 	// Verificar se existe alerta via COOKIE
// if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
// 	$alerta = unserialize($_COOKIE['alerta']);
// 	setcookie('alerta');
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem</title>
	<!-- Bootstrap CSS -->
	<?php
	require_once('include/links.php')
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
				require_once('include/topbar.php')
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
															<th>Cod. Curriculo</th>
															<th>Vagas</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php while ($resultado = mysqli_fetch_array($queryJogos)) { ?>
															<tr>
																<th><?=$resultado['id']?></th>
																<td><?=$resultado['nome_jogo']?></td>
																<td class="text-center">
																	<a href="cadastro.php?id=<?=$resultado['id']?>" class="btn btn-primary btn-sm">Editar</a>
																</td>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
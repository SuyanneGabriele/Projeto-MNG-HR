<?php

require_once('include/conexao.php');
error_reporting(0);
if (!isset($_SESSION)){
	session_start();
}

//  Insira uma nova senha
$token = $_GET['token'];

if (isset($token)) { 
	if (isset($_POST['new_password'])) {
		$senha = mysqli_real_escape_string($con, trim(md5($_POST['senha'])));
		$senha2 = mysqli_real_escape_string($con, trim(md5($_POST['senha2'])));

		$sql_update = "UPDATE `usuario` SET `senha` = '$senha' WHERE `token_recuperacao` = '$token';";
		$result_update = mysqli_query($con, $sql_update);
		$_SESSION['sucesso'] = true;

		$sql_delete = "DELETE FROM usuario WHERE token_recuperacao = '$token'";
		$result_delete = mysqli_query($con, $sql_delete);

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página - Recuperação de Senha</title>
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<?php
	require_once('include/links.php');       
	?>
</head>
<body style="background-color: rgba(0, 0, 0, 0.8);">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar --> 
		<?php 
		require_once('include/navbar.php');
		?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
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
									<!-- <div class="row"> -->
										<div class="row" style="background-image: url('media/images/imgcadastro3.png');">
											<div class="col-lg-7 col" style="margin-left: auto; margin-right: auto;">
												<div class="p-5">
													<div class="text-center">
														<h1 class="h4 text-gray-900 mb-4"><strong>Recuperação de senha</strong></h1>
														<!-- ----- AVISOS ----- -->
														<?php if ($_SESSION['sucesso']) { ?>
														<div class="col-12">
															<div class="alert alert-success" role="alert">
																Senha redefinida com sucesso!
															</div>
														</div>
													<?php }; UNSET($_SESSION['sucesso']); ?>
													<!-- ------ FIM AVISOS ----- -->
													</div>

													<form class="user" method="POST">
														<?php include('messages.php'); ?>
														<div class="form-group">
															<input type="password" id="senha" class="form-control form-control-user" name="senha" placeholder="Insira sua nova senha">
														</div>
														<div class="form-group">
															<input type="password" id="senha2" class="form-control form-control-user" name="senha2" placeholder="Insira sua senha novamente">
														</div>
														<div class="form-group">
															<button name="new_password" type="submit" class="btn btn-primary btn-user btn-block text-white">Cadastrar nova senha</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				require_once('include/footer.php')
				?>
			</div>
		</div>
		<!-- Bootstrap core JavaScript-->
		<script src="conferirinfos.js"></script>
<?php require_once('include/links_footer.php'); ?>
	</body>
	</html>
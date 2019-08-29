<?php

require_once('include/conexao.php');
error_reporting(0);
if (!isset($_SESSION)){
	session_start();
}

//  Insira uma nova senha
if (isset($_POST['new_password'])) {
	$senha = mysqli_real_escape_string($con, $_POST['senha']);
	$senha2 = mysqli_real_escape_string($con, $_POST['senha2']);

  //  Pega o token que veio do link do email
	$token = $_SESSION['token'];
	if (empty($senha) || empty($senha2)) array_push($errors, "Verifique seus dados e tente novamente!");
	if ($senha !== $senha2)  array_push($errors, "As senhas não conferem.");
	if (count($errors) == 0) {
    //  Seleciona o email do usuário da tabela password_reset
		$sql = "SELECT email FROM password_reset WHERE token = '$token' LIMIT 1";
		$results = mysqli_query($con, $sql);
		$email = mysqli_fetch_assoc($results)['email'];

		if ($email) {
			$senha = md5($senha);
			$sql = "UPDATE usuario SET senha = '$senha' WHERE email = '$email'";
			$results = mysqli_query($con, $sql);
			header('location: login.php');
		}
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
									<div class="row">
										<div class="col-lg-7 col" style="margin-left: auto; margin-right: auto;">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4"><strong>Recuperação de senha</strong></h1>
												</div>

												<form class="user" method="POST">
													<?php include('messages.php'); ?>
													<div class="form-group">
														<input type="password" class="form-control form-control-user" name="senha" placeholder="Insira sua nova senha">
													</div>
													<div class="form-group">
														<input type="password" class="form-control form-control-user" name="senha2" placeholder="Insira sua senha novamente">
													</div>
													<div class="form-group">
														<button type="submit" class="btn btn-primary btn-user btn-block text-white">Cadastrar nova senha</button>
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
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
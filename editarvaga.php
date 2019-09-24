<?php
error_reporting(0);
require_once('include/conexao.php');
require_once('include/links.php');

if (!isset($_SESSION)){
  session_start();
};

$email = $_SESSION['email'];

$sql_usuario = "SELECT * FROM usuario WHERE email = '$email'"; 
$result_usuario = mysqli_query($con, $sql_usuario);
$infoUsuario = $result_usuario->fetch_assoc();
$nivel = $infoUsuario['nivel'];

$id_usuario = $infoUsuario  ['id'];

$editarVaga = $_GET['editarVaga'];
$sql = "SELECT * FROM vagas WHERE id = '$editarVaga'";
$result = mysqli_query($con, $sql);
$vagas = mysqli_fetch_assoc($result);

if (isset($_POST['btnSalvarEdicao'])) {

	//	Receber campos
	$nomeVaga = mysqli_real_escape_string($con, trim($_POST['nomeVaga']));
	$cidadeVaga = mysqli_real_escape_string($con, trim($_POST['cidadeVaga']));
	$infoEmpresa = mysqli_real_escape_string($con, trim($_POST['infoEmpresa']));
	$habilidades = mysqli_real_escape_string($con, trim($_POST['habilidades']));
	$diferenciais = mysqli_real_escape_string($con, trim($_POST['diferenciais']));

	if (empty($nomeVaga) || empty($cidadeVaga) || empty($infoEmpresa) || empty($habilidades) || empty($diferenciais)) {	$_SESSION['insira_infos'] = true; } else { 

		$sql_update = "UPDATE `vagas` SET `nome_vaga` = '$nomeVaga', `cidade` = '$cidadeVaga', `infoEmpresa` = '$infoEmpresa', `habilidades` = '$habilidades', `diferenciais` = '$diferenciais' WHERE `vagas`.`id` = '$editarVaga';";
		$result_update = mysqli_query($con, $sql_update);
		$_SESSION['editado'] = true;
		header('Location: vagas.php');
		exit;
}
};

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar vaga - Página</title>
</head>
<body>

	<div id="wrapper">

		<?php
		require_once('include/navbar.php');
		?>

		<!-- Content Wrapper -->
		<span id='topo'></span>
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Content -->
			<div id="content">

				<!-- Topbar -->

				<?php
				require_once('include/topbar.php');
				?>

				<!-- End of Topbar -->
				<!-- Inicio -->

				<div class="container mb-5">
					<h2>Editar vaga</h2>
					<h5>Por favor, preencha todos os campos</h5>
					<div class="card">
						<div class="card-body">
							<h4>Informações da vaga</h4>
							<hr>

							<form method="POST" action="">
								<?php if ($_SESSION['insira_infos']) { ?>
									<div class="col-12">
										<div class="alert alert-warning" role="alert">
											Insira os dados e tente novamente!
										</div>
									</div>
								<?php }; UNSET($_SESSION['insira_infos']); ?>
								<div class="form-group">
									<label for="nomeVaga" style="color: black; font-weight: 900;"><h1>Nome da vaga</h1></label>
									<input type="text" class="form-control" name="nomeVaga" id="nomeVaga" placeholder="<?php echo $vagas['nome_vaga']; ?>">
								</div>
								<div class="form-group">
									<label for="cidadeVaga" style="color: black; font-weight: 900;"><h2>Cidade da vaga</h2></label>
									<input type="text" class="form-control" name="cidadeVaga" id="cidadeVaga" placeholder="<?php echo $vagas['cidade']; ?>">
								</div>
								<strong style="font-size: 18px;" class="mt-3">Sobre a oportunidade</strong>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">Inserir informações sobre a empresa e como ela atua.</label>
									<textarea class="form-control" name="infoEmpresa" id="infoEmpresa" placeholder="<?php echo $vagas['infoEmpresa']; ?>"></textarea>
								</div>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">Do que precisamos?</label>
									<textarea class="form-control" name="habilidades" id="habilidades" placeholder="<?php echo $vagas['habilidades']; ?>"></textarea>
								</div>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">O que pode o diferenciar?</label>
									<textarea class="form-control" name="diferenciais" id="diferenciais" placeholder="<?php echo $vagas['diferenciais']; ?>"></textarea>
								</div>

								<input type="submit" class="btn btn-info" name="btnSalvarEdicao" value="Salvar alterações">	
							</form>					
						</div>
						

					</div>
				</div>



				<!-- Fim -->
			</div>
		</span>

		<?php
		require_once('include/footer.php');
		?>
	</div>
</div>


</body>
</html>
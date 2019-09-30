<?php
error_reporting(0);
require_once('include/conexao.php');
require_once('include/area_restrita.php');
require_once('include/links.php');

//	Puxar informações do banco de dados
$sql = "SELECT * FROM vagas";
$result = mysqli_query($con, $sql);
$vaga = mysqli_fetch_assoc($result);

if (isset($_POST['btnSalvar'])) {
								//	Receber campos
	$nomeVaga = mysqli_real_escape_string($con, trim($_POST['nomeVaga']));
	$cidadeVaga = mysqli_real_escape_string($con, trim($_POST['cidadeVaga']));
	$infoEmpresa = mysqli_real_escape_string($con, trim($_POST['infoEmpresa']));
	$habilidades = mysqli_real_escape_string($con, trim($_POST['habilidades']));
	$diferenciais = mysqli_real_escape_string($con, trim($_POST['diferenciais']));


	if (empty($nomeVaga) || empty($cidadeVaga) || empty($infoEmpresa) || empty($habilidades) || empty($diferenciais)) {
		$_SESSION['insira_infos'] = true;
	} else {
		$sql = "INSERT INTO `vagas` (`id`, `nome_vaga`, `cidade`, `infoEmpresa`, `habilidades`, `diferenciais`) VALUES (DEFAULT, '$nomeVaga', '$cidadeVaga','$infoEmpresa', '$habilidades', '$diferenciais');";
		$result = mysqli_query($con, $sql);

		$_SESSION['add_sucesso'] = true;
		header('Location: vagas.php');
		exit;
	}
}

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
					<h2>Adicionar vaga</h2>
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
									<input type="text" class="form-control" name="nomeVaga" id="nomeVaga" placeholder="Digite o nome da vaga.">
								</div>
								<div class="form-group">
									<label for="cidadeVaga" style="color: black; font-weight: 900;"><h2>Cidade da vaga</h2></label>
									<input type="text" class="form-control" name="cidadeVaga" id="cidadeVaga" placeholder="Digite o nome da cidade.">
								</div>
								<span style="font-size: 20px; color: rgba(0,0,0,.5);">Local</span><br>
								<strong style="font-size: 18px;" class="mt-3">Sobre a oportunidade</strong>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">Inserir informações sobre a empresa e como ela atua.</label>
									<textarea class="form-control" name="infoEmpresa" id="infoEmpresa" placeholder="Explicar o que o funcionário irá fazer e o que ele deve esperar quando começar a trabalhar ali."></textarea>
								</div>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">Do que precisamos?</label>
									<textarea class="form-control" name="habilidades" id="habilidades" placeholder="Citar as habilidades necessárias para o profissional se candidatar."></textarea>
								</div>
								<div class="form-group">
									<label for="textareaDiferenciais" style="font-size: 16px; font-weight: 900;">O que pode o diferenciar?</label>
									<textarea class="form-control" name="diferenciais" id="diferenciais" placeholder="Listar os possíveis diferenciais."></textarea>
								</div>

								<input type="submit" class="btn btn-info" name="btnSalvar" value="+ Adicionar vaga">	
								<a href="vagas.php?pagina=1"><button type="button" class="btn btn-danger" name="btnSalvar">Cancelar</button><a>
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
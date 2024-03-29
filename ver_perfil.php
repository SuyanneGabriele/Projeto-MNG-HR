<?php

require_once('include/conexao.php');
if (!isset($_SESSION)){
	session_start();
};

error_reporting(0);
$id = $_GET['id'];

$sql_perfil = "SELECT * FROM `cadastro_perfil` where fk_perfil = '$id'"; 
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();

$sql_profissao = "SELECT * FROM exp_profissional WHERE fk_usuario = '$id'";
$result_profissao = mysqli_query($con, $sql_profissao);
$num_profissao = mysqli_num_rows($result_profissao);    

$sql_escolaridade = "SELECT * FROM escolaridade WHERE fk_usuario = '$id'";
$result_escolaridade = mysqli_query($con, $sql_escolaridade);
$num_escolaridade = mysqli_num_rows($result_escolaridade);   

$sql_candidatado = "SELECT * FROM vagas_usuarios WHERE fk_usuario = '$id'";
$result_candidatado = mysqli_query($con, $sql_candidatado); 	
$num_candidatado = mysqli_num_rows($result_candidatado);
$info_candidatado = mysqli_fetch_assoc($result_candidatado);

$sql_vaga = "SELECT fk_usuario, fk_vaga, nome_vaga FROM vagas_usuarios
INNER JOIN vagas ON vagas_usuarios.fk_vaga = vagas.id WHERE fk_usuario = '$id'";
$result_vaga = mysqli_query($con, $sql_vaga);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
	<meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
	<link href="perfil/https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
	<link href="perfil/https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="perfil/css/aos.css" rel="stylesheet">
	<link href="perfil/css/bootstrap.min.css" rel="stylesheet">
	<link href="perfil/styles/main.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="perfil/styles/main.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	
	<style type="text/css">
	#vaga_escolhida:hover {
		margin-left: 2px;
	}
</style>
</head>
<body id="top">
	<header>
		<div class="profile-page sidebar-collapse">
			<nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-dark" color-on-scroll="400">
				<div class="container">
					<div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip">MNG HR</a>
						<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
					</div>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Sobre</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#infos">Informações</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiência</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#scholarity">Escolaridade</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class="page-content">
		<div>
			<div class="profile-page">
				<div class="profile-page">
					<div class="wrapper">
						<div class="page-header page-header-small" filter-color="green">
							<div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
							<div class="container">
								<div class="content-center">
									<div class="cc-profile-image">
										<?php if($info_perfil['nome_foto'] == NULL) { ?>
										<img src="uploads/avatar.png" class="img-profile rounded-circle">
										<?php } else { ?>
										<img src="uploads/<?= $info_perfil['nome_foto'] ?>" class="img-profile rounded-circle">
										<?php } ?></a></div>
										<div class="h2 title"><?php echo utf8_encode($info_perfil['nome']); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="about">
				<div class="container">
					<div class="card" data-aos="fade-up" data-aos-offset="10">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card-body">
									<div class="h4 mt-0 title">Sobre</div>
									<?php echo utf8_decode(utf8_encode($info_perfil['sobre'])); ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-12" id="infos">
								<div class="card-body">
									<div class="h4 mt-0 title">Informações Básicas</div>
									<div class="row">
										<div class="col-sm-4"><strong class="text-uppercase">Idade:</strong></div>
										<div class="col-sm-8"><?php echo utf8_encode($info_perfil['idade']); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
										<div class="col-sm-8"><?php echo utf8_encode($info_perfil['email']); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Telefone:</strong></div>
										<div class="col-sm-8"><?php echo utf8_encode($info_perfil['telefone']); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Endereço:</strong></div>
										<div class="col-sm-8"><?php echo utf8_decode(utf8_encode($info_perfil['endereco'])); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Cidade:</strong></div>
										<div class="col-sm-8"><?php echo utf8_decode(utf8_encode($info_perfil['cidade'])); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Estado:</strong></div>
										<div class="col-sm-8"><?php echo utf8_decode(utf8_encode($info_perfil['estado'])); ?></div>
									</div>
									<div class="row mt-3">
										<div class="col-sm-4"><strong class="text-uppercase">Idiomas:</strong></div>
										<div class="col-sm-8"><?php echo utf8_decode(utf8_encode($info_perfil['idiomas'])); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- -----------------  EXPERIÊNCIA PROFISSIONAL -------------------- -->

			<div class="section" id="experience">
				<div class="container cc-experience">
					<div class="h4 text-center mb-4 title">Experiências Profissionais</div>
					<?php if ($num_profissao > 0) { ?>
					<?php while($info_profissao = $result_profissao->fetch_assoc()) { ?>
					<div class="card">
						<div class="row">
							<div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body cc-experience-header">
									<p><?php echo utf8_encode($info_profissao['data_profissao']); ?></p>
									<div class="h5"><?php echo utf8_decode(utf8_encode($info_profissao['cargo'])); ?></div>
								</div>
							</div>
							<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body">
									<div class="h5"><?php echo utf8_decode(utf8_encode($info_profissao['profissao'])); ?></div>
									<p><?php echo utf8_decode(utf8_encode($info_profissao['sobre_profissao'])); ?></p>
								</div>
							</div>

						</div>
					</div>
					<?php } ?>
					<?php } else {  ?>
					<div class="alert alert-danger" style="opacity: 0.95;" role="alert">
						Não foi encontrado nenhum registro de profissão!
					</div>
					<?php } ?>
				</div>
			</div>

			<!-- -----------------  ESCOLARIDADE  -------------------- -->

			<div class="section" id="scholarity">
				<div class="container cc-education">
					<div class="h4 text-center mb-4 title">Escolaridade</div>
					<?php if ($num_escolaridade > 0) { ?>
					<?php while($info_escolaridade = $result_escolaridade->fetch_assoc()) { ?>
					<div class="card">
						<div class="row">
							<div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body cc-education-header">
									<p><?php echo utf8_encode($info_escolaridade['data_escolaridade']); ?></p>
									<div class="h5"><?php echo utf8_encode($info_escolaridade['ensino_superior']); ?></div>
								</div>
							</div>
							<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body">
									<div class="h5"><?php echo utf8_encode($info_escolaridade['nome_faculdade']); ?></div>
									<p><?php echo utf8_encode($info_escolaridade['curso']); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php }  ?>

					<?php } else { ?>
					<div class="alert alert-danger" style="opacity: 0.95;" role="alert">
						Não foi encontrado nenhum registro de escolaridade!
					</div>
					<?php } ?>
				</div>
			</div>

			<!-- --------- INÍCIO VAGAS CANDIDATADAS --------- -->

			<div class="section" id="vagasCandidatadas">
				<div class="container cc-education">
					<div class="h4 text-center mb-4 title">Vagas Candidatadas</div>
					<?php if ($num_candidatado > 0) { ?>
					<div class="card">
						<div class="row">
							<div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body cc-education-header">
									<hr class="mr-3 w-80 bg-secondary d-flex" style="vertical-align: middle">
									<h5 style="vertical-align: middle">O candidato está interessado na vaga</h5>
									<hr class="mr-3 w-80 bg-secondary d-flex" style="vertical-align: middle">
								</div>
							</div>
							<div class="col-md-9 mt-4 mb-4" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
								<div class="card-body">
									<?php while($info_vaga = $result_vaga->fetch_assoc()) { ?>
									<a id="vaga_escolhida" style="text-decoration: none; color: black;" href="informacoes_vaga.php?infoVaga=<?php echo utf8_encode($info_vaga['fk_vaga']); ?>"style="text-decoration: none; color: black;"><?php echo utf8_encode($info_vaga['nome_vaga']); ?><br></a>	
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<hr>	
					<?php } else { ?>
					<div class="alert alert-danger" style="opacity: 0.95;" role="alert">
						Não foi encontrado nenhum registro de candidatura!
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- --------- FIM VAGAS CANDIDATADAS --------- -->
	</div>
</div> 


<!-- Footer -->
<?php
require_once('include/footer.php');
?>
<!-- End of Footer -->



<script src="perfil/js/core/jquery.3.2.1.min.js"></script>
<script src="perfil/js/core/popper.min.js"></script>
<script src="perfil/js/core/bootstrap.min.js"></script>
<script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
<script src="perfil/js/aos.js"></script>
<script src="perfil/scripts/main.js"></script>
</body>
</html>
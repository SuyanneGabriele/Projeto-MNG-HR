<?php

require_once('include/conexao.php');
if (!isset($_SESSION)){
	session_start();
};
$email = $_SESSION['email'];


$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();

?>	

<link rel="stylesheet" type="text/css" href="../media/css/estilos.css">
<style type="text/css">


	li:hover {
		background-color: #32a897;
		margin-left: 10px;
		border-radius: 10px;
		font-weight: 750;
	}

	ul {
		padding: 10px;
	} 

</style>

<ul class="navbar-nav sidebar bg-gradient-dark sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<i class="fas fa-laugh-wink">
				<img src="media/images/logo.png" width="100">
			</i>
		</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0" style="border-color: rgba(0, 0, 0, 0.2)";>

	<!-- Nav Item - Dashboard -->
	<?php if ($email != NULL) { ?>
		<p class="mt-3" style="color: white; text-align: center;">Bem vindo, <?=$info_perfil['nome']?>!</p>
		<hr class="sidebar-divider d-none d-md-block mb-0" style="border-color: rgba(0, 0, 0, 0.2)";>
	<?php } ?>

	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa fa-home text-white"></i>
			<span>Início</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider" style="border-color: rgba(0, 0, 0, 0.2)";>

	<!-- Nav Item - Login -->
	<?php if (is_null($email)) { ?>

		<li class="nav-item">
			<a class="nav-link" href="login.php">
				<i class="fas fa fa-male fa-2x text-white"></i>
				<span>Login</span>
			</a>
		</li>


		<!-- Nav Item - Registrar -->
		<li class="nav-item">
			<a class="nav-link" href="registro.php">
				<i class="fas fa fa-lock fa-2x text-white"></i>
				<span>Registrar</span>
			</a>
		</li>
	<?php } ?>

	<!-- Nav Item - Recuperar -->
	<?php if ($info_perfil['nivel'] == 0) { ?>
		<li class="nav-item">
			<a class="nav-link" href="recuperar.php">
				<i class="fas fa fa-key fa-2x text-white"></i>
				<span>Recuperar senha</span>
			</a>
		</li>
	<?php } ?>


	<!-- Nav Item -  Vagas -->
	<li class="nav-item">
		<a class="nav-link" href="vagas.php">
			<i class="fas fa fa-suitcase fa-2x text-white"></i>
			<span>Vagas</span>
		</a>
	</li>

	<!-- Nav Item -  Minhas Vagas -->
	<?php if ($info_perfil['nivel'] == 0) { ?>
		<li class="nav-item">
			<a class="nav-link" href="minhas_vagas.php?id=<?php echo utf8_encode($info_perfil['id']);?>">
				<i class="fas fa fa-suitcase fa-2x text-white"></i>
				<span>Minhas vagas</span>
			</a>
		</li>
	<?php } ?>

	<!-- Nav Item -  Currículos Admin -->
	<?php if ($info_perfil['nivel'] == 1) { ?>
		<li class="nav-item">
			<a class="nav-link" href="curriculos_admin.php">
				<i class="fas fa fa-sticky-note fa-2x text-white"></i>
				<span>Currículos</span>
			</a>
		</li>
	<?php } ?>

	<!-- Nav Item -  Currículos -->
	<?php if ($info_perfil['nivel'] == 0) { ?>

		<li class="nav-item">
			<a class="nav-link" href="curriculos.php">
				<i class="fas fa fa-sticky-note fa-2x text-white"></i>
				<span>Meu currículo</span>
			</a>
		</li>

		<!-- Nav Item -  Perfil -->

		<li class="nav-item">
			<a class="nav-link" href="perfil.php">
				<i class="fas fa fa-male fa-2x text-white"></i>
				<span>Meu Perfil</span>
			</a>
		</li>
	<?php } ?>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block" style="border-color: rgba(0, 0, 0, 0.2)";>

</ul>
<!-- End of Sidebar -->

<!-- SCRIPTS -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("li a[href='"+location.href.substring(location.href.lastIndexOf("/")+1,255)+"']").css("color","#42e3cc");
	});
</script>
<<<<<<< HEAD
<?php
// error_reporting(0);

=======
	<?php
	error_reporting(0);

<<<<<<< HEAD
	require_once('include/conexao.php');
	if (!isset($_SESSION)){
		session_start();
	};
	$email = $_SESSION['email'];
=======
>>>>>>> ca21351be3345ada11fc198e7c6951401e4e12c7
require_once('include/conexao.php');
if (!isset($_SESSION)){
	session_start();
};
>>>>>>> 8e17fbff740cf46ca19c24c7861485007a974c58

$email = $_SESSION['email'];

<<<<<<< HEAD
	$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
	$result_perfil = mysqli_query($con, $sql_perfil);
	$info_perfil = $result_perfil->fetch_assoc();
	$id_usuario = $info_perfil['id'];
	var_dump($id_usuario);
=======
$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();
$idU = $info_perfil['id'];
<<<<<<< HEAD
?>	
=======


$sql1 = "SELECT * FROM cadastro_perfil WHERE fk_usuario = $idU";

$queryPerfil1 = mysqli_query($con, $sql1);
$inf_perfil = $queryPerfil1->fetch_assoc();

$id_perfil = $inf_perfil['id'];
>>>>>>> 8e17fbff740cf46ca19c24c7861485007a974c58

	$sql_id = "SELECT id FROM cadastro_perfil WHERE fk_perfil = '$id_usuario'";
	$result_id = mysqli_query($con, $sql_id);
	$id = mysqli_fetch_assoc($result_id);

	?>	
>>>>>>> ca21351be3345ada11fc198e7c6951401e4e12c7

	<link rel="stylesheet" type="text/css" href="../media/css/estilos.css">
	<style type="text/css">

<<<<<<< HEAD

		li:hover {
			background-color: #32a897;
			margin-left: 10px;
			border-radius: 10px;
			font-weight: 750;
		}
=======
li:hover {
	background-color: #32a897;
	margin-left: 10px;
	border-radius: 10px;
	font-weight: 750;
}

ul {
	padding: 10px;
} 
>>>>>>> 8e17fbff740cf46ca19c24c7861485007a974c58

		ul {
			padding: 10px;
		} 

	</style>

	<ul class="navbar-nav sidebar bg-gradient-dark sidebar-dark accordion" id="accordionSidebar">

<<<<<<< HEAD
		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div class="sidebar-brand-icon">
				<i class="fas fa-laugh-wink">
					<img src="media/images/logo.png" width="53">
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
				<a class="nav-link" href="curriculos.php?fk_perfil=<?php echo $id['id']; ?>">
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
=======
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
		<a class="nav-link" href="curriculos.php?id=<?php echo utf8_encode($id_perfil['id']);?>">
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
>>>>>>> 8e17fbff740cf46ca19c24c7861485007a974c58

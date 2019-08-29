	
<link rel="stylesheet" type="text/css" href="../media/css/estilos.css">
<style type="text/css">
	

	li:hover {
		background-color: #8DD99D;
		margin-left: 10px;
		border-radius: 10px;
		font-weight: 750;
	}

	ul {
		padding: 10px;
	}

</style>

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<i class="fas fa-laugh-wink">
				<img src="media/images/logo.png" width="100">
			</i>
		</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa fa-home"></i>
			<span>Início</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Login -->

	<li class="nav-item">
		<a class="nav-link" href="login.php">
			<i class="fas fa fa-male fa-2x text-gray-300"></i>
			<span>Login</span>
		</a>
	</li>


	<!-- Nav Item - registrar -->
	<li class="nav-item">
		<a class="nav-link" href="registro.php">
			<i class="fas fa fa-lock fa-2x text-gray-300"></i>
			<span>Registrar</span>
		</a>
	</li>


	<!-- Nav Item - Recuperar -->
	<li class="nav-item">
		<a class="nav-link" href="recuperar.php">
			<i class="fas fa fa-key fa-2x text-gray-300"></i>
			<span>Recuperar senha</span>
		</a>
	</li>


	<!-- Nav Item -  Vagas -->
	<li class="nav-item">
		<a class="nav-link" href="vagas.php">
			<i class="fas fa fa-suitcase fa-2x text-gray-300"></i>
			<span>Vagas</span>
		</a>
	</li>


	<!-- Nav Item -  Vagas -->
	<li class="nav-item">
		<a class="nav-link" href="curriculos_admin.php">
			<i class="fas fa fa-sticky-note fa-2x text-gray-300"></i>
			<span>Currículos</span>
		</a>
	</li>


	<li class="nav-item">
		<a class="nav-link" href="curriculos.php">
			<i class="fas fa fa-sticky-note fa-2x text-gray-300"></i>
			<span>Currículos</span>
		</a>
	</li>


	<li class="nav-item">
		<a class="nav-link" href="perfil.php">
			<i class="fas fa fa-male fa-2x text-gray-300"></i>
			<span>Meu Perfil</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

<!-- SCRIPTS -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("li a[href='"+location.href.substring(location.href.lastIndexOf("/")+1,255)+"']").css("color","#64b063");
	});
</script>
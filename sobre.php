<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Início</title>
	<?php
	require_once('include/links.php')
	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body style="background-color: rgba(0, 0, 0, 1);">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<?php
		require_once('include/navbar.php');
		?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column" style="color: black;">
			<!-- Content -->
			<div id="content">
				<!-- Topbar -->
				<?php
				require_once('include/topbar.php')
				?>
				<!-- End of Topbar -->
			</div>

			<!-- Inicio -->
			<header>
				<img src="media/images/sobre4.jpg" style="opacity: 0.9;" class="d-none d-md-block d-sm-block d-sm-none d-md-none">
			</header>
			
			<div>
				<div class="col-md-6 col-sm-8 mt-5 mr-4 p-3 " style="float: right; text-align: justify; background-color: #f23022; border-radius: 10px;">
					<p>Nosso sistema foi pensado e desenvolvido durante as aulas de PHP do curso Entra21 da Blusoft, com o objetivo de ajudar e otimizar o serviço dos profissionais da área de Recursos Humanos.</p>
					<p>Esse projeto foi feito para empresas que procuram praticidade e uma melhor performance, tem como principais funções organizar e gerenciar os currículos selecionados mais facilmente.</p>
				</div>
				<div class="col-6">
					<img src="media/images/entra21.jpg" style="width: 90%;" class="py-4 mt-2 d-none d-md-block d-sm-block d-sm-none d-md-none">
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6 text-center col-sm-12" style="text-align: justify;">
					<h3><i class="fa fa-list-alt" aria-hidden="true" style="color: red; font-size: 40px;"></i></h3>
					<h3 style="color: red;"><strong>Missão</strong></h3>
					<p>Nossa missão é ajudar empresas que procuram um melhor desempenho na área de Recursos Humanos com o uso da tecnologia visando a praticidade e facil entendimento do nosso sistema.</p>
				</div>
				<div class="col-md-6 text-center col-sm-12" style="text-align: justify;">
					<h3><i class="fa fa-eye" aria-hidden="true" style="color: red; font-size: 40px;"></i></h3>
					<h3 style="color: red"><strong>Visão</strong></h3>
					<p>Nós creditamos que a organização é essencial, então desenvolvemos um sistema que auxilia os funcionários a organizar os currículos aumentando a eficiência e agilidade do trabalho.</p>
				</div>
			</div>

			<!-- Fim -->

			<!-- Footer -->
			<?php
			require_once('include/footer.php')
			?>
			<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->


		<!-- End of Page Wrapper -->
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

<?php
  require_once('include/links_footer.php');
?>

	</body>
	</html>

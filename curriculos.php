<?php
require_once('include/cadastro_backend.php');

	/**
	 * Arquivo PHP que utiliza a classe upload
	 */
	
	// Verifica se houve o clique do botÃĢo, ou seja, se foi enviado o formulÃĄrio
	if (isset($_POST['btnSalvar'])) {
		
		// InstÃĒncia uma classe para o upload
		$upload = new Uploader('arquivos');
		$uploads = $upload->upload();

	}

	?>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edição</title>
		<meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
		<link href="perfil/https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
		<link href="perfil/https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<link href="perfil/css/aos.css" rel="stylesheet">
		<link href="perfil/css/bootstrap.min.css" rel="stylesheet">
		<link href="perfil/styles/main.css" rel="stylesheet">
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
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiência</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#scholarity">Escolaridade</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<form class="user" action="" method="post" enctype="multipart/form-data">
			<div class="page-content">
				<div>
					<div class="profile-page">
						<div class="wrapper">
							<div class="page-header page-header-small" filter-color="green">
								<div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');">

								</div>
								<div class="container"> 
									<div class="content-center">
										<div class=""><a href="#">
											
												<input type="file" name="arquivos[]" id="arquivos" multiple="">

												<br><br>
							
											<img src="images/anthony.jpg" alt="Image"/></a></div>
											<input type="text" name="nome" id="nome" class="col-sm-6" placeholder="Digite seu Nome" required="" style="background-color: rgba(10,23,55,0); color: white; border: none !important; text-align: center; font-size: 35px; font-weight: 700;">

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
												<label for="textArea"><div class="h4 mt-0 title">Sobre</div></label>
												<textarea id="textArea" name="sobre" class="md-textarea form-control" rows="10" required=""></textarea>
											</div>
										</div>

										<div class="col-lg-6 col-md-12">
											<div class="card-body">
												<div class="h4 mt-0 title">Informações Básicas</div>


												<div class="row">
													<label class="col-sm-4" for="idade"><strong class="text-uppercase">Idade:</strong></label>
													<input type="number" name="idade" id="idade" class="col-sm-6" placeholder="Ex: 20" min="0" required="">

												</div>
												<div class="row mt-2">
													<label class="col-sm-4" for="email"><strong class="text-uppercase">Email:</strong></label>
													<input type="email" name="email" id="email" class="col-sm-6" placeholder="Ex: Proverdor@gmail.com" required="">
												</div>

												<div class="row mt-2">
													<label class="col-sm-4" for="telefone"><strong class="text-uppercase">Telefone:</strong></label>
													<input type="number" name="telefone" id="telefone" class="col-sm-6" placeholder="Ex: 0800 580 0753." required="">
												</div>

												<div class="row mt-2">
													<label class="col-sm-4" for="endereco"><strong class="text-uppercase">Endereço:</strong></label>
													<input type="text" name="endereco" id="endereco" class="col-sm-6" placeholder="Ex: Rua, 158" required="">
												</div>

												<div class="row mt-2">
													<label class="col-sm-4" for="cidade"><strong class="text-uppercase">Cidade:</strong></label>
													<input type="text" name="cidade" id="cidade" class="col-sm-6" placeholder="Ex: Blumenau" required="">
												</div>

												<div class="row mt-2">
													<label class="col-sm-4" for="estado"><strong class="text-uppercase">Estado:</strong></label>
													<select name="estado" class="col-sm-6">
														<option value="AC">Acre</option>
														<option value="AL">Alagoas</option>
														<option value="AP">Amapá</option>
														<option value="AM">Amazonas</option>
														<option value="BA">Bahia</option>
														<option value="CE">Ceará</option>
														<option value="DF">Distrito Federal</option>
														<option value="ES">Espírito Santo</option>
														<option value="GO">Goiás</option>
														<option value="MA">Maranhão</option>
														<option value="MT">Mato Grosso</option>
														<option value="MS">Mato Grosso do Sul</option>
														<option value="MG">Minas Gerais</option>
														<option value="PA">Pará</option>
														<option value="PB">Paraíba</option>
														<option value="PR">Paraná</option>
														<option value="PE">Pernambuco</option>
														<option value="PI">Piauí</option>
														<option value="RJ">Rio de Janeiro</option>
														<option value="RN">Rio Grande do Norte</option>
														<option value="RS">Rio Grande do Sul</option>
														<option value="RO">Rondônia</option>
														<option value="RR">Roraima</option>
														<option value="SC">Santa Catarina</option>
														<option value="SP">São Paulo</option>
														<option value="SE">Sergipe</option>
														<option value="TO">Tocantins</option>
													</select>
												</div>

												<div class="row mt-2">
													<label class="col-sm-4" for="idiomas"><strong class="text-uppercase">Idiomas:</strong></label>
													<input type="text" name="idiomas" id="idiomas" class="col-sm-6" placeholder="Ex: Espanhol, Alemão" required="">
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section" id="experience">
						<div class="container cc-experience area_clones">
							<div class="h4 text-center mb-4 title">Experiências Profissionais</div>
							<div class="h4 text-center mb-2 title"><button id="adicionar_card" type="button" class="btn" style="background-color: black !important; font-size:15px;">Adicionar</button></div>

							<div class="card card_exp_profissional" style="display: none;">
								<div class="row">
									<div class="col-md-3 bg-dark">
										<div class="card-body cc-experience-header">
											<div id="tbg"><input type="text" name="data_profissao[]" id="data_profissao" class="col-sm-12" placeholder="Data ex: Jan 2010 - Abril 2016"></div>
											<div class="h5 mt-3" id="tbg"><input type="text" name="cargo[]" id="cargo" class="col-sm-12" placeholder="Cargo" row="2"></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="h5" id="tbg1"><button type="button" class="btn remover_card" style="background-color: white !important; font-size:15px; color: black; float: right;">X</button><input type="text" name="profissao[]" id="profissao" class="col-sm-11" placeholder="Profissão" row="2"></div>
											<textarea id="textArea2" class="md-textarea form-control" name="sobre_profissao[]" rows="4" placeholder="O que você fazia na sua antiga profissão"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="card card_exp_profissional">
								<div class="row">
									<div class="col-md-3 bg-dark">
										<div class="card-body cc-experience-header">
											<div id="tbg"><input type="text" name="data_profissao[]" id="data_profissao" class="col-sm-12" placeholder="Data ex: Jan 2010 - Abril 2016"></div>
											<div class="h5 mt-3" id="tbg"><input type="text" name="cargo[]" id="cargo" class="col-sm-12" placeholder="Cargo" row="2"></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="h5" id="tbg1"><button type="button" class="btn remover_card" style="background-color: white !important; font-size:15px; color: black; float: right;">X</button><input type="text" name="profissao[]" id="profissao" class="col-sm-11" placeholder="Profissão" row="2"></div>
											<textarea id="textArea2" class="md-textarea form-control" name="sobre_profissao[]" rows="4" placeholder="O que você fazia na sua antiga profissão"></textarea>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="section" id="scholarity">
						<div class="container cc-education area_clones">
							<div class="h4 text-center mb-4 title">Escolaridade</div>
							<div class="h4 text-center mb-2 title"><button id="adicionar_card_escolaridade" type="button" class="btn" style="background-color: black !important; font-size:15px;">Adicionar</button></div>
							

							<div class="card card_escolaridade" style="display: none;">
								<div class="row box_pergunta hide">
									<div class="col-md-3 bg-dark">
										<div class="card-body cc-education-header">
											<div id="tbg"><input type="text" name="data_escolaridade[]" id="data_escolaridade" class="col-sm-12" placeholder="Data ex: Jan 2014 - Dez 2017"></div>
											<div class="h5 mt-3" id="tbg"><input type="text" name="ensino_superior[]" id="ensino_superior" class="col-sm-11" value="Ensino Superior" disabled="" row="2"></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="h5" id="tbg1"><button type="button" class="btn remover_card" style="background-color: white !important; font-size:15px; color: black; float: right;">X</button><input type="text" name="nome_faculdade[]" id="nome_faculdade" class="col-sm-11" placeholder="Nome da faculdade" row="2"></div>
											<textarea id="textArea2" class="md-textarea form-control" name="curso[]" rows="4" placeholder="Ex: Engenheiro de Software "></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="card card_escolaridade">
								<div class="row box_pergunta hide">
									<div class="col-md-3 bg-dark">
										<div class="card-body cc-education-header">
											<div id="tbg"><input type="text" name="data_escolaridade[]" id="data_escolaridade" class="col-sm-12" placeholder="Data ex: Jan 2014 - Dez 2017"></div>
											<div class="h5 mt-3" id="tbg"><input type="text" name="ensino_superior[]" id="ensino_superior" class="col-sm-11" value="Ensino Superior" disabled="" row="2"></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="h5" id="tbg1"><button type="button" class="btn remover_card" style="background-color: white !important; font-size:15px; color: black; float: right;">X</button><input type="text" name="nome_faculdade[]" id="nome_faculdade" class="col-sm-11" placeholder="Nome da faculdade" row="2"></div>
											<textarea id="textArea2" class="md-textarea form-control" name="curso[]" rows="4" placeholder="Ex: Engenheiro de Software "></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="row">
									<div class="col-md-3 bg-dark">

										<div class="card-body cc-education-header">
											<div id="tbg"><input type="text" name="data_escolaridade_medio" id="data_escolaridade_medio" class="col-sm-12" placeholder="Data ex: Jan 2010 - Dez 2013"></div>
											<div class="h5 mt-3" id="tbg"><input type="text" id="medio" class="col-sm-11" value="Ensino Médio" row="2" disabled=""></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="h5" id="tbg1"><button type="button" class="btn remover_card" style="background-color: white !important; font-size:15px; color: black; float: right;">X</button><input type="text" name="nome_medio" id="nome_medio" class="col-sm-11" placeholder="Nome da escola" row="2"></div>
											<textarea name="ensino_medio" id="ensino_medio" class="md-textarea form-control" rows="4" placeholder="Ex: Ensino médio completo"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="row">
									<div class="col-md-3 bg-dark">

										<div class="card-body cc-education-header">
											<div id="tbg"><input type="text" name="data_escolaridade_fundamental" id="fundamental" class="col-sm-12" placeholder="Data ex: Jan 2002 - Dez 2010"></div>
											<div class="mt-3" id="tbg" style="font-size:21px;"><input type="text" name="fundamental" id="fundamental" class="col-sm-12" value="Ensino Fundamental" row="2" disabled=""></div>
										</div>
									</div>

									<div class="col-md-9" >
										<div class="card-body" id="tbg1">
											<div class="mt-3" id="tbg1"  style="font-size:21px;"> <input type="text" name="nome_fundamental" id="nome_fundamental" class="col-sm-12" placeholder="Nome da escola" row="2" required=""></div>
											<textarea name="ensino_fundamental" id="ensino_fundamental" class="md-textarea form-control" rows="4" placeholder="Ex: Ensino fundamental completo" required=""></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<input type="submit" class="btn" name="btnSalvar" value="Salvar" style="background-color: rgb(52, 58, 64) !important; font-size: 15px;">	
							</div>
						</div>
					</div>
				</div>
			</form>

			<!-- Footer -->
			<?php
			require_once('include/footer.php')
			?>
			<!-- End of Footer -->

			<!-- End of Topbar -->
		</div>
		<!-- Inicio -->



		<!-- Fim -->
	</div>
	<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<?php
require_once('include/links_footer.php'); 
?>

</div>
</div>
<script src="perfil/js/core/jquery.3.2.1.min.js"></script>
<script src="perfil/js/core/popper.min.js"></script>
<script src="perfil/js/core/bootstrap.min.js"></script>
<script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
<script src="perfil/js/aos.js"></script>
<script src="perfil/scripts/main.js"></script>
<?php
require_once('include/script.php');
?>
</body>
</html>

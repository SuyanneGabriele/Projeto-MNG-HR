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
          <div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip">MNG-HR</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Sobre</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Habilidades</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiência</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#scholarity">Escolaridade</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <form class="user" action="perfil.php" method="POST">
    <div class="page-content">
      <div>
        <div class="profile-page">
          <div class="wrapper">
            <div class="page-header page-header-small" filter-color="green">
              <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
              <div class="container"> 
                <div class="content-center">
                  <div class=""><a href="#"><img src="images/anthony.jpg" alt="Image"/></a></div>
                  <input type="text" name="nome" id="nome" class="col-sm-6" placeholder="Digite seu Nome" style="background-color: rgba(10,23,55,0); color: white; border: none !important; text-align: center; font-size: 35px; font-weight: 700;">
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
                    <textarea id="textArea" name="sobre" class="md-textarea form-control" rows="10"></textarea>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card-body">
                    <div class="h4 mt-0 title">Informações Básicas</div>

                    <div class="row">
                      <label class="col-sm-4" for="idade"><strong class="text-uppercase">Idade:</strong></label>
<<<<<<< HEAD
                      <input type="number" name="idade" id="idade" class="col-sm-6" placeholder="Ex: 20">
=======
                      <input type="number" name="idade" id="idade" class="col-sm-6" style="border-left: none; border-right: none; border-top: none; outline:none;">
                    </div>
<<<<<<< HEAD

                    <div class="form-group">

                      <!-- Sobre -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Sobre" name="sobre">
                      </div>

                      <!-- Idade -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Idade" name="idade">
                      </div>

                      <!-- Email -->
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user"  placeholder="noreply@provedor.com" name="email">
                      </div>

                      <!-- Telefone -->
                      <div class="form-group">
                        <input type="number" class="form-control form-control-user" placeholder="(DDD) 99999-9999" name="telefone">
                      </div>

                      <!-- Endereço -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Endereço" name="endereco">
                      </div>

                      <!-- Cidade -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Cidade" name="cidade">
                      </div>

                      <!-- Estado -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Estado" name="estado">
                      </div>

                      <!-- País -->
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Endereço" name="endereco">
                      </div>

                      <!-- Telefone -->
                      <div class="form-group">
                        <input type="number" class="form-control form-control-user" placeholder="(DDD) 99999-9999" name="telefone">
                      </div>

                      <!-- Email -->
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user"  placeholder="Email@provedor.com" name="email">
                      </div>

                        <!-- Idiomas -->
                      <div class="form-group">
                         <input type="text" class="form-control form-control-user" placeholder="Idiomas (Ex: Espanhol, Inglês...)" name="idiomas">
                      </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btnSalvar">Cadastrar</button>
                      </form>
                    </div>
                  </div>
=======
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                      <div class="col-sm-8">anthony@company.com</div>
>>>>>>> b827e5a87efc6cfa969744e4ecd425ec8b813f9c
                    </div>

                    <div class="row mt-2">
                      <label class="col-sm-4" for="email"><strong class="text-uppercase">Email:</strong></label>
                      <input type="email" name="email" id="email" class="col-sm-6" placeholder="Ex: Proverdor@gmail.com">
                    </div>

                    <div class="row mt-2">
                      <label class="col-sm-4" for="telefone"><strong class="text-uppercase">Telefone:</strong></label>
                      <input type="number" name="telefone" id="telefone" class="col-sm-6" placeholder="Ex: 0800 580 0753.">
                    </div>

                    <div class="row mt-2">
                      <label class="col-sm-4" for="endereco"><strong class="text-uppercase">Endereço:</strong></label>
                      <input type="text" name="endereco" id="endereco" class="col-sm-6" placeholder="Ex: Rua, 158">
                    </div>

                    <div class="row mt-2">
                      <label class="col-sm-4" for="cidade"><strong class="text-uppercase">Cidade:</strong></label>
                      <input type="text" name="cidade" id="cidade" class="col-sm-6" placeholder="Ex: Blumenau">
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
                      <input type="text" name="idiomas" id="idiomas" class="col-sm-6" placeholder="Ex: Espanhol, Alemão">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="skill">
          <div class="container">
            <div class="h4 text-center mb-4 title">Habilidades Profissionais</div>
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">HTML</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">CSS</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">JavaScript</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">SASS</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">Bootstrap</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-dark"><span class="progress-badge">Photoshop</span>
                      <div class="progress">
                        <div class="progress-bar progress-bar-dark" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="experience">
          <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Experiências Profissionais</div>
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">

                  <div class="card-body cc-experience-header">
                    <div id="tbg"><input type="text" name="cargo" id="cargo" class="col-sm-12" placeholder="Data ex: Jan 2010 - Abril 2016"></div>
                    <div class="h5 mt-3" id="tbg"><input type="text" name="cargo" id="cargo" class="col-sm-12" placeholder="Cargo" row="2"></div>
                  </div>
                </div>

                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body" id="tbg1">
                    <div class="h5" id="tbg1"><input type="text" name="profissao" id="profissao" class="col-sm-12" placeholder="Profissão" row="2"></div>
                    <textarea id="textArea2" class="md-textarea form-control" rows="4" placeholder="O que você fazia na sua antiga profissão"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="scholarity">
          <div class="container cc-education">
            <div class="h4 text-center mb-4 title">Escolaridade</div>
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-education-header">
                    <p>2013 - 2015</p>
                    <div class="h5">Master's Degree</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Master of Information Technology</div>
                    <p class="category">University of Computer Science</p>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique  taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
                </div>
              </div>
            </div>
<<<<<<< HEAD
=======
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-education-header">
                    <p>2009 - 2013</p>
                    <div class="h5">Bachelor's Degree</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Bachelor of Computer Science</div>
                    <p class="category">University of Computer Science</p>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique  taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-education-header">
                    <p>2007 - 2009</p>
                    <div class="h5">High School</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Science and Mathematics</div>
                    <p class="category">School of Secondary board</p>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
>>>>>>> c803630b47616386a51ac2ff9a739ea9b7c5b9d9
                </div>
              </div>
            </div>
>>>>>>> b827e5a87efc6cfa969744e4ecd425ec8b813f9c
          </div>
        </div>
<<<<<<< HEAD

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

</body>
</html>
=======
      </div>
    </div>
<<<<<<< HEAD
  </form>
  <script src="perfil/js/core/jquery.3.2.1.min.js"></script>
  <script src="perfil/js/core/popper.min.js"></script>
  <script src="perfil/js/core/bootstrap.min.js"></script>
  <script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
  <script src="perfil/js/aos.js"></script>
  <script src="perfil/scripts/main.js"></script>
</body>
</html>
=======
    <script src="perfil/js/core/jquery.3.2.1.min.js"></script>
    <script src="perfil/js/core/popper.min.js"></script>
    <script src="perfil/js/core/bootstrap.min.js"></script>
    <script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="perfil/js/aos.js"></script>
    <script src="perfil/scripts/main.js"></script>
  </body>
  </html>
>>>>>>> c803630b47616386a51ac2ff9a739ea9b7c5b9d9
>>>>>>> b827e5a87efc6cfa969744e4ecd425ec8b813f9c

<?php

require_once('include/conexao.php');

if (!isset($_SESSION)){
  session_start();
}

$email = $_SESSION['email'];


$sql_perfil = "SELECT * FROM cadastro_perfil WHERE email = '$email";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();

$sql = "SELECT * FROM usuario WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$infoUsuario = $result->fetch_assoc();

$sql_infousuario = "SELECT * FROM cadastro_perfil WHERE id = '$id'";
$result2 = mysqli_query($con, $sql_infousuario);
$infoUsuario2 = $result2->fetch_assoc();

$slq_profissao = "SELECT * FROM exp_profissional WHERE id = '$id'";
$result3 = mysqli_query($con, $slq_profissao);
$infoUsuario3 = $result3->fetch_assoc();
$num3 = $result3->$num_rows3;  

$sql_escolaridade = "SELECT * FROM escolaridade WHERE id = '$id'";
$result4 = mysqli_query($con, $sql_escolaridade);
$infoUsuario4 = $result4->fetch_assoc();
$num4 = $result4->$num_rows4;


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
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Habilidades</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiência</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#scholarity">Escolaridade</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <?php if (isset($email)) { ?>
    <div class="page-content">
      <div>
        <div class="profile-page">
          <div class="wrapper">
            <div class="page-header page-header-small" filter-color="green">
              <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
              <div class="container">
                <div class="content-center">
                  <div class="  "><a href="#"><img src="images/anthony.jpg" alt="Image"/></a></div>
                  <div class="h2 title"><?php echo $infoUsuario['nome']; ?></div>
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
                    <?php echo $infoUsuario['sobre']; ?>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="card-body">
                    <div class="h4 mt-0 title">Informações Básicas</div>
                    <div class="row">
                      <div class="col-sm-4"><strong class="text-uppercase">Idade:</strong></div>
                      <div class="col-sm-8"><?php echo  $infoUsuario['idade']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['email']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Telefone:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['telefone']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Endereço:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['endereco']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Cidade:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['cidade']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Estado:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['estado']; ?></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4"><strong class="text-uppercase">Idiomas:</strong></div>
                      <div class="col-sm-8"><?php echo $infoUsuario['idiomas']; ?></div>
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
                <?php if ($num > 0) { ?>




                      <?php while($infoUsuario = $result_join->fetch_assoc()) { ?>
                  <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                    <div class="card-body cc-experience-header">
                      <p><?php echo $infoUsuario['data_profissao']; ?></p>
                      <div class="h5"><?php echo $infoUsuario['cargo']; ?></div>
                    </div>
                  </div>
                  <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                    <div class="card-body">
                      <div class="h5"><?php echo $infoUsuario['profissao']; ?></div>
                      <p><?php echo $infoUsuario['sobre_profissao']; ?></p>
                    </div>
                  </div>
                <?php } ?>



                <?php } else {  ?>
                </div>
              </div>
              <div class="alert alert-danger" style="opacity: 0.95;" role="alert">
                Não foi encontrado nenhum registro de profissão!
              </div>
            <?php } ?>



          </div>
        </div>
        <div class="section" id="scholarity">
          <div class="container cc-education">
            <div class="h4 text-center mb-4 title">Escolaridade</div>
            <div class="card">
              <div class="row">
                <?php if ($num > 0) { ?>
                  <div class="col-md-3 bg-dark" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                    <div class="card-body cc-education-header">
                      <?php do{ ?>
                        <p><?php echo $infoUsuario['data_escolaridade']; ?></p>
                        <div class="h5"><?php echo $infoUsuario['ensino_superior']; ?></div>
                      </div>
                    </div>
                    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                      <div class="card-body">
                        <div class="h5"><?php echo $infoUsuario['nome_faculdade']; ?></div>
                        <p><?php echo $infoUsuario['curso']; ?></p>
                      <?php } while($infoUsuario = $result_join->fetch_assoc()); ?>
                    </div>

                  <?php } else { ?>
                  </div>
                </div>
                <div class="alert alert-danger" style="opacity: 0.95;" role="alert">
                  Não foi encontrado nenhum registro de escolaridade!
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>

   <div class="container" style="width: 80%; margin-left: auto; margin-right: auto;">
    <div>
      <h1>Faça o login para acessar essa página!</h1>
    </div>
  </div>
<?php } ?>

<!-- Footer -->
    <footer class="sticky-footer bg-light mt-4">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span><strong> &copy; Todos os direitos reservados</strong></span>
        </div>
      </div>
    </footer>
<!-- End of Footer -->



<script src="perfil/js/core/jquery.3.2.1.min.js"></script>
<script src="perfil/js/core/popper.min.js"></script>
<script src="perfil/js/core/bootstrap.min.js"></script>
<script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
<script src="perfil/js/aos.js"></script>
<script src="perfil/scripts/main.js"></script>
</body>
</html>


</div>
</div>
</div>
<script src="perfil/js/core/jquery.3.2.1.min.js"></script>
<script src="perfil/js/core/popper.min.js"></script>
<script src="perfil/js/core/bootstrap.min.js"></script>
<script src="perfil/js/now-ui-kit.js?v=1.1.0"></script>
<script src="perfil/js/aos.js"></script>
<script src="perfil/scripts/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
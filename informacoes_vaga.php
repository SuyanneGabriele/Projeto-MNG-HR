<?php

require_once('include/conexao.php');
require_once('include/links.php');
error_reporting(0);

if (!isset($_SESSION)){
  session_start();
};

$email = $_SESSION['email'];

$sql_usuario = "SELECT * FROM usuario WHERE email = '$email'"; 
$result_usuario = mysqli_query($con, $sql_usuario);
$infoUsuario = $result_usuario->fetch_assoc();

$id_usuario = $infoUsuario  ['id'];

$infoVaga = $_GET['infoVaga'];
$sql = "SELECT * FROM vagas WHERE id = '$infoVaga'";
$result = mysqli_query($con, $sql);
$vagas = mysqli_fetch_assoc($result);

$id_vaga = $vagas['id'];

if (isset($_POST['candidatar'])) {

  $sql_insert = "INSERT INTO vagas_usuarios (`id`, `fk_usuario`, `fk_vaga`) VALUES (DEFAULT, '$id_usuario', '$id_vaga')";
  $result_insert = mysqli_query($con, $sql_insert);

  $_SESSION['sucesso'] = true;
}

if (isset($_POST['descandidatar'])) {

  $sql_delete = "DELETE FROM vagas_usuarios WHERE fk_vaga = '$id_vaga'";
  $result_delete = mysqli_query($con, $sql_delete);

  $_SESSION['descandidatado'] = true;
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Informações da Vaga</title>
  <?php
  require_once('include/links.php');
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
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

      <div class="container">
        <h2>Oportunidades
          <div class="card">
            <div class="card-body">
              <h4>Informações da vaga</h4>
              <hr>
              <?php if ($_SESSION['sucesso']) { ?>
                <div class="col-12">
                  <h5 class="alert alert-success" role="alert">
                    Candidatado com sucesso!
                  </h5>
                </div>
              <?php }; UNSET($_SESSION['sucesso']); ?>

              <?php if ($_SESSION['descandidatado']) { ?>
                <div class="col-12">
                  <h5 class="alert alert-danger" role="alert">
                    Você foi cancelou a sua candidatura com sucesso!
                  </h5>
                </div>
              <?php }; UNSET($_SESSION['descandidatado']); ?>
              <h1><span style="color: black;"><strong><?php echo utf8_encode($vagas['nome_vaga']); ?></span></strong></h1>
              <span style="font-size: 20px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vagas['cidade']); ?></span><br>
              <a href="vagas.php" style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-left mr-2"></i>Voltar para a lista de vagas</a><br>
              <strong style="font-size: 18px;">Sobre a oportunidade</strong>
              
              <?php do{ ?>
                <p style="font-size: 16px;"><?php echo utf8_encode($vagas['infoEmpresa']); ?></p>
                <p style="text-decoration: underline; font-size: 16px;">O que precisamos?</p>
                <p style="font-size: 16px;"><?php echo utf8_encode($vagas['habilidades']); ?></p>
                <p style="text-decoration: underline; font-size: 16px;">O que pode diferenciar?</p>
                <p style="font-size: 16px"><?php echo utf8_encode($vagas['diferenciais']); ?></p>
                <a href='#topo' style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-up mr-2"></i>Voltar ao topo</a>
              <?php } while($vaga = $result->fetch_assoc()); ?>
              <form method="POST" action="">
                <button name="candidatar" type="submit" class="btn btn-info float-right mt-2" style="margin-right: -12px">Candidatar-me</button>
                <button name="descandidatar" type="submit" class="btn btn-danger float-right mt-2 mr-2  " style="margin-right: -12px">Cancelar candidatura</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Fim -->
      </div>




      <!-- Footer -->
      <?php
      require_once('include/footer.php');
      ?>
      <!-- End of Footer -->

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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php

require_once('include/conexao.php');
require_once('include/links.php');

$infoVaga = $_GET['infoVaga'];
$sql = "SELECT * FROM vagas WHERE id = '$infoVaga'";
$result = mysqli_query($con, $sql);
$vagas = mysqli_fetch_assoc($result);

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
              
              <?php do{ ?>
                <h1><span style="color: black;"><strong><?php echo utf8_encode($vagas['nome_vaga']); ?></span></strong></h1>
                <span style="font-size: 20px; color: rgba(0,0,0,.5);"><?php echo utf8_encode($vagas['cidade']); ?></span><br>
                <a href="vagas.php" style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-left mr-2"></i>Voltar para a lista de vagas</a><br>
                <strong style="font-size: 18px;">Sobre a oportunidade</strong>

                <p style="font-size: 16px;"><?php echo utf8_encode($vagas['infoEmpresa']); ?></p>
                <p style="text-decoration: underline; font-size: 16px;">O que precisamos?</p>
                <p style="font-size: 16px;"><?php echo utf8_encode($vagas['habilidades']); ?></p>
                <p style="text-decoration: underline; font-size: 16px;">O que pode diferenciar?</p>
                <p style="font-size: 16px"><?php echo utf8_encode($vagas['diferenciais']); ?></p>
                <a href='#topo' style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-up mr-2"></i>Voltar ao topo</a>
              <?php } while($vaga = $result->fetch_assoc()); ?> 
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


</body>

</html>

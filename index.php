<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>Início</title>

  <?php
  require_once('include/links.php')
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php
   require_once('include/navbar.php');
   ?>

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

    <!-- Content -->
    <div id="content">

      <!-- Topbar -->

      <?php
      require_once('include/topbar.php')
      ?>

      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div style="font-size:30px;">Ultimas vagas cadastradas</div><br>
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary mb-1">Programador JR - PHP</div>
                      <hr>
                      <div style="font-size:16px;">Conhecimentos desejados: Laravel, Composer, Git, POO...</div><br>
                    </div>
                  </div>
                </div>
                <i class="fa fa-clock-o ml-3 mb-4" aria-hidden="true"> Há 3 Horas</i>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary mb-1">Programador PL - Java</div>
                      <hr>
                      <div style="font-size:16px;">Irá atuar em implementação de módulos de sistema Senior, ex: Controladoria, Gestão de Estoque, etc... </div><br>
                    </div>
                  </div>
                </div>
                <i class="fa fa-clock-o ml-3 mb-4" aria-hidden="true"> Há 12 Horas</i>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary mb-1">Gerente de Projetos</div>
                      <hr>
                      <div style="font-size:16px;">Vaga sem descrição</div><br>
                    </div>
                  </div>
                </div>
                <i class="fa fa-clock-o ml-3 mb-4" aria-hidden="true"> Há 3 Horas</i>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary mb-1">Estoquista</div>
                      <hr>
                      <div style="font-size:16px;">No mínimo 4 anos de exp. comprovada na função</div><br>
                    </div>
                  </div>
                </div>
                <i class="fa fa-clock-o ml-3 mb-4" aria-hidden="true"> Há mais de 24 Horas</i>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <a href="vagas.php" style="text-decoration: none;"> 
                <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                  <div class="card-body">
                    <i class="fas fa fa-paste fa-4x" aria-hidden="true" style="color: white !important; margin-bottom: 20px;"></i>
                    <div class="row no-gutters align-items-center">
                      <span style="color: white; font-size:20px;">Ver mais</span><i class="ml-2 fas fa fa-long-arrow-right" aria-hidden="true" style="color: white !important; font-size: 30px;"></i><br>
                      <div class="col mr-2">
                      </div>
                    </div>
                  </div>
                  <p class="ml-3 mb-3 mr-3" style="color: white; ">veja todas as vagas cadastradas em nossa base de oportunidades</p>   
                </div>
              </a>  
            </div>

          </div>

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- Fim -->
    </div>

    <!-- Footer -->
    <?php
    require_once('include/footer.php')
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

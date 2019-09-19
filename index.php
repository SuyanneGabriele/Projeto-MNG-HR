<?php
require_once('include/indexb.php');
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>Início</title>

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

          <!-- Content Row --> <div style="font-size:30px;">Ultimas vagas
          cadastradas</div><br> <div class="row">   <!-- Earnings (Monthly)
            Card Example -->
            <?php if ($num_vagas > 0 ) { ?>
            <?php while($info_index = $result_vagas->fetch_assoc()) { ?>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary mb-1">
                        <p><?=$info_index['nome_vaga']?></p>
                      </div>
                      <hr>
                      <div style="font-size:16px;"><p><?=$info_index['infoEmpresa']?></p></div><br>
                    </div>
                  </div>
                </div>
                <i class="fa fa-clock-o ml-3 mb-4" aria-hidden="true"> Há 
                 <?php
                 if (substr($info_index['TIMEDIFF(now(), data_vagas)'], 0, 2)<1){
                  echo "menos de 1 Hora";
                } elseif (substr($info_index['TIMEDIFF(now(), data_vagas)'], 0, 2)==1){
                  echo "1 Hora";
                } elseif (substr($info_index['TIMEDIFF(now(), data_vagas)'], 0, 2)>1 && substr($info_index['TIMEDIFF(now(), data_vagas)'], 0, 2) <=24 ) {
                  echo substr($info_index['TIMEDIFF(now(), data_vagas)'], 0, 2). " horas";
                } else {
                  echo "mais de 24 horas";
                }
                ?> 
              </i>
            </div>
          </div>
          <?php } ?>
          <?php } ?>

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
                <p class="ml-3 mb-3 mr-3" style="color: white; ">Veja todas as vagas cadastradas em nossa base de oportunidades</p>   
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
<?php
require_once('include/links_footer.php');
?>
</body>
</html>
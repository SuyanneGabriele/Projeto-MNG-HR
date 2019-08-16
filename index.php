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

      <!-- End of Topbar -->
      <!-- Inicio -->

      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="curriculos.php" class="font-weight-bold text-primary text-uppercase mb-1">Recursos Humanos</a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa fa-male fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
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

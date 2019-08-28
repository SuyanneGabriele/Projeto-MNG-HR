<?php
require_once('include/cadastro_backend.php');
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>Cadastre seu Currículo</title>

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

      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="media/images/curriculum5.jpg" style="width: 110%; height: 100%;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><strong>Cadastre seu currículo e venha fazer parte de nossa equipe!</strong></h1>
                  </div>
                  <form class="user was-validated" action="" method="POST">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input class="invisible" type="number" name="id_curriculo" id="cod_curriculo" placeholder="1" disabled value="<?=$resultadoCurriculo['id']?>">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Idade" name="idade">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control form-control-user"  placeholder="noreply@provedor.com" name="email">
                    </div>

                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" placeholder="(DDD) 99999-9999" name="telefone">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Endereço" name="endereco">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Cidade" name="cidade">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Estado" name="estado">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="País" name="pais">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Idiomas" name="idiomas">
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" name="btnSalvar">Cadastrar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
>
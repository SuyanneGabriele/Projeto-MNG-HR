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
                  <form class="user was-validated">
                    <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user is-invalid" id="primeiroNome" placeholder="Primeiro Nome">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="ultimoNome" placeholder="Sobrenome">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="insiraCidade" placeholder="Cidade">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="insiraEstado" placeholder="Estado">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="insiraEndereço" placeholder="Rua Dois de Setembro, 733">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-user" id="insiraCelular" placeholder="(DDD) 99999-9999">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="insiraEmail" placeholder="email@provedor.com">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="insiraSenha" placeholder="Digite sua senha">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="repitaSenha" placeholder="Repita a senha">
                    </div>
                  </div>
                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlFile1" >Anexe o seu currículo aqui:</label>
                      <input type="file" class="form-control-file " id="anexoCurriculo">
                    </div>
                  </form>
                  <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Entrar
                  </a>
                  <hr>
                  <a href="index.html" class="btn btn-linkedin btn-user btn-block">
                    <i class="fab fa-linkedin fa-fw"></i> Entrar com o LinkedIn 
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Entrar com o Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="recuperacaosenha.html">Esqueci minha senha</a>
                </div>
                <div class="text-center">
                  <a class="small" href="login.html">Já possui uma conta? Faça o login!</a>
                </div>
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

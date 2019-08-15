<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resgistre-se - Sistema Gestão RH</title>
  <?php
  require_once('include/links.php')
  ?>
</head>
<body style="background-color: rgba(0, 0, 0, 0.8);">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar --> 
    <?php 
    require_once('include/navbar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        require_once('include/topbar.php')
        ?>
        <!-- End of Topbar -->
        <div class="container">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                  <img src="media/images/imgcadastro.jpg" style="width: 110%; height: 100%;">
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4"><strong>Criar uma conta</strong></h1>
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
                      <a href="login.html" class="btn btn-primary btn-user btn-block">
                        Registre-se
                      </a>
                      <hr>
                      <a href="index.html" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-google fa-fw"></i> Registre-se com o Google
                      </a>
                      <a href="index.html" class="btn btn-facebook btn-user btn-block">
                        <i class="fab fa-facebook-f fa-fw"></i> Registre-se com o Facebook
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
      <?php
      require_once('include/footer.php')
      ?>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Boostrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
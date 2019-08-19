<?php
error_reporting(0);

if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resgistre-se - Sistema Gestão RH</title>
  <?php
  require_once('include/links.php');
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
        require_once('include/topbar.php');
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
                    <form class="user was-validated" action="include/registrobackend.php" method="POST">
                      <?php
                      if ($_SESSION['status_cadastro']) {
                        header('Location: login.php');
                        ?>
                        <div class="alert alert-success" role="alert">
                          Cadastro efetuado com sucesso! Faça o login
                        </div>
                        <?php
                      };
                      unset($_SESSION['status_cadastro']);
                      ?>
                      <?php
                      if ($_SESSION['email_existe']) { 
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Esse email já está sendo usado!
                        </div>
                        <?php
                      };
                      unset($_SESSION['email_existe']);
                      ?>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="nome" class="form-control form-control-user is-invalid" placeholder="Nome">
                        </div> 
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="sobrenome" class="form-control form-control-user is-invalid" placeholder="Sobrenome">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" placeholder="email@provedor.com">
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" name="senha" class="form-control form-control-user" placeholder="Digite sua senha">
                        </div>
                        <div class="col-sm-6">
                          <input type="password" name="repitaSenha" class="form-control form-control-user" placeholder="Repita a senha">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">Cadastrar-se</button>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="login.php">Já possui uma conta? Faça o login!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      require_once('include/footer.php');
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

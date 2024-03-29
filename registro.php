<?php
error_reporting(0);

if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="media/css/estilos.css">
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
              <div class="row" style="background-image: url('media/images/imgcadastro3.png');">
                <div class="col-lg-6" style="margin-left: auto; margin-right: auto;">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4"><strong>CRIAR UMA CONTA</strong></h1>
                      <hr class="mb-4">
                    </div>
                    <form class="user" action="include/registrobackend.php" method="POST">
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
                          Este email já está sendo usado!
                        </div>
                        <?php
                      };
                      unset($_SESSION['email_existe']);
                      ?>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome" required>
                        </div> 
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="sobrenome" class="form-control form-control-user" placeholder="Sobrenome" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" id="emailConf" class="form-control form-control-user" placeholder="email@provedor.com" required>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" name="senha" id="senha" class="form-control form-control-user is" placeholder="Digite sua senha" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="password" name="repitaSenha" id="senha2" class="form-control form-control-user is" placeholder="Repita a senha" required>
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
<?php
    require_once('include/links_footer.php');
?>
<script src="conferirinfos.js"></script>
</body>
</html>

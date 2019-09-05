<?php

require_once('include/conexao.php');
if (!isset($_SESSION)){
  session_start();
}
error_reporting(0);
$errors = [];

  if (isset($_POST['reset_password'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);

  //  Verificar se o email existe no  banco de dados
    $query = "SELECT email FROM usuario WHERE email = '$email'";
    $results = mysqli_query($con, $query);

    if (empty($email)) {
      //  CRIAR ALERTA PARA CASO ELE NÃO PREENCHA O EMAIL
        array_push($errors, "Digite seu email!");

    }else if (mysqli_num_rows($results) <= 0) {
      //  CRIAR ALERTA "NÃO EXISTE USUÁRIO COM ESTE EMAIL"
        array_push($errors, "Não existe um usuário com este email!");

    }
  //  Cria um token único com o tamanho de 100
    $token = bin2hex(random_bytes(50));

    if (count($errors) == 0) {
    //  Guarda o token na tabela password_reset contra o email do usuário
      $sql = "INSERT INTO `password_reset` (`email`, `token`) VALUES (`$email`, `$token`);";
      $results = mysqli_query($con, $sql);

    //  Envia um email para o usuário com o token no link do email
      $to = $email;
      $subject = "Redefina sua senha no managerhr.com";
      $msg = "Olá, clique nesse link <a href=\"recgerarcodigo.php?token=" . $token . "\">link</a> para redefinir sua senha.";
      $msg = wordwrap($msg,70);
      $headers = "From: info@managerhr.com";
      mail($to, $subject, $msg, $headers);
      header('Location: login.php');
    }
  }

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Recuperação de Senha - Página</title>
    <link rel="stylesheet" type="text/css" href="media/css/estilos.css">
    <?php
    require_once('include/links.php');
    ?>
  </head>
  <body>

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

            <!-- Outer Row -->
            <div class="row justify-content-center">

              <div class="col-xl-8 col-lg-8 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5 text-center">
                  <div class="card-body p-3">

                    <div class="col-lg-8" style="margin-left: auto; margin-right: auto;">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-2">Esqueceu sua senha?</h1>
                          <p class="mb-4">Insira seu email e nós enviaremos um link para o seu email para redefinição de senha.</p>
                        </div>
                        <?php include('messages.php'); ?>
                        <form class="user" method="POST">
                          <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Insira seu email">
                          </div>
                          <button type="submit" name="reset_password" class="btn btn-primary btn-user btn-block text-white">Redefinir senha</button>
                        </form>
                        <hr>
                        <div class="text-center">
                          <a class="small" href="registro.php">Criar uma conta</a>
                        </div>
                        <div class="text-center">
                          <a class="small" href="login.php">Já tem uma conta? Faça o login</a>
                        </div>
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
<<<<<<< HEAD
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
  </html>
=======
<?php
    require_once('include/links_footer.php');
?>

</body>
</html>
>>>>>>> d4282ba50b6933ca1ca991c295a62145a6f8bb42

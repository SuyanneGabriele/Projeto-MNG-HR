<?php

require_once('include/conexao.php');
require_once('include/area_restrita.php');
require_once('include/funcoes.php');
date_default_timezone_set('America/Sao_Paulo');

if (isset($_POST['reset_password'])) {
  $email = $_POST['email'];
  $sql_email = "SELECT email, nome FROM usuario WHERE email = '$email'";
  $result_email = mysqli_query($con, $sql_email);
  $email1 = mysqli_fetch_assoc($result_email);

  if (isset($email1['email'])) {
    $token = mt_rand(100000, 900000);

    $insert_token = "UPDATE `usuario` SET `token_recuperacao` = '$token' WHERE `email` = '$email';";
    $result_token = mysqli_query($con, $insert_token);
    $token_data = date('H:i');
    $token_datacode = base64_encode($token_data); 
    $token2 = $token.'-'.$token_datacode;
    $token_final = str_replace('-', '', $token2);
    $token_final1 = str_replace('=', '', $token_final);

    $update_token = "UPDATE `usuario` SET `token_recuperacao` = '$token_final1' WHERE `email` = '$email';";
    $result_token2 = mysqli_query($con, $update_token);
    
    //  Aviso que o usuári irá receber um email para redefiniçã ode senha
    $_SESSION['enviar_email'] = true;

    //  Enviar email

    $nome = $email1['nome'];

    $corpo = "<h1>Clique no link para redefinir sua senha, $nome</h1>";
    $corpo .= "<p>http://localhost/phpVespertino/Projeto-MNG-HR/senha.php?token=$token_final1</p>";

    $envio = enviar_email($email, 'testesuy@gmail.com', 'Recuperação de senha', 'Recuperação de senha - Management Human Resources', $corpo);

    if ($envio == true) {
      $_SESSION['enviamos'] = true;
    } else {
      echo "Erro ao enviar contato.<br>";
      echo $envio;
    }

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
                        <!-- ----- AVISOS ----- -->
                        <?php if ($_SESSION['enviamos']) { ?>
                          <div class="col-12">
                            <div class="alert alert-success" role="alert">
                              Email enviado com sucesso!
                            </div>
                          </div>
                        <?php }; UNSET($_SESSION['enviamos']); ?>
                        <!-- ------ FIM AVISOS ----- -->
                        <p class="mb-4">Insira seu email e nós enviaremos um link para o seu email para redefinição de senha.</p>
                      </div>
                      <?php include('messages.php'); ?>
                      <form class="user" method="POST">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Insira seu email">
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
  <?php
  require_once('include/links_footer.php');
  ?>
</body>
</html>

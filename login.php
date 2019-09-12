<?php
include_once('include/conexao.php');

error_reporting(0);
if (!isset($_SESSION)){
    session_start();
}
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login - Sistema Gestão RH</title>
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
                require_once('include/topbar.php')
                ?>
                <!-- End of Topbar -->

                <div class="container">
                    <!-- Outer Row -->
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12 col-md-9">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0 text-center">

                                    <!-- Nested Row within Card Body -->
                                    <div class="row" id="imgcadastro" style="background-image: url('media/images/curriculum2.jpg'); ">

                                        <div class="col-lg-7 col" style="margin-left: auto; margin-right: auto;">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4"><strong>BEM VINDO!</strong></h1>
                                                </div>
                                                <form class="user" action="include/verifica.php" method="POST">
                                                    <?php
                                                    if ($_SESSION['nao_autenticado']) {
                                                        ?>
                                                        <div class="alert alert-danger" role="alert">
                                                          Insira seus dados e tente novamente!
                                                      </div>
                                                      <?php
                                                  };
                                                  unset($_SESSION['nao_autenticado']);
                                                  ?>
                                                  <div class="form-group">
                                                    <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp" placeholder="email@provedor.com" value="<?=(isset($_COOKIE['lembrar2'])) ? $_COOKIE['lembrar2'] : ''?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" name="senha" placeholder="*********" value="<?=(isset($_COOKIE['lembrar'])) ? $_COOKIE['lembrar'] : ''?>">
                                                </div>
                                                <div class="form-group">

                                                 <input type="checkbox" class="form-check-input" name="lembrarSenha" id="lembrarSenha" <?=(isset($_COOKIE['lembrar3'])) ? 'checked' : ''?>>
                                                 <label class="form-check-label" for="lembrarSenha" style="color: rgba(0, 0, 0, 0.8);"><strong>Lembre-se de mim</strong></label>
                                             </div>
                                             <input type="submit" class="btn btn-primary btn-user btn-block" value="Entrar" style="font-weight: 800;">
                                         </form>
                                         <hr>
                                         <div class="text-center">
                                            <a class="small" href="recuperar.php">Esqueci minha senha</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="registro.php">Criar uma conta</a>
                                        </div>
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
<?php
require_once('include/links_footer.php');
?>

</body>
</html>
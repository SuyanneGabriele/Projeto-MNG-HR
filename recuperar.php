<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recuperação de Senha - Página</title>
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
                require_once('include/topbar.php')
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
                                                <p class="mb-4">Insira seu email e nós enviaremos um link a seu email para redefinição de senha.</p>
                                            </div>
                                            <form class="user">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user" id="loginEmail" aria-describedby="emailHelp" placeholder="Insira seu email">
                                                </div>
                                                <a href="login.php" class="btn btn-primary btn-user btn-block">
                                                    Redefinir senha
                                                </a>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="register.html">Criar uma conta</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="login.html">Já tem uma conta? Faça o login</a>
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
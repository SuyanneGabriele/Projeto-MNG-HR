<!DOCTYPE html>
<html lang="en">
<head>
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
                                    <div class="row">
                                        <div class="col-lg-7 col" style="margin-left: auto; margin-right: auto;">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4"><strong>Bem vindo!</strong></h1>
                                                </div>
                                                <form class="user">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control form-control-user" id="loginEmail" aria-describedby="emailHelp" placeholder="email@provedor@gmail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-user" id="loginSenha" placeholder="*********">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                                            <label class="custom-control-label" for="customCheck">Lembre-se de mim</label>
                                                        </div>
                                                    </div>
                                                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                        Entrar
                                                    </a>
                                                    <hr>
                                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                                        <i class="fab fa-google fa-fw"></i> Entrar com o Google
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
                                                    <a class="small" href="register.html">Criar uma conta</a>
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

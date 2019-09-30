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
    <title>Faça login</title>
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


                                    <div class="col-lg-7 col" style="margin-left: auto; margin-right: auto;">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h4 class="h4 mb-4" style="color: black;">Faça o login para poder acessar essa página!</h4>
                                            </div>

                                            <h5 class="text-gray">Faça o login ou cadastre-se para continuar.</h5>

                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="recuperar.php">Esqueci minha senha</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="registro.php">Criar uma conta</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="login.php">Faça o login</a>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login - Sistema Gestão RH</title>
    <?php
    require_once('include/links.php');       
    ?>
</head>
<body">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar --> 

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
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
                                                <h1 class="h4 text-gray-900 mb-4"><strong>Você não está logado!</strong></h1>
                                            </div>


                                            <hr>
                                            <div class="text-center">
                                                <p class="small" href="recuperar.php">Faça login para continuar</p>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="login.php">Fazer Login</a>
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
    </div>
</div>
<?php
require_once('include/links_footer.php');
?>

</body>
</html>
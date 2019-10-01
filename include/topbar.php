<?php 
require_once('conexao.php');
// require_once('classes/uploader.class.php');

$email = $_SESSION['email'];


$sql_perfil = "SELECT * FROM usuario WHERE email = '$email'";
$result_perfil = mysqli_query($con, $sql_perfil);
$info_perfil = $result_perfil->fetch_assoc();
$idU = $info_perfil['id'];

$pegando_foto = "SELECT nome_foto FROM cadastro_perfil WHERE fk_perfil = $idU";
$resultado_nome_foto = mysqli_query($con, $pegando_foto);
$resultado_nome_foto2 = mysqli_fetch_assoc($resultado_nome_foto);
?>

<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <div style="margin-left: 20px;">
    <strong>Management Human Resources</strong>
  </div>
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow" style="hover:none !important;">
      <a class="nav-link dropdown-toggle" href="sair.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span  class="mr-2 d-none d-lg-inline text-gray-600 small">
          <?php if($resultado_nome_foto2['nome_foto'] == NULL) { ?>
            <img src="uploads/avatar.png" class="img-profile rounded-circle">
          <?php } else { ?>
            <img src="uploads/<?= $resultado_nome_foto2['nome_foto'] ?>" class="img-profile rounded-circle">
          <?php } ?>
        </span>
      </a>



      <!-- Dropdown - User Information -->
      <div href="include/logoff.php" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a href="include/logoff.php" class="dropdown-item" style=" color: rgb(0,0,0,.6);"><strong>Sair</strong></a>
      </div>
    </li>
  </ul>
</nav>
<?php
require_once('include/indexb.php');

function limita_caracteres($texto, $limite, $quebra = true) {
  $tamanho = strlen($texto);

  //  Verifica se o tamanho é menor ou igual ao limite
  if ($tamanho <= $limite) {
    $novo_texto = $texto;

    //  Se o tamanho do texto for maior que o limite
  } else {
    //  Verifica a opção de quebrar texto
    if ($quebra == true) {
      $novo_texto = trim(substr($texto, 0, $limite)).'...';
      //  Se não, corta $texto na última palavra antes do limite
    } else {
      //  Localiza o último espaço antes de $limite
      $ultimo_espaço = strrpos(substr($texto, 0, $limite),' ');
      //  Corta o $texto até a posição localizada
      $novo_texto = trim(substr($texto, 0, $ultimo_espaço)).'...';
    }
  }
  //  Retorna o valor formatado
  return $novo_texto;
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>Início</title>

  <?php
  require_once('include/links.php');
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php
   require_once('include/navbar.php');
   ?>

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

    <!-- Content -->
    <div id="content">

      <!-- Topbar -->

      <?php
      require_once('include/topbar.php')
      ?>

      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row --> <div style="font-size:30px;">Ultimas vagas
          cadastradas</div><br> <div class="row">   <!-- Earnings (Monthly)
            Card Example -->
            <?php if ($num_vagas > 0 ) { ?>
              <?php while($info_index = $result_vagas->fetch_assoc()) { ?>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 mt-2 mb-1">
                    <a href="informacoes_vaga.php?infoVaga=<?php echo utf8_decode(utf8_encode($info_index['id'])); ?>" style="text-decoration: none;">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="font-weight-bold text-primary mb-1">
                              <p><?=utf8_encode($info_index['nome_vaga']);?></p>
                            </div>
                            <hr>
                            <div style="font-size:16px; color: gray;"><p class="mb-0"><?=limita_caracteres(utf8_encode($info_index['habilidades']), 80); ?></p></div><br>
                          </div>
                        </div>
                      </div>
                      <i class="fa fa-clock-o ml-3" style="color: gray;" aria-hidden="true"> Há 
                       <?php
                       if (explode(':', $info_index['TIMEDIFF(now(), data_vagas)'])[0]<1){
                        echo "menos de 1 Hora";
                      } elseif (explode(':', $info_index['TIMEDIFF(now(), data_vagas)'])[0]==1){
                        echo "1 Hora";
                      } elseif (explode(':', $info_index['TIMEDIFF(now(), data_vagas)'])[0]>1 && explode(':', $info_index['TIMEDIFF(now(), data_vagas)'])[0] <=24 ) {
                        echo explode(':', $info_index['TIMEDIFF(now(), data_vagas)'])[0]. " horas";
                      } else {
                        echo "mais de 24 horas";
                      }
                      ?> 
                    </i>
                  </div>
                <!-- </a> -->
              </div>
            <?php } ?>
          <?php } ?>

          <div class="col-xl-4 col-md-6 mb-4 mt-2">
            <a href="vagas.php" style="text-decoration: none;"> 
              <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                <div class="card-body">
                  <i class="fas fa fa-paste fa-4x" aria-hidden="true" style="color: white !important; margin-bottom: 20px;"></i>
                  <div class="row no-gutters align-items-center">
                    <span style="color: white; font-size:20px;">Ver mais</span><i class="ml-2 fas fa fa-long-arrow-right" aria-hidden="true" style="color: white !important; font-size: 30px;"></i><br>
                    <div class="col mr-2">
                    </div>
                  </div>
                </div>
                <p class="ml-3 mb-3 mr-3" style="color: white; ">Veja todas as vagas cadastradas em nossa base de oportunidades</p>   
              </div>
            </a>  
          </div>

        </div>

        <!-- Content Row -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- Fim -->
  </div>

  <!-- Footer -->
  <?php
  require_once('include/footer.php')
  ?>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<?php
require_once('include/links_footer.php');
?>
</body>
</html>
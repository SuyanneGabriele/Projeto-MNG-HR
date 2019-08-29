<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>Informações da Vaga</title>

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
   <span id='topo'></span>
   <div id="content-wrapper" class="d-flex flex-column">

    <!-- Content -->
    <div id="content">

      <!-- Topbar -->

      <?php
      require_once('include/topbar.php');
      ?>

      <!-- End of Topbar -->
      <!-- Inicio -->

      <div class="container">
        <h2>Oportunidades
          <div class="card">
            <div class="card-body">
              <h4>Informações da vaga</h4>
              <hr>
              
              <h1><span style="color: black;"><strong>Arquiteto de Software (DevOps)</span></strong></h1>
              <span style="font-size: 20px; color: rgba(0,0,0,.5);">Blumenau (SC)</span><br>
              <a href="vagas.php" style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-left mr-2"></i>Voltar para a lista de vagas</a><br>
              <strong style="font-size: 18px;">Sobre a oportunidade</strong>
              <p style="font-size: 16px;">Aqui nós seguimos metodologias ágeis, trabalhando em times que entregam soluções inovadoras e de valor aos clientes. Atuamos em implementações, melhorias de performance e integrações, desenvolvendo códigos bem estruturados utilizando as melhores práticas de programação.</p>
              <p style="font-size: 16px;">Esse profissional irá atuar com time de Ecossistema no Devops desenvolvendo atividades relacionadas à definição de padrões de uso de APIs e arquitetura de produtos que permitam a automatização e melhorias nos processos de CI/CD. Gestão de ambientes on-premisse e cloud no desenvolvimento, ferramentas internas, IaC e treinamento/suporte aos desenvolvedores.</p>
              <p style="text-decoration: underline; font-size: 16px;">O que precisamos?</p>
              <p style="font-size: 16px;">- Superior completo em Sistemas da Informação, Ciências da computação ou áreas afins;<br>
                - Vivência em desenvolvimento de software;<br>
                - Conhecimento em JavaEE, SOA, MicroServiços, Cloud, JPA, Hibernate, integrações com WebServices (REST), PostgreSQL e Mensageria;<br>
                - Domínio em ambiente Linux e Shell Scripting;<br>
                - Experiência com containers, orquestradores de containers e RabbitMq;<br>
                - Vivência com otimizações e performance/tunning em aplicações;<br>
              - Conhecimento em práticas DevOps.</p>
              <p style="text-decoration: underline; font-size: 16px;">O que pode diferenciar?</p>
              <p style="font-size: 16px">- Vivência com AWS, Google Cloud, Azure;<br>
              - Experiência com IaC (Ansible, Terraform, Puppet, Chef).</p>
              <a href='#topo' style="font-size: 15px; color: rgba(0,0,0,.5); hover:hover {text-decoration: underline;}"><i class="fas fa fa-arrow-up mr-2"></i>Voltar ao topo</a>
            </div>
          </div>
        </div>

        
            <!-- Fim -->
          </div>




          <!-- Footer -->
          <?php
          require_once('include/footer.php');
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

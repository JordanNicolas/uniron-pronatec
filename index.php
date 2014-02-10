<?php include_once("header.php"); ?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-9">
      <div class="emprego"></div>
    </div>
  </div>

  <div class="row content">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-7">
      <div class="row templates" id="home">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-home.php"); ?>
        </div>
      </div>

      <div class="row templates hidden" id="pronatec">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-pronatec.php"); ?>
        </div>
      </div>

      <div class="row templates hidden" id="objetivos">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-objetivos.php"); ?>
        </div>
      </div>

      <div class="row templates hidden" id="cursos">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-cursos.php"); ?>
        </div>
      </div>

      <div class="row templates hidden" id="inscreva-se">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-inscreva_se.php"); ?>
        </div>
      </div>

      <div class="row templates hidden" id="perguntas-frequentes">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-perguntas_frequentes.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>
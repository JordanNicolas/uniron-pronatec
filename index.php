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
      <div class="row" id="home" class="templates">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-home.php"); ?>
        </div>
      </div>

      <div class="row" id="pronatec" class="templates" style="display: none;">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-pronatec.php"); ?>
        </div>
      </div>

      <div class="row" id="objetivos" class="templates" style="display: none;">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-objetivos.php"); ?>
        </div>
      </div>

      <div class="row" id="cursos" class="templates" style="display: none;">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-cursos.php"); ?>
        </div>
      </div>

      <div class="row" id="inscreva-se" class="templates" style="display: none;">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-inscreva_se.php"); ?>
        </div>
      </div>

      <div class="row" id="perguntas-frequentes" class="templates" style="display: none;">
        <div class="col-md-12">
          <?php include_once("partial_templates/content-perguntas_frequentes.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>
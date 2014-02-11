<?php header("Content-Type: text/html; charset=UTF-8", yes); ?>
<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR" prefix="og: http://ogp.me/ns#" prefix="og: http://ogp.me/ns">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR" prefix="og: http://ogp.me/ns#" prefix="og: http://ogp.me/ns">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="pt-BR" prefix="og: http://ogp.me/ns#" prefix="og: http://ogp.me/ns">
<!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <title>Pronatec &mdash; <?php echo $page_title; ?></title>
  
  <!-- Meta -->
  <meta name="author" content="Netpix - Agência Web [http://netpix.com.br]">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="contact" content="agencia@netpix.com.br">
  <meta name="rating" content="general">
  <meta name="copyright" content="Uniron Pronatec - Todos os direitos reservados">
  <meta name="application-name" content="Uniron - Pronatec">

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <!--[if lt IE 9]>
    <script src="./assets/js/html5.min.js"></script>
    <script src="./assets/js/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript" src="./assets/js/jquery.js?v=1.10.2"></script>
  <script type="text/javascript" src="./assets/js/jquery-migrate.js?v=1.2.1"></script>

  <!-- Facebook -->
  <meta property="og:locale" content="pt_BR">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Uniron - Pronatec">
  <meta property="og:url" content="<?php echo URI; ?>">
  <meta property="og:site_name" content="Uniron - Pronatec">
</head>
<body>
  <?php include_once("functions.php"); ?>
  <div class="wrapper">

    <div class="container">

      <div class="row">
        <div class="col-md-8 relative">
          <div class="img-menina absolute"></div>
          <a href="<?php echo URI . DS; ?>" class="pull-right mt20 z1">
            <img src="<?php echo IMAGES_URI . DS; ?>logo.png" alt="" class="relative">
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="pull-right mt20">
            <img src="<?php echo IMAGES_URI . DS; ?>logo-pronatec.png" alt="">
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-9">
          <ul class="menu helvetica fs14 uc lavalamp">
            <li class="active"><a href="<?php echo URI; ?>" data-target="home"><div class="home"></div></a></li>
            <li><a href="<?php echo URI . DS; ?>pronatec" data-target="pronatec">O que é o pronatec?</a></li>
            <li><a href="<?php echo URI . DS; ?>objetivos" data-target="objetivos">Objetivos</a></li>
            <li><a href="<?php echo URI . DS; ?>cursos" data-target="cursos">Cursos</a></li>
            <li><a href="<?php echo URI . DS; ?>inscreva-se" data-target="inscreva-se">Inscreva-se</a></li>
            <li><a href="<?php echo URI . DS; ?>perguntas-frequentes" data-target="perguntas-frequentes">Perguntas Frequentes</a></li>
          </ul>
        </div>
      </div>
    </div>
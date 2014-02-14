<?php 
  /** Define DS - DIRECTORY SEPARATOR */
  if( !defined('DS') )
    define('DS', DIRECTORY_SEPARATOR);

  /** Include Theme Config file */
  include_once("includes/theme-config.php");

  /** Require Classes PHPMailer */
  include_once("includes/class-phpmailer.php");
  include_once("includes/class-smtp.php");

  /**
   * Define função para envio de email pelo site
   * com opção de mudança de nomes e emails pelo gerenciador.
   *
   * @return bool
   * @package Uniron - Pronatec
   * @version 0.1.0
   * @author Randson Jarthis
   **/
  function smtpmailer( $para, $de, $de_nome, $assunto, $corpo ) {

    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->SMTPDebug = 0;

    $mail->IsHTML(true);

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'tls';

    $mail->Host = 'smtp.gmail.com';

    $mail->CharSet = "UTF-8";

    $mail->Port = 587;

    $mail->Username = 'agencia@netpix.com.br';

    $mail->Password = '!#n3tp1x#!';

    $mail->SetFrom($de, $de_nome);

    $mail->Subject = $assunto;

    $mail->Body = $corpo;

    $mail->AddAddress($para);

    // $mail->AddCC('edjames@netpix.com.br', 'Edjames Oliveira'); // Envia uma cópia

    if(!$mail->Send()) {
      return false;
    }
    else {
      return true;
    }
  }

  /** Include Ajax Theme File */
  include_once("includes/ajax.php"); ?>
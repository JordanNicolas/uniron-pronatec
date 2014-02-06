<?php 
  /** Define DS - DIRECTORY SEPARATOR */
  if( !defined('DS') )
    define('DS', DIRECTORY_SEPARATOR);

  /** Include Theme Config file */
  include_once("includes/theme-config.php");

  /**
   * Define função para envio de email pelo site
   * com opção de mudança de nomes e emails pelo gerenciador.
   *
   * @return bool
   * @package Uniron - Pronatec
   * @version 0.1.0
   * @author Randson Jarthis
   **/
  function email( $para, $de, $de_nome, $assunto, $corpo ) {
    require( INCLUDES_DIR . DS . 'class-phpmailer.php' );
    require( INCLUDES_DIR . DS . 'class-smtp.php' );

    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->SMTPDebug = 0;

    $mail->IsHTML(true);

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'tls';

    $mail->Host = 'smtp.gmail.com';

    $mail->CharSet = "UTF-8";

    $mail->Port = '587';

    $mail->Username = 'randson@netpix.com.br';

    $mail->Password = '';

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
<?php 
  if( $_POST ) {
    $name_user = $_POST['fi_nome'];
    $email_user = $_POST['fi_email'];
    $telephone_user = $_POST['fi_telefone'];

    $curso_1 = $_POST['fi_opcao-curso-1'];
    $curso_2 = $_POST['fi_opcao-curso-2'];
    $curso_3 = $_POST['fi_opcao-curso-3'];

    $para = 'randson@netpix.com.br';
    $de = $email_user;
    $de_nome = $name_user;
    $assunto = 'Formulário de Inscrição - UNIRON - PRONATEC';
    $corpo = <<<MSG
      Um usuário fez inscrição no site do pronatec. <br> 
      A seguir os dados do usuário: <br><br>
      <strong>Nome:</strong> $name_user <br>
      <strong>Email:</strong> $email_user <br>
      <strong>Telefone:</strong> $telephone_user <br><br>

      Cursos Selecionados: <br><br>
      <strong>Opção 1:</strong> $curso_1 <br>
      <strong>Opção 2:</strong> $curso_2 <br>
      <strong>Opção 3:</strong> $curso_3 <br>
MSG;
    
    $mail = smtpmailer( $para, $de, $de_nome, $assunto, $corpo );

    if( $mail  ) {
      echo json_encode(array(
        'status' => true,
        'message' => 'Sua inscrição foi realizada com sucesso.'
      ));
    }
    else {
      echo json_encode(array(
        'status' => false,
        'message' => "Sua inscrição não foi realizada. \nTente novamente mais tarde."
      ));
    }
  } ?>
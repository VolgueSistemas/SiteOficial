<!-- Formulario -->

<?php

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $assunto = addslashes($_POST['assunto']);
  $mensagem = addslashes($_POST['mensagem']);

  $para = "carlosdaniel.messiasdossantos@gmail.com";
  $assunto = "Coleta de dados - Volgue Sistemas";

  $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

  $cabeca = "From: kelly.messiasdossantos@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

  if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
  }else{
    echo("Houve um erro ao enviar o email!");
  }

?>
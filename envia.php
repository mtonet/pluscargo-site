<?php

require_once("PHPMailer/class.phpmailer.php");

/* Desenvolvido por Willians Andrade - Workana
 * willians.lemos87@gmail.com
 */
//SMTP GMAIL
$EMAILGMAIL = 'marcelotonet@gmail.com'; // Usuário do servidor SMTP
$SENHAGMAIL = 'jwjxuaalsfmwyijj'; // Senha do servidor SMTP


// Parametros
  $para = "";
  $regiao = "";
  $escritorio = $_POST['escritorio'];
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
 
// Modo Teste

 $teste =  0;

// Verifica qual o escritorio 
if ($teste == 0){ 

	switch ($escritorio) {
		case 3: // CAMPINAS
			$para = "cpq@pluscargo.com.br";
			$regiao = "CAMPINAS";
			break;
		case 10: // SANTOS
			$para = "ssz@pluscargo.com.br";
			$regiao = "SANTOS";
			break;
		case 5: // JOINVILLE
			$para = "joi@pluscargo.com.br";
			$regiao = "JOINVILLE";
			break;
		case 11: // SÃO PAULO
			$para = "administrativo@pluscargo.com.br";
			$regiao = "SÃO PAULO";
			break;
		case 9: // RIO DE JANEIRO
			$para = "rio@pluscargo.com.br";
			$regiao = "RIO DE JANEIRO";
			break;
		case 8: // PORTO ALEGRE
			$para = "poa@pluscargo.com.br";
			$regiao = "PORTO ALEGRE";
			break;
		case 4: // CURITIBA
			$para = "cwb@pluscargo.com.br";
			$regiao = "CURITIBA";
			break;
		case 7: // PARANAGUÁ
			$para = "png@pluscargo.com.br";
			$regiao = "PARANAGUÁ";
			break;
		case 1: // BELO HORIZONTE
			$para = "bhz@pluscargo.com.br";
			$regiao = "BELO HORIZONTE";
			break;
		case 2: // BRASÍLIA
			$para = "cwb@pluscargo.com.br";
			$regiao = "BRASÍLIA";
			break;
		case 6: // LONDRINA
			$para = "cwb@pluscargo.com.br";
			$regiao = "LONDRINA";
			break;
	}
} else {

	switch ($escritorio) {
		case 3: // CAMPINAS
			$para = "willians.lemos87@gmail.com";
			$regiao = "CAMPINAS";
			break;
		case 10: // SANTOS
			$para = "expressivabrindes@gmail.com";
			$regiao = "SANTOS";
			break;
	}	
}

// Mensagem
  $mensagem .= "<br>  <strong>Nome:  </strong>".$_POST['nome'];
  $mensagem .= "<br>  <strong>Telefone:  </strong>".$_POST['telefone'];  
  $mensagem .= "<br>  <strong>E-mail:  </strong>".$_POST['email'];  
  $mensagem .= "<br>  <strong>Assunto:  </strong>".$_POST['assunto'];  
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];

  
// Envia E-mail
// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(true); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
$mail->Port = 587;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->SMTPSecure = 'tls';
$mail->Username = $EMAILGMAIL; // Usuário do servidor SMTP
$mail->Password = $SENHAGMAIL; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $EMAILGMAIL; // Seu e-mail
$mail->FromName = 'Plus Cargo'; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($para, $regiao);
$mail->AddAddress($EMAILGMAIL, 'Plus Cargo');
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem;
//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
 $redirect = "http://www.pluscargo.com.br/enviado.php";
 
 #abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
 #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
 header("location:$redirect");
}
else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
  ?>
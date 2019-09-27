<?php

	//	Incluir o script PHPMailer
	require_once('phpmailer/class.phpmailer.php');

	//	Definições de acesso
	define('USUARIO', 'testesuy@gmail.com');
	define('SENHA', '123456suy');

	//	Criando function enviar e-mails
	function enviar_email($para, $de, $de_nome, $assunto, $corpo) {

		//	Instanciando um objeto do Mailer
	$mail = new PHPMailer();

	//	Ativando caracteres UTF-8
	$mail->CharSet = "UTF-8";
	//	Mudando a codificação para o UTF-8 funcionar
	$mail->Encoding = "base64";
	//	Mensagem é HTML?
	$mail->IsHTML(true);

	//	Ativar o SMTP
	$mail->IsSMTP();
	//	Ativando a autenticação via SMTP
	$mail->SMTPAuth = true;
	//	Definindo o certificado do SMTP
	$mail->SMTPSecure = 'ssl';
	//	Servidor SMTP
	$mail->Host = 'smtp.gmail.com'; //	servidor do google
	// $mail->HOST = 'mail.mnghr.tk' nosso host
	//	Porta de envio de e-mails do servidor
	$mail->Port = 465;
	//	Passando usuario para se conectar
	$mail->Username = USUARIO;
	//	Passando senha do usuario
	$mail->Password = SENHA;

	//	Definindo o remetente
	$mail->SetFrom($de, $de_nome);
	//	Definindo o assunto
	$mail->Subject = $assunto;
	//	Definindo o corpo do e-mail
	$mail->Body = $corpo;
	//	Definindo o destinatário
	$mail->AddAddress($para);
	//	Definindo a cópia do e-mail
	// $mail->AddCC($copia);
	//	Definindo a cópia oculta
	// $mail->AddBCC($copia);

	if ($mail->Send()) {
		return true;
	} else {
		return $mail->ErrorInfo;
	}


}

?>
<?php
	
	//------ Biblioteca PHPMailer
	require "../../04-app_send_mail/bibliotecas/PHPMailer/Exception.php";
	require "../../04-app_send_mail/bibliotecas/PHPMailer/OAuth.php";
	require "../../04-app_send_mail/bibliotecas/PHPMailer/PHPMailer.php";
	require "../../04-app_send_mail/bibliotecas/PHPMailer/POP3.php";
	require "../../04-app_send_mail/bibliotecas/PHPMailer/SMTP.php";
	
	//------ Regra de negócio - processa_envio.php
	require '../../04-app_send_mail/processa_envio.php'

?>
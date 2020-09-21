<?php
	

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//print_r($_POST);

	class Mensagem {
		private $email = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array(
			'codigo_status' => null,
			'descricao_status'=> ''
			);

		public function __get($attr){
			return $this->$attr;
		}
		public function __set($attr, $valor){
			$this->$attr = $valor;
		}
		public function mensagemValida(){
			if(empty($this->email) || empty($this->assunto) || empty($this->mensagem)){
				return false;
			} 
				return true;			
		}
	}

	$mensagem = new Mensagem();
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	
	/*echo '<pre>';
	print_r($mensagem);
	echo '</pre>';*/
	

	if(!$mensagem->mensagemValida()){
		echo 'Mensagem não é válida.';
		//die();
		header('Location: index.php');
	}

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = false;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
	    $mail->Username   = 'seu_email_aqui@gmail.com';        // SMTP username
	    $mail->Password   = 'SuaSenhaAqui_12345';              // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom($mensagem->__get('email'), 'Remetente - '. $mensagem->__get('email'));
	    $mail->addAddress($mensagem->__get('email'), 'Destinatário');     // Add a recipient
	    //$mail->addAddress('ellen@example.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    // Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('mensagem');
	    $mail->AltBody = $mensagem->__get('mensagem');

	    $mail->send();

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso.';
	} catch (Exception $e) {
		$mensagem->status['codigo_status'] = 2;
	    $mensagem->status['descricao_status'] = 'Não foi possivel enviar esse e-mail! Por favor tente novamente mais tarde. Detalhes do erro: '. $mail->ErrorInfo;
	    //podemos ter aqui alguma lógica que armazene o erro para posterior analise por parte do programador.
	}

?>


<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>
			<div class="row">
				<div class="col-md-12">
					
					<? if($mensagem->status['codigo_status'] == 1){ ?>
						<div class="container">
							<div style="text-align: center;">
								<h1 class="display-4 text-success"> Sucesso
								</h1>
								<p> <?= $mensagem->status['descricao_status'] ?> 
								</p>
								<a href="index.php" class="btn btn-success btn-lg mt-5 text-white"> voltar
								</a>
							</div>
						</div>

					<? } ?>

					<? if($mensagem->status['codigo_status'] == 2){ ?>
						<div class="container">
							<div style="text-align: center;">
								<h1 class="display-4 text-danger"> Ops!
								</h1>
								<p> <?= $mensagem->status['descricao_status'] ?> 
								</p>
								<a href="index.php" class="btn btn-success btn-lg mt-5 text-white"> voltar
								</a>
							</div>
						</div>

					<? } ?>

				</div>
				
			</div>
		</div>



	</body>
</html>
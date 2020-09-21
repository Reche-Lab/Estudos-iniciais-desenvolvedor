<?php

	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';

	try{
		$conexao = new PDO($dsn, $usuario, $senha);
		
		$query = '
			select * from tb_usuarios WHERE id = 7
		';
		$stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ); //FETCH_ASSOC, NUM ou OBJ
		echo $user->nome; //em caso de FETCH_OBJ
		//echo $user['nome']; //em caso de FETCH_ASSOC
		//echo $user[1]; //em caso de FETCH_NUM

		echo "<pre>";
		print_r($user);
		echo "</pre>";

	} catch(PDOException $e){
		echo '<b>Erro: </b>'.$e->getCode().' <b>Mensagem:</b> '. $e->getMessage();
		//registrar esse erro para posterior atualização
	}
	



?>
<?php

	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';

	try{
		$conexao = new PDO($dsn, $usuario, $senha);
		
		$query = '
			select * from tb_usuarios
		';
		$stmt = $conexao->query($query);
		$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC, NUM ou OBJ
		//echo $lista_usuarios[1]->nome; //em caso de FETCH_OBJ
		//echo $lista_usuarios[1]['nome']; //em caso de FETCH_ASSOC
		//echo $lista_usuarios[1][1]; //em caso de FETCH_NUM

		foreach ($lista_usuarios as $key => $value) {
			echo ($value['nome']);
			echo '<hr>';
		}

	} catch(PDOException $e){
		echo '<b>Erro: </b>'.$e->getCode().' <b>Mensagem:</b> '. $e->getMessage();
		//registrar esse erro para posterior atualização
	}
	



?>
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
		$lista = $stmt->fetchAll(PDO::FETCH_OBJ);//FETCH_ASSOC, NUM ou OBJ
		//echo $lista[2]['nome']; //em caso de FETCH_ASSOC
		//echo $lista[2][1]; //em caso de FETCH_NUM
		echo $lista[2]->nome; //em caso de FETCH_OBJ
	
		echo "<pre>";
		print_r($lista);
		echo "</pre>";

	} catch(PDOException $e){
		echo '<b>Erro: </b>'.$e->getCode().' <b>Mensagem:</b> '. $e->getMessage();
		//registrar esse erro para posterior atualização
	}
	



?>
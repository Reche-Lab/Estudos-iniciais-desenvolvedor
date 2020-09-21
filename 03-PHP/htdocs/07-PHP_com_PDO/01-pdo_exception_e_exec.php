<?php


	//Data Source Name: banco_de_dados:host=local_do_bd[pode ser num IP de uma máquina ou uma URL também]
	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	
	//usuário
	$usuario = 'root';

	//senha
	$senha = '';

	try{
		//PDO roda nativamente a partir do PHP5	
		$conexao = new PDO($dsn, $usuario, $senha);
		$query = '
			create table tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(32) not null
			)
		';

		
		$retorno = $conexao->exec($query);
		// o retorno dessa ação é '0' por que não há manipulação de dados, somente a criação de uma tabela
		// assim como o select tbm é '0' já que não manipula dados
		// updat, dele, e insert retorna a qtde de linha manipuladas
		echo $retorno;
		
		
		/*$query = '
			delete from tb_usuarios WHERE id >= 2;
		';*/

		/*$query = '
			drop table tb_usuarios;
		';*/

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values(
				"Bruno Reche", "bruno@reche.com", "123456"
			), (
				"Bruno Quirino", "bruno@quirino.com", "123456"
			), (
				"Henrique Reche", "henrique@reche.com", "123456"
			), (
				"Quirino Reche", "quirino@reche.com", "123456"
			)
		';
		$retorno = $conexao->exec($query);
		
		echo $retorno;

	} catch(PDOException $e){
		echo '<b>Erro: </b>'.$e->getCode().' <b>Mensagem:</b> '. $e->getMessage();
		//registrar esse erro para posterior atualização
	}
	



?>
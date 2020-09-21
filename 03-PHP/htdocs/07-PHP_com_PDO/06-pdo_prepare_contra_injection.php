<?php
	
	// ao inserir no formulário usuário e senha, é possivel inserir um código malicioso na constinuação da senha para por exemplo deletar uma tabela, como no código abaixo e então submeter o formulário
	// campo usuário bruno@reche.com
	// campo senha:	
	// 123456'; delete from tb_usuarios where 'a' = 'a
	// 123456'; insert into tb_usuarios(nome, email, senha) values("Henrique Bruno", "henrique@bruno.com", "123456"); select * from tb_usuarios where 'a' = 'a

	if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

		$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha = '';

		try{
			$conexao = new PDO($dsn, $usuario, $senha);
			$query = "select * from tb_usuarios where ";
			$query .= "email = :usuario "; // ':usuario ' se torna uma variável, que será usada no bindValue()
			$query .= "and senha = :senha"; // ':senha ' se torna uma variável,	que será usada no bindValue()

			$stmt = $conexao->prepare($query);
			
			$stmt->bindValue(':usuario', $_POST['usuario']);
			$stmt->bindValue(':senha', $_POST['senha']);
			
			$stmt->execute(); // para que haja um retorno do prepare() é preciso executar o $stmt ao final

			$usuario = $stmt->fetch();

			echo '<pre>';
			print_r($usuario);
			echo '</pre>';

		} catch(PDOException $e){
			echo '<b>Erro: </b>'.$e->getCode().' <b>Mensagem:</b> '. $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<form method="post" action="06-pdo_prepare_contra_injection.php">
		<input type="text" placeholder="Usuário" name="usuario">
		<br><br>
		<input type="password" placeholder="Senha" name="senha">
		<br><br>
		<button type="submit">Login</button>	
	</form>
</body>
</html>
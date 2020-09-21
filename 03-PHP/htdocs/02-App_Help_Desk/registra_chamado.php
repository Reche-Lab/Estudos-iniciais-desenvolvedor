<!-- registra_chamado.php -->
<?php 

	session_start();

	// para não causar problemas de caracteres é interessante substituir os possíveis caracteres que serão utilizados para a separação dos dados quue vão para o txt evitando problemas na hora do retorno.

	//tratamnto de dados
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	// concatenação para inclusão no txt
	// poderiamos utilizar também a função nativa para arrays:
	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; //PHP_EOL - faz a quebra de linha

	//Abrindo arquivo - a instrução 'a' se refere a abrir o arquivo e escrever ao final dele outras opções estão disponíveis na documentação do PHP
	$arquivo = fopen('../../02-app_help_desk/arquivo.hd', 'a'); //a extenção '.hd' é de help desk, ou seja podemos criar a extenção que quisermos, não precisa ser necessariamente '.txt'

	//Escrever dentro do arquivo aberto
	fwrite($arquivo, $texto);
	//Fechando arquivo
	fclose($arquivo);

	header('location: consultar_chamado.php')
?>
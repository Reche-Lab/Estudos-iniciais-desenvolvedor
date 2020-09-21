<?php
	session_start();
	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//remover indices do array de sessão
	//unset();
	unset($_SESSION['x']); //remove indice apenas se existir, sem erro

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variavel de sessão
	//session_destroy();
	session_destroy(); //será destruida 
	//porém deve-se forçar um redirecionamento

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/
	session_destroy();
	header('location: index.php');


?>
<!-- inicio.php -->
<hr>
<?php 
	include('33-menu.php'); //pode-se remover os parenteses '()' do construtor

	//include('33-menu.php'); 
	// erro 'warning' avisa e continua o restante do script

	//require('menu.php'); 
	// erro 'fatal error' interrompe o restante do script
	
	//include_once('33-menu.php'); 
	//se esse script aparecer duas vezes o segunda não roda
	
	//require_once('33-menu.php'); 
	//se esse script aparecer duas vezes o segunda não roda

	//se trocar o '33-menu.php', por '33-menu2.php' é possíver ver este erro

?>

<p>Conteúdo da página (inicio)</p>

<p>A diferença entre o 'include' e o 'require' é no momento de um potencial erro. 'warning' vs 'fatal error' respectivamente</p>

<p>No <b>'include'</b> se o arquivo não é encontrado os demais códigos seguem normalmente</p>

<p>No <b>'require'</b> o processamento do script dalí para frente é interrompido.</p>
<hr>

/<?php include('33-menu.php');?> 
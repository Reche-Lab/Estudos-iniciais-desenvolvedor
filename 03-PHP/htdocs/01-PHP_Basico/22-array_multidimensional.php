<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva'); ou
			$lista_coisas = [];
			$lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
			$lista_coisas['cores'] = array( 1 => 'Amarelo', 2 => 'Verde', 3 => 'Vermelho', 4 => 'Roxo');

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre><hr>';

			echo $lista_coisas['frutas'][3] . '<br>';
			echo $lista_coisas['cores'][3] . '<br>';
			
		?>			

	</body>
</html>
<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$frutas = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];

			$lista_coisas = ['frutas' => $frutas, 'Pessoas' => ['João', 'Maria', 'Magali', 'Cazé']];
			
			$cores = array( 1 => 'Amarelo', 2 => 'Verde', 3 => 'Vermelho', 4 => 'Roxo');

			$lista_coisas['cores'] = $cores;

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre><hr>';

			$indice = 2;
			echo "Buscando indice $indice de cada array específica<br>";
			echo $lista_coisas['frutas'][$indice] . '<br>';
			echo $lista_coisas['Pessoas'][$indice] . '<br>';
			echo $lista_coisas['cores'][$indice] . '<br>';
			
		?>			

	</body>
</html>
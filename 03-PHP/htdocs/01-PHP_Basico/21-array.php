<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva'); ou
			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
			$lista_frutas[] = 'Abacaxi';
			echo $lista_frutas[0] . '<hr>';
			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr>';
			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';
			echo '<hr>';
			//---------------------------------

			$lista_cores = array('a' => 'Amarelo', 'b' => 'Azul', 'y' => 'Verde', '7' => 'Preto', '23' => 'Roxo');
			$lista_cores['z'] = 'Rosa';
			echo '<pre>';
			print_r($lista_cores);
			echo '</pre>';
			echo '<hr>';

			
			
		?>			

	</body>
</html>
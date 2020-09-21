<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		

		<?php

			$texto = 'curso completo de PHP';
			
			echo $texto . '<br>';
			echo strtolower($texto) . '<br>';
			echo strtoupper($texto) . '<br>';
			echo ucfirst($texto) . '<br>';
			echo strlen($texto) . ' é o numero de caracteres da string.<br>'; // length - conta caracteres inclusive espaços.
			echo str_replace('completo', 'parcial', $texto) . '<br>'; // case sensitive
			echo str_replace('.', ',', 22.56) . '<br>';
			echo substr($texto, 6, 8) . '<br>'; // a partir da posição 6, trazer as próximas 8 casas
			echo substr($texto, 0, 14) . ' ...<br>'; // a partir da posição 6, trazer as próximas 14 casas depois concatena com ' ...'


		?>
			

	</body>
</html>
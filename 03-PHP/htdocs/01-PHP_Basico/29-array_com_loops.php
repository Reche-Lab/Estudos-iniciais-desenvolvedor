<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2>Loop com WHILE</h2>
		<?php
			$registros = array(
					'Titulo noticia 1', 
					'Titulo noticia 2', 
					'Titulo noticia 3' 
			);

			print_r($registros);
			echo '<hr>';

			$idx = 0;

			while ($idx < 3) {
				echo $registros[$idx] . '<br>';
				$idx++;
			}

			echo '<h2>Array multidimensional</h2><hr>';
			
			$registros2 = array(
				array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteúdo notícias 1'),
				array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteúdo notícias 2'),
				array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteúdo notícias 3'),
				array('titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteúdo notícias 4')    
			);

			echo '<pre>';
			print_r($registros2);
			echo '</pre>';

			$numRegistros = count($registros2);
			$idx = 0;

			echo 'Número de Registros da Array é igual a ' . $numRegistros;

			echo '<h2>Loop com WHILE</h2><hr>';

			while ($idx < $numRegistros) {
				echo '<h3>' . $registros2[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros2[$idx]['conteudo'] . '</p>';
				
				$idx++;
			}

			echo '<h2>Loop com DO WHILE</h2><hr>';
			$idx = 0;

			do{
				echo '<h3>' . $registros2[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros2[$idx]['conteudo'] . '</p>';
				$idx++;
			} while($idx < $numRegistros);

			echo '<h2>Loop com FOR</h2><hr>';

			for ($i=0; $i < $numRegistros; $i++){ 
				echo '<h3>' . $registros2[$i]['titulo'] . '</h3>';
				echo '<p>' . $registros2[$i]['conteudo'] . '</p>';
			};

		?>			


	</body>
</html>
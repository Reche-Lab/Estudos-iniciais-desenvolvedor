<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
						
			$funcionario1 = null;
			$funcionario2 = '';
			$funcionario3 = false;

			echo '<p>Utilizando a função is_null() para resultados "null" e " ":</p>';

			if(is_null($funcionario1)){
				echo 'Sim, a variável é null';
			} else{
				echo 'Não, a variável NÃO é null';
			}

			echo '<br>';

			if(is_null($funcionario2)){
				echo 'Sim, a variável é null';
			} else{
				echo 'Não, a variável NÃO é null';
			}
			//----------------------------------
			echo '<hr>';
			echo '<p>Utilizando a função empty() para resultados "null" e " ":</p>';

			if(empty($funcionario1)){
				echo 'Sim, a variável é vazia';
			} else{
				echo 'Não, a variável NÃO é vazia';
			}

			echo '<br>';

			if(empty($funcionario2)){
				echo 'Sim, a variável é vazia';
			} else{
				echo 'Não, a variável NÃO é vazia';
			}

			//----------------------------------
			echo '<hr>';
			echo '<p>Utilizando a função is_null() e empty() para resultado "false":</p>';

			if(is_null($funcionario3)){
				echo 'Sim, a variável é null';
			} else{
				echo 'Não, a variável NÃO é null';
			}

			echo '<br>';

			if(empty($funcionario3)){
				echo 'Sim, a variável é vazia';
			} else{
				echo 'Não, a variável NÃO é vazia';
			}


		?>			

	</body>
</html>
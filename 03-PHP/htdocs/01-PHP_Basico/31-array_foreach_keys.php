<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		
		<?php
			
			echo '<h2>Loop com FOREACH - Trabalhando as keys da Array</h2>';

			$funcionarios = ['João', 'Maria', 'Julia'];

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';

			foreach ($funcionarios as $indice => $nome_funcionarios) {
				echo "Key: $indice - Nome: $nome_funcionarios<br>";
			}

			//-------------------------------
			echo '<hr> <h2>Loop com FOREACH - Array multidimensional</h2>';

			$funcionarios2 = [
				['nome' => 'João', 'salario' => 2500, 'cargo' => 'Programador Jr'], 
				['nome' => 'Maria', 'salario' => 3000, 'cargo' => 'Programador Pl'], 
				['nome' => 'Julia', 'salario' => 2200, 'cargo' => ' Assistente Adm.']
			];

			echo '<pre>';
			print_r($funcionarios2);
			echo '</pre>';


			foreach ($funcionarios2 as $indice => $funcionario) {
				foreach ($funcionario as $indice2 => $valor) {
					echo "$indice2 - $valor<br>";
				};
				echo '<hr>';
			}

		?>			


	</body>
</html>
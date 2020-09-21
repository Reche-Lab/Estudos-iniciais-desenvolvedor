<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2 style="color: blue;">Exercício</h2>
		<p>1) Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos númericos asleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatórios contidos dentro da array não podem ser repetidos.</p>

		<hr>
		<h2 style="color: green;">Resposta</h2>		
		
		<?php
			
			$num_1_to_60 = Array();

			for ($i=0; $i < 6; $i++) { 
				$num_aleatorio = rand(1, 60);	
				do {
					$num_repetido = false;				
					foreach ($num_1_to_60 as $valor) {
						if ($valor == $num_aleatorio) {
							$num_repetido = true;
						}
					}
					if ($num_repetido) {
						$num_aleatorio = rand(1, 60);
					}
				} while ($num_repetido);

				$num_1_to_60[] = $num_aleatorio;
			}
			echo '<pre>';
			print_r($num_1_to_60);
			echo '<pre>';

			echo '<hr>';
			foreach ($num_1_to_60 as $value) {
				echo "$value ";
			}

		?>
		<br>
		<button onclick="location.reload();" style="padding: 10px;">Atualizar</button>

		<hr>
		<!-- ------------------------------ -->
		<h2 style="color: green;">Resolução 2</h2>

		<?php
			$numeros = [];

			while(count($numeros) <= 5) {
				$num = rand(1, 60);
				if(!in_array($num, $numeros)){
					$numeros[] = $num;
				}
			}
			echo '<pre style="margin: 0px; padding: 0px;">';
			print_r($numeros);
			echo '</pre>';
		?>		


	</body>
</html>